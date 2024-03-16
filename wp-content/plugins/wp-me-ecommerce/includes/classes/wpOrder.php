<?php
class wpOrder
{
    private $_orders = '';
    public function __construct()
    {
        global $wpdb;
        $this->_orders = $wpdb->prefix . 'orders';
    }

    public function all()
    {
        global $wpdb;
        $sql = "SELECT * FROM $this->_orders";

        return $wpdb->get_results($sql);
    }

    public function paginate($limit = 20)
    {
        global $wpdb;

        $paged = 1;

        // Lấy tổng số records
        $sql = "SELECT count(id) from $this->_orders";

        $total_items = $wpdb->get_var($sql);

        // Thuật toán phân trang
        /**
         * Limit
         * Tổng số trang: total_pages
         * Tính offset
         */

        $total_pages = ceil($total_items / $limit);
        $offset = ($paged * $limit) - $limit;

        $sqlPaginate = "SELECT * from $this->_orders";
        $sqlPaginate .= " ORDER BY id DESC";
        $sqlPaginate .= " LIMIT $limit OFFSET $offset";

        return $wpdb->get_results($sqlPaginate);
    }

    public function find($id)
    {
        global $wpdb;
        $sql = "SELECT * from $this->_orders WHERE id = $id";

        return $wpdb->get_row($sql);
    }

    public function save($data)
    {
        global $wpdb;
        $wpdb->insert($this->_orders, $data);
        $lastId = $wpdb->insert_id;

        return $this->find($lastId);
    }

    public function update($id, $data)
    {
        global $wpdb;
        $wpdb->update($this->_orders, $data, [
            'id' => $id
        ]);

        return true;
    }

    public function destroy($id)
    {
        global $wpdb;
        $wpdb->delete($this->_orders, [
            'id' => $id
        ]);

        return true;
    }
}