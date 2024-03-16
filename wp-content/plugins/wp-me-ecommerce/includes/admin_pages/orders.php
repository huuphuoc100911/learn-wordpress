<?php
?>

<div class="wrap">
    <h1 class="wp-heading-inline">
        Quản lý đơn hàng</h1>

    <hr class="wp-header-end">

    <h2 class="screen-reader-text">Lọc danh sách bài đăng</h2>
    <ul class="subsubsub">
        <li class="all"><a href="" class="current" aria-current="page">Tất cả</a> |</li>
        <li class="publish"><a href="">Đơn hàng mới</a></li>
        <li class="publish"><a href="">Đã hoàn thành</a></li>
        <li class="publish"><a href="">Đã hủy</a></li>
    </ul>
    <form id="posts-filter" method="get">
        <p class="search-box">
            <label class="screen-reader-text" for="post-search-input">Tìm các đơn hàng:</label>
            <input type="search" id="post-search-input" placeholder="Tìm các đơn hàng" name="s" value="">
            <input type="submit" id="search-submit" class="button" value="Tìm các đơn hàng">
        </p>

        <input type="hidden" name="post_status" class="post_status_page" value="all">
        <input type="hidden" name="post_type" class="post_type_page" value="post">

        <input type="hidden" id="_wpnonce" name="_wpnonce" value="be87194b0a"><input type="hidden"
            name="_wp_http_referer" value="/learn-wordpress/wp-admin/edit.php">
        <div class="tablenav top">

            <div class="alignleft actions bulkactions">
                <label for="bulk-action-selector-top" class="screen-reader-text">Lựa chọn thao tác hàng
                    loạt</label><select name="action" id="bulk-action-selector-top">
                    <option value="-1">Hành động</option>
                    <option value="edit" class="hide-if-no-js">Chỉnh sửa</option>
                    <option value="trash">Bỏ vào thùng rác</option>
                </select>
                <input type="submit" id="doaction" class="button action" value="Áp dụng">
            </div>
            <div class="alignleft actions">
                <label for="filter-by-date" class="screen-reader-text">Lọc theo ngày</label>
                <select name="m" id="filter-by-date">
                    <option selected="selected" value="0">Tất cả các ngày</option>
                    <option value="202403">Tháng Ba 2024</option>
                </select>
                <label class="screen-reader-text" for="cat">Lọc theo danh mục</label><select name="cat" id="cat"
                    class="postform">
                    <option value="0">Tất cả chuyên mục</option>
                    <option class="level-0" value="1">Chưa phân loại</option>
                    <option class="level-0" value="4">Công nghệ</option>
                </select>
                <input type="submit" name="filter_action" id="post-query-submit" class="button" value="Lọc">
            </div>
            <h2 class="screen-reader-text">Điều hướng danh sách các bài viết</h2>
            <div class="tablenav-pages"><span class="displaying-num">3 mục</span>
                <span class="pagination-links"><span class="tablenav-pages-navspan button disabled"
                        aria-hidden="true">«</span>
                    <span class="tablenav-pages-navspan button disabled" aria-hidden="true">‹</span>
                    <span class="paging-input"><label for="current-page-selector" class="screen-reader-text">Trang hiện
                            tại</label><input class="current-page" id="current-page-selector" type="text" name="paged"
                            value="1" size="1" aria-describedby="table-paging"><span class="tablenav-paging-text"> trên
                            <span class="total-pages">3</span></span></span>
                    <a class="next-page button"
                        href="http://localhost/learn-wordpress/wp-admin/edit.php?post_type=post&amp;mode=list&amp;paged=2"><span
                            class="screen-reader-text">Trang sau</span><span aria-hidden="true">›</span></a>
                    <a class="last-page button"
                        href="http://localhost/learn-wordpress/wp-admin/edit.php?post_type=post&amp;mode=list&amp;paged=3"><span
                            class="screen-reader-text">Trang cuối</span><span aria-hidden="true">»</span></a></span>
            </div>
            <br class="clear">
        </div>
        <h2 class="screen-reader-text">Danh sách bài viết</h2>
        <table class="wp-list-table widefat fixed striped table-view-list posts">
            <caption class="screen-reader-text">Table ordered by Date. Descending.</caption>
            <thead>
                <tr>
                    <td id="cb" class="manage-column column-cb check-column"><input id="cb-select-all-1"
                            type="checkbox">
                        <label for="cb-select-all-1"><span class="screen-reader-text">Chọn toàn bộ</span></label>
                    </td>
                    <th scope="col" id="title" class="manage-column column-title column-primary sortable desc"
                        abbr="Tiêu đề"><a
                            href="http://localhost/learn-wordpress/wp-admin/edit.php?orderby=title&amp;order=asc"><span>Tiêu
                                đề</span><span class="sorting-indicators"><span class="sorting-indicator asc"
                                    aria-hidden="true"></span><span class="sorting-indicator desc"
                                    aria-hidden="true"></span></span> <span class="screen-reader-text">Sort
                                ascending.</span></a></th>
                    <th scope="col" id="author" class="manage-column column-author">Tác giả</th>
                    <th scope="col" id="categories" class="manage-column column-categories">Chuyên mục</th>
                    <th scope="col" id="tags" class="manage-column column-tags">Thẻ</th>
                    <th scope="col" id="comments" class="manage-column column-comments num sortable desc"
                        abbr="Bình luận"><a
                            href="http://localhost/learn-wordpress/wp-admin/edit.php?orderby=comment_count&amp;order=asc"><span><span
                                    class="vers comment-grey-bubble" title="Bình luận" aria-hidden="true"></span><span
                                    class="screen-reader-text">Bình luận</span></span><span
                                class="sorting-indicators"><span class="sorting-indicator asc"
                                    aria-hidden="true"></span><span class="sorting-indicator desc"
                                    aria-hidden="true"></span></span> <span class="screen-reader-text">Sort
                                ascending.</span></a></th>
                    <th scope="col" id="date" class="manage-column column-date sorted desc" aria-sort="descending"
                        abbr="Thời gian"><a
                            href="http://localhost/learn-wordpress/wp-admin/edit.php?orderby=date&amp;order=asc"><span>Thời
                                gian</span><span class="sorting-indicators"><span class="sorting-indicator asc"
                                    aria-hidden="true"></span><span class="sorting-indicator desc"
                                    aria-hidden="true"></span></span></a></th>
                </tr>
            </thead>

            <tbody id="the-list">
                <tr id="post-1"
                    class="iedit author-self level-0 post-1 type-post status-publish format-standard hentry category-khong-phan-loai">
                    <th scope="row" class="check-column"> <input id="cb-select-1" type="checkbox" name="post[]"
                            value="1">
                        <label for="cb-select-1">
                            <span class="screen-reader-text">
                                Chọn Chào tất cả mọi người! </span>
                        </label>
                        <div class="locked-indicator">
                            <span class="locked-indicator-icon" aria-hidden="true"></span>
                            <span class="screen-reader-text">
                                “Chào tất cả mọi người!” đã bị khóa </span>
                        </div>
                    </th>
                    <td class="title column-title has-row-actions column-primary page-title" data-colname="Tiêu đề">
                        <div class="locked-info"><span class="locked-avatar"></span> <span class="locked-text"></span>
                        </div>
                        <strong><a class="row-title"
                                href="http://localhost/learn-wordpress/wp-admin/post.php?post=1&amp;action=edit"
                                aria-label="“Chào tất cả mọi người!” (Chỉnh sửa)">Chào tất cả mọi người!</a></strong>

                        <div class="hidden" id="inline_1">
                            <div class="post_title">Chào tất cả mọi người!</div>
                            <div class="post_name">chao-moi-nguoi</div>
                            <div class="post_author">1</div>
                            <div class="comment_status">open</div>
                            <div class="ping_status">open</div>
                            <div class="_status">publish</div>
                            <div class="jj">13</div>
                            <div class="mm">03</div>
                            <div class="aa">2024</div>
                            <div class="hh">15</div>
                            <div class="mn">29</div>
                            <div class="ss">54</div>
                            <div class="post_password"></div>
                            <div class="page_template">default</div>
                            <div class="post_category" id="category_1">1</div>
                            <div class="tags_input" id="post_tag_1"></div>
                            <div class="sticky"></div>
                            <div class="post_format"></div>
                        </div>
                        <div class="row-actions"><span class="edit"><a
                                    href="http://localhost/learn-wordpress/wp-admin/post.php?post=1&amp;action=edit"
                                    aria-label="Sửa “Chào tất cả mọi người!”">Chỉnh sửa</a> | </span><span
                                class="inline hide-if-no-js"><button type="button" class="button-link editinline"
                                    aria-label="Chỉnh sửa nhanh “Chào tất cả mọi người!”" aria-expanded="false">Sửa
                                    nhanh</button> | </span><span class="trash"><a
                                    href="http://localhost/learn-wordpress/wp-admin/post.php?post=1&amp;action=trash&amp;_wpnonce=3182b06a7f"
                                    class="submitdelete" aria-label="Bỏ “Chào tất cả mọi người!” vào thùng rác">Thùng
                                    rác</a> | </span><span class="view"><a
                                    href="http://localhost/learn-wordpress/chao-moi-nguoi/" rel="bookmark"
                                    aria-label="Xem “Chào tất cả mọi người!”">Xem</a></span></div><button type="button"
                            class="toggle-row"><span class="screen-reader-text">Hiển thị chi tiết</span></button>
                    </td>
                    <td class="author column-author" data-colname="Tác giả"><a
                            href="edit.php?post_type=post&amp;author=1">admin</a></td>
                    <td class="categories column-categories" data-colname="Chuyên mục"><a
                            href="edit.php?category_name=khong-phan-loai">Chưa phân loại</a></td>
                    <td class="tags column-tags" data-colname="Thẻ"><span aria-hidden="true">—</span><span
                            class="screen-reader-text">Không có thẻ nào</span></td>
                    <td class="comments column-comments" data-colname="Bình luận">
                        <div class="post-com-count-wrapper">
                            <a href="http://localhost/learn-wordpress/wp-admin/edit-comments.php?p=1&amp;comment_status=approved"
                                class="post-com-count post-com-count-approved"><span class="comment-count-approved"
                                    aria-hidden="true">1</span><span class="screen-reader-text">1 bình
                                    luận</span></a><span
                                class="post-com-count post-com-count-pending post-com-count-no-pending"><span
                                    class="comment-count comment-count-no-pending" aria-hidden="true">0</span><span
                                    class="screen-reader-text">Không có bình luận nào đang chờ xử lí</span></span>
                        </div>
                    </td>
                    <td class="date column-date" data-colname="Thời gian">Đã xuất bản<br>13/03/2024 lúc 3:29 chiều</td>
                </tr>
            </tbody>

            <tfoot>
                <tr>
                    <td class="manage-column column-cb check-column"><input id="cb-select-all-2" type="checkbox">
                        <label for="cb-select-all-2"><span class="screen-reader-text">Chọn toàn bộ</span></label>
                    </td>
                    <th scope="col" class="manage-column column-title column-primary sortable desc" abbr="Tiêu đề"><a
                            href="http://localhost/learn-wordpress/wp-admin/edit.php?orderby=title&amp;order=asc"><span>Tiêu
                                đề</span><span class="sorting-indicators"><span class="sorting-indicator asc"
                                    aria-hidden="true"></span><span class="sorting-indicator desc"
                                    aria-hidden="true"></span></span> <span class="screen-reader-text">Sort
                                ascending.</span></a></th>
                    <th scope="col" class="manage-column column-author">Tác giả</th>
                    <th scope="col" class="manage-column column-categories">Chuyên mục</th>
                    <th scope="col" class="manage-column column-tags">Thẻ</th>
                    <th scope="col" class="manage-column column-comments num sortable desc" abbr="Bình luận"><a
                            href="http://localhost/learn-wordpress/wp-admin/edit.php?orderby=comment_count&amp;order=asc"><span><span
                                    class="vers comment-grey-bubble" title="Bình luận" aria-hidden="true"></span><span
                                    class="screen-reader-text">Bình luận</span></span><span
                                class="sorting-indicators"><span class="sorting-indicator asc"
                                    aria-hidden="true"></span><span class="sorting-indicator desc"
                                    aria-hidden="true"></span></span> <span class="screen-reader-text">Sort
                                ascending.</span></a></th>
                    <th scope="col" class="manage-column column-date sorted desc" aria-sort="descending"
                        abbr="Thời gian"><a
                            href="http://localhost/learn-wordpress/wp-admin/edit.php?orderby=date&amp;order=asc"><span>Thời
                                gian</span><span class="sorting-indicators"><span class="sorting-indicator asc"
                                    aria-hidden="true"></span><span class="sorting-indicator desc"
                                    aria-hidden="true"></span></span></a></th>
                </tr>
            </tfoot>

        </table>
        <div class="tablenav bottom">

            <div class="alignleft actions bulkactions">
                <label for="bulk-action-selector-bottom" class="screen-reader-text">Lựa chọn thao tác hàng
                    loạt</label><select name="action2" id="bulk-action-selector-bottom">
                    <option value="-1">Hành động</option>
                    <option value="edit" class="hide-if-no-js">Chỉnh sửa</option>
                    <option value="trash">Bỏ vào thùng rác</option>
                </select>
                <input type="submit" id="doaction2" class="button action" value="Áp dụng">
            </div>
            <div class="alignleft actions">
            </div>
            <div class="tablenav-pages"><span class="displaying-num">3 mục</span>
                <span class="pagination-links"><span class="tablenav-pages-navspan button disabled"
                        aria-hidden="true">«</span>
                    <span class="tablenav-pages-navspan button disabled" aria-hidden="true">‹</span>
                    <span class="screen-reader-text">Trang hiện tại</span><span id="table-paging"
                        class="paging-input"><span class="tablenav-paging-text">1 trên <span
                                class="total-pages">3</span></span></span>
                    <a class="next-page button"
                        href="http://localhost/learn-wordpress/wp-admin/edit.php?post_type=post&amp;mode=list&amp;paged=2"><span
                            class="screen-reader-text">Trang sau</span><span aria-hidden="true">›</span></a>
                    <a class="last-page button"
                        href="http://localhost/learn-wordpress/wp-admin/edit.php?post_type=post&amp;mode=list&amp;paged=3"><span
                            class="screen-reader-text">Trang cuối</span><span aria-hidden="true">»</span></a></span>
            </div>
            <br class="clear">
        </div>
    </form>


    <form method="get">
        <table style="display: none">
            <tbody id="inlineedit">
                <tr id="inline-edit"
                    class="inline-edit-row inline-edit-row-post quick-edit-row quick-edit-row-post inline-edit-post"
                    style="display: none">
                    <td colspan="7" class="colspanchange">
                        <div class="inline-edit-wrapper" role="region" aria-labelledby="quick-edit-legend">
                            <fieldset class="inline-edit-col-left">
                                <legend class="inline-edit-legend" id="quick-edit-legend">Sửa nhanh</legend>
                                <div class="inline-edit-col">



                                    <label>
                                        <span class="title">Tiêu đề</span>
                                        <span class="input-text-wrap"><input type="text" name="post_title"
                                                class="ptitle" value=""></span>
                                    </label>


                                    <label>
                                        <span class="title">Đường dẫn</span>
                                        <span class="input-text-wrap"><input type="text" name="post_name" value=""
                                                autocomplete="off" spellcheck="false"></span>
                                    </label>




                                    <fieldset class="inline-edit-date">
                                        <legend><span class="title">Thời gian</span></legend>
                                        <div class="timestamp-wrap"><label><span
                                                    class="screen-reader-text">Tháng</span><select class="form-required"
                                                    name="mm">
                                                    <option value="01" data-text="Th1">01-Th1</option>
                                                    <option value="02" data-text="Th2">02-Th2</option>
                                                    <option value="03" data-text="Th3" selected="selected">03-Th3
                                                    </option>
                                                    <option value="04" data-text="Th4">04-Th4</option>
                                                    <option value="05" data-text="Th5">05-Th5</option>
                                                    <option value="06" data-text="Th6">06-Th6</option>
                                                    <option value="07" data-text="Th7">07-Th7</option>
                                                    <option value="08" data-text="Th8">08-Th8</option>
                                                    <option value="09" data-text="Th9">09-Th9</option>
                                                    <option value="10" data-text="Th10">10-Th10</option>
                                                    <option value="11" data-text="Th11">11-Th11</option>
                                                    <option value="12" data-text="Th12">12-Th12</option>
                                                </select></label> <label><span class="screen-reader-text">Ban
                                                    ngày</span><input type="text" name="jj" value="13" size="2"
                                                    maxlength="2" autocomplete="off" class="form-required"></label>,
                                            <label><span class="screen-reader-text">Năm</span><input type="text"
                                                    name="aa" value="2024" size="4" maxlength="4" autocomplete="off"
                                                    class="form-required"></label> vào lúc <label><span
                                                    class="screen-reader-text">Giờ</span><input type="text" name="hh"
                                                    value="15" size="2" maxlength="2" autocomplete="off"
                                                    class="form-required"></label>:<label><span
                                                    class="screen-reader-text">Phút</span><input type="text" name="mn"
                                                    value="29" size="2" maxlength="2" autocomplete="off"
                                                    class="form-required"></label>
                                        </div><input type="hidden" id="ss" name="ss" value="54">
                                    </fieldset>
                                    <br class="clear">

                                    <label class="inline-edit-author"><span class="title">Tác giả</span><select
                                            name="post_author" class="authors">
                                            <option value="1">admin (admin)</option>
                                        </select></label>

                                    <div class="inline-edit-group wp-clearfix">
                                        <label class="alignleft">
                                            <span class="title">Mật khẩu</span>
                                            <span class="input-text-wrap"><input type="text" name="post_password"
                                                    class="inline-edit-password-input" value=""></span>
                                        </label>

                                        <span class="alignleft inline-edit-or">
                                            – HOẶC – </span>
                                        <label class="alignleft inline-edit-private">
                                            <input type="checkbox" name="keep_private" value="private">
                                            <span class="checkbox-title">Riêng tư</span>
                                        </label>
                                    </div>


                                </div>
                            </fieldset>


                            <fieldset class="inline-edit-col-center inline-edit-categories">
                                <div class="inline-edit-col">


                                    <span class="title inline-edit-categories-label">Chuyên mục</span>
                                    <input type="hidden" name="post_category[]" value="0">
                                    <ul class="cat-checklist category-checklist">

                                        <li id="category-1" class="popular-category"><label class="selectit"><input
                                                    value="1" type="checkbox" name="post_category[]" id="in-category-1">
                                                Chưa phân loại</label></li>

                                        <li id="category-4"><label class="selectit"><input value="4" type="checkbox"
                                                    name="post_category[]" id="in-category-4"> Công nghệ</label></li>
                                    </ul>


                                </div>
                            </fieldset>


                            <fieldset class="inline-edit-col-right">
                                <div class="inline-edit-col">




                                    <label>
                                        <span class="title">Giao diện</span>
                                        <select name="page_template">
                                            <option value="default">Mẫu mặc định</option>

                                            <option value="single-with-sidebar">Single with Sidebar</option>
                                        </select>
                                    </label>




                                    <div class="inline-edit-tags-wrap">
                                        <label class="inline-edit-tags">
                                            <span class="title">Thẻ</span>
                                            <textarea data-wp-taxonomy="post_tag" cols="22" rows="1"
                                                name="tax_input[post_tag]" class="tax_input_post_tag"
                                                aria-describedby="inline-edit-post_tag-desc"></textarea>
                                        </label>
                                        <p class="howto" id="inline-edit-post_tag-desc">Phân cách các thẻ bằng dấu phẩy
                                        </p>
                                    </div>





                                    <div class="inline-edit-group wp-clearfix">


                                        <label class="alignleft">
                                            <input type="checkbox" name="comment_status" value="open">
                                            <span class="checkbox-title">Cho phép gửi phản hồi</span>
                                        </label>



                                        <label class="alignleft">
                                            <input type="checkbox" name="ping_status" value="open">
                                            <span class="checkbox-title">Cho phép Ping</span>
                                        </label>


                                    </div>



                                    <div class="inline-edit-group wp-clearfix">

                                        <label class="inline-edit-status alignleft">
                                            <span class="title">Trạng thái</span>
                                            <select name="_status">

                                                <option value="publish">Đã xuất bản</option>
                                                <option value="future">Đã lên lịch</option>

                                                <option value="pending">Chờ duyệt</option>
                                                <option value="draft">Bản nháp</option>
                                            </select>
                                        </label>



                                        <label class="alignleft">
                                            <input type="checkbox" name="sticky" value="sticky">
                                            <span class="checkbox-title">Dán bài này lên đầu</span>
                                        </label>



                                    </div>


                                </div>
                            </fieldset>


                            <div class="submit inline-edit-save">
                                <input type="hidden" id="_inline_edit" name="_inline_edit" value="071e5fedea"> <button
                                    type="button" class="button button-primary save">Cập nhật</button>

                                <button type="button" class="button cancel">Hủy</button>

                                <span class="spinner"></span>

                                <input type="hidden" name="post_view" value="list">
                                <input type="hidden" name="screen" value="edit-post">

                                <div class="notice notice-error notice-alt inline hidden">
                                    <p class="error"></p>
                                </div>
                            </div>
                        </div> <!-- end of .inline-edit-wrapper -->

                    </td>
                </tr>

                <tr id="bulk-edit"
                    class="inline-edit-row inline-edit-row-post bulk-edit-row bulk-edit-row-post bulk-edit-post"
                    style="display: none">
                    <td colspan="7" class="colspanchange">
                        <div class="inline-edit-wrapper" role="region" aria-labelledby="bulk-edit-legend">
                            <fieldset class="inline-edit-col-left">
                                <legend class="inline-edit-legend" id="bulk-edit-legend">Chỉnh sửa hàng loạt</legend>
                                <div class="inline-edit-col">



                                    <div id="bulk-title-div">
                                        <div id="bulk-titles"></div>
                                    </div>






                                </div>
                            </fieldset>
                            <fieldset class="inline-edit-col-center inline-edit-categories">
                                <div class="inline-edit-col">


                                    <span class="title inline-edit-categories-label">Chuyên mục</span>
                                    <input type="hidden" name="post_category[]" value="0">
                                    <ul class="cat-checklist category-checklist">

                                        <li id="category-1" class="popular-category"><label class="selectit"><input
                                                    value="1" type="checkbox" name="post_category[]" id="in-category-1">
                                                Chưa phân loại</label></li>

                                        <li id="category-4"><label class="selectit"><input value="4" type="checkbox"
                                                    name="post_category[]" id="in-category-4"> Công nghệ</label></li>
                                    </ul>


                                </div>
                            </fieldset>


                            <fieldset class="inline-edit-col-right">
                                <div class="inline-edit-tags-wrap">
                                    <label class="inline-edit-tags">
                                        <span class="title">Thẻ</span>
                                        <textarea data-wp-taxonomy="post_tag" cols="22" rows="1"
                                            name="tax_input[post_tag]" class="tax_input_post_tag"
                                            aria-describedby="inline-edit-post_tag-desc"></textarea>
                                    </label>
                                    <p class="howto" id="inline-edit-post_tag-desc">Phân cách các thẻ bằng dấu phẩy</p>
                                </div>
                                <div class="inline-edit-col">

                                    <label class="inline-edit-author"><span class="title">Tác giả</span><select
                                            name="post_author" class="authors">
                                            <option value="-1">— Không đổi —</option>
                                            <option value="1">admin (admin)</option>
                                        </select></label>


                                    <label>
                                        <span class="title">Giao diện</span>
                                        <select name="page_template">
                                            <option value="-1">— Không đổi —</option>
                                            <option value="default">Mẫu mặc định</option>

                                            <option value="single-with-sidebar">Single with Sidebar</option>
                                        </select>
                                    </label>





                                    <div class="inline-edit-group wp-clearfix">


                                        <label class="alignleft">
                                            <span class="title">Bình luận</span>
                                            <select name="comment_status">
                                                <option value="">— Không đổi —</option>
                                                <option value="open">Cho phép</option>
                                                <option value="closed">Không cho phép</option>
                                            </select>
                                        </label>



                                        <label class="alignright">
                                            <span class="title">Ping</span>
                                            <select name="ping_status">
                                                <option value="">— Không đổi —</option>
                                                <option value="open">Cho phép</option>
                                                <option value="closed">Không cho phép</option>
                                            </select>
                                        </label>


                                    </div>



                                    <div class="inline-edit-group wp-clearfix">

                                        <label class="inline-edit-status alignleft">
                                            <span class="title">Trạng thái</span>
                                            <select name="_status">
                                                <option value="-1">— Không đổi —</option>

                                                <option value="publish">Đã xuất bản</option>

                                                <option value="private">Riêng tư</option>

                                                <option value="pending">Chờ duyệt</option>
                                                <option value="draft">Bản nháp</option>
                                            </select>
                                        </label>



                                        <label class="alignright">
                                            <span class="title">Đính</span>
                                            <select name="sticky">
                                                <option value="-1">— Không đổi —</option>
                                                <option value="sticky">Đính</option>
                                                <option value="unsticky">Không dán</option>
                                            </select>
                                        </label>



                                    </div>


                                </div>
                            </fieldset>


                            <div class="submit inline-edit-save">
                                <input type="submit" name="bulk_edit" id="bulk_edit" class="button button-primary"
                                    value="Cập nhật">
                                <button type="button" class="button cancel">Hủy</button>


                                <input type="hidden" name="post_view" value="list">
                                <input type="hidden" name="screen" value="edit-post">

                                <div class="notice notice-error notice-alt inline hidden">
                                    <p class="error"></p>
                                </div>
                            </div>
                        </div> <!-- end of .inline-edit-wrapper -->

                    </td>
                </tr>

            </tbody>
        </table>
    </form>

    <div id="ajax-response"></div>
    <div class="clear"></div>
</div>