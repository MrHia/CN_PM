<?php
    // session_start();
    // if(!isset($_SESSION["user"])){
    //     header("location:/trotot/login.php");
    // }
    include '../Backend/shared/header.php';
    include '../Backend/shared/navbar.php';
    ?>
    <div id="wrapper">
        <?php
            include '../Backend/shared/sidebar.php';
        ?>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h1">Đăng tin mới</h1>
        </div>
            <form id="form_dangtin" class="form-horizontal js-form-submit-data js-frm-manage-post" action="../Backend/process/upload_post.php" method="POST">
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-12">
                                <h3>Địa chỉ cho thuê</h3>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="province_id" class="col-form-label">Tỉnh/Thành phố</label>
                                    <select id="province_id" name="province_id" class="form-control js-select-tinhthanhpho select2-hidden-accessible" required="" data-msg-required="Chưa chọn Tỉnh/TP" tabindex="-1" aria-hidden="true">
                                                                        <option value="">-- Chọn Tỉnh/TP --</option>
                                                                        <option value="90">Hồ Chí Minh</option>
                                                                        <option value="41">Hà Nội</option>
                                                                        <option value="72">Đà Nẵng</option>
                                                                        <option value="87">Bình Dương</option>
                                                                        <option value="88">Đồng Nai</option>
                                                                        <option value="89">Bà Rịa - Vũng Tàu</option>
                                                                        <option value="99">Cần Thơ</option>
                                                                        <option value="77">Khánh Hòa</option>
                                                                        <option value="60">Hải Phòng</option>
                                                                        <option value="97">An Giang</option>
                                                                        <option value="55">Bắc Giang</option>
                                                                        <option value="44">Bắc Kạn</option>
                                                                        <option value="102">Bạc Liêu</option>
                                                                        <option value="58">Bắc Ninh</option>
                                                                        <option value="93">Bến Tre</option>
                                                                        <option value="85">Bình Phước</option>
                                                                        <option value="79">Bình Thuận</option>
                                                                        <option value="75">Bình Định</option>
                                                                        <option value="103">Cà Mau</option>
                                                                        <option value="43">Cao Bằng</option>
                                                                        <option value="81">Gia Lai</option>
                                                                        <option value="42">Hà Giang</option>
                                                                        <option value="63">Hà Nam</option>
                                                                        <option value="68">Hà Tĩnh</option>
                                                                        <option value="59">Hải Dương</option>
                                                                        <option value="100">Hậu Giang</option>
                                                                        <option value="51">Hòa Bình</option>
                                                                        <option value="61">Hưng Yên</option>
                                                                        <option value="98">Kiên Giang</option>
                                                                        <option value="80">Kon Tum</option>
                                                                        <option value="48">Lai Châu</option>
                                                                        <option value="84">Lâm Đồng</option>
                                                                        <option value="53">Lạng Sơn</option>
                                                                        <option value="46">Lào Cai</option>
                                                                        <option value="91">Long An</option>
                                                                        <option value="64">Nam Định</option>
                                                                        <option value="67">Nghệ An</option>
                                                                        <option value="65">Ninh Bình</option>
                                                                        <option value="78">Ninh Thuận</option>
                                                                        <option value="56">Phú Thọ</option>
                                                                        <option value="76">Phú Yên</option>
                                                                        <option value="69">Quảng Bình</option>
                                                                        <option value="73">Quảng Nam</option>
                                                                        <option value="74">Quảng Ngãi</option>
                                                                        <option value="54">Quảng Ninh</option>
                                                                        <option value="70">Quảng Trị</option>
                                                                        <option value="101">Sóc Trăng</option>
                                                                        <option value="49">Sơn La</option>
                                                                        <option value="86">Tây Ninh</option>
                                                                        <option value="62">Thái Bình</option>
                                                                        <option value="52">Thái Nguyên</option>
                                                                        <option value="66">Thanh Hóa</option>
                                                                        <option value="71">Thừa Thiên Huế</option>
                                                                        <option value="92">Tiền Giang</option>
                                                                        <option value="94">Trà Vinh</option>
                                                                        <option value="45">Tuyên Quang</option>
                                                                        <option value="95">Vĩnh Long</option>
                                                                        <option value="57">Vĩnh Phúc</option>
                                                                        <option value="50">Yên Bái</option>
                                                                        <option value="82">Đắk Lắk</option>
                                                                        <option value="83">Đắk Nông</option>
                                                                        <option value="47">Điện Biên</option>
                                                                        <option value="96">Đồng Tháp</option>
                                                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 172px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-province_id-container"><span class="select2-selection__rendered" id="select2-province_id-container" title="-- Chọn Tỉnh/TP --"></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>

                            </div>

                        </div>
                        <!-- <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="diachi" class="col-form-label">Địa chỉ chính xác</label>
                                    <input type="text" readonly="" class="form-control" name="dia_chi" id="diachi" required="" data-msg-required="Chưa chọn khu vực đăng tin">
                                </div>
                            </div>
                        </div> -->
                        <div class="form-group row mt-5">
                            <div class="col-md-12">
                                <h3>Thông tin mô tả</h3>
                            </div>
                        </div>
                        <div class="form-group row mt-3">
                            <label for="post_cat" class="col-md-12 col-form-label">Loại chuyên mục</label>
                            <div class="col-md-6">
                                <select class="form-control" id="post_cat" name="loai_chuyen_muc" required="" data-msg-required="Chưa chọn loại chuyên mục">
                                    <option value="">-- Chọn loại chuyên mục --</option>
                                    
                                    <option value="1">Phòng trọ, nhà trọ</option>
                                    <option value="2">Nhà thuê nguyên căn</option>
                                    <optgroup label="Căn hộ">
                                        <option value="3">Cho thuê căn hộ</option>
                                        <option value="6">Cho thuê căn hộ mini</option>
                                        <option value="7">Cho thuê căn hộ dịch vụ</option>
                                    </optgroup>
                                    <option value="4">Tìm người ở ghép</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="post_title" class="col-md-12 col-form-label">Tiêu đề</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="tieu_de" id="post_title" value="" minlength="30" maxlength="120" required="" data-msg-required="Tiêu đề không được để trống" data-msg-minlength="Tiêu đề quá ngắn" data-msg-maxlength="Tiêu đề quá dài">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="post_content" class="col-md-12 col-form-label">Nội dung mô tả</label>
                            <div class="col-md-12">
                                <textarea class="form-control" name="noi_dung" id="post_content" rows="10" required="" minlength="100" data-msg-required="Bạn chưa nhập nội dung" data-msg-minlength="Nội dung tối thiểu 100 kí tự"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="phone" class="col-md-12 col-form-label">Thông tin liên hệ</label>
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    
                                        <input id="phone" type="number" name="phone" class="form-control" readonly="readonly" required="" data-msg-required="Số điện thoại" value="0368771251">
                                                            </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="giachothue" class="col-md-12 col-form-label">Giá cho thuê</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input id="giachothue" name="gia" pattern="[0-9.]+" type="text" class="form-control" required="" data-msg-required="Bạn chưa nhập giá phòng" data-msg-min="Giá phòng chưa đúng">
                                    <div class="input-group-append">
                                        <span class="input-group-text">đồng</span>
                                    </div>
                                </div>
                                <small class="form-text text-muted">Nhập đầy đủ số, ví dụ 1 triệu thì nhập là 1000000</small>
                            </div>
                            <label for="text_giachothue" id="text_giachothue" class="col-sm-12 control-label js-number-text" style="color: red;"></label>
                        </div>
                        <div class="form-group row">
                            <label for="post_acreage" class="col-md-12 col-form-label">Diện tích</label>
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <input id="post_acreage" type="number" attern="[0-9.]+" name="dien_tich" max="1000" class="form-control" required="" data-msg-required="Bạn chưa nhập diện tích">
                                    <div class="input-group-append">
                                        <span class="input-group-text">m<sup>2</sup></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="doi_tuong" class="col-md-12 col-form-label">Đối tượng cho thuê</label>
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <select class="form-control" id="post_cat" name="doi_tuong">
                                        <option value="Tất cả">-- Tất cả --</option>
                                        <option value="Nam">Nam</option>
                                        <option value="Nữ">Nữ</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mt-5">
                            <div class="col-md-12">
                                <h3>Hình ảnh</h3>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <p>Cập nhật hình ảnh rõ ràng sẽ cho thuê nhanh hơn</p>
                                <div class="form-group">
                                        <input id="fileupload" type="file" multiple="multiple" />
                                        <hr />
                                        <b>Ảnh đã chọn</b>
                                        <br />
                                        <br />
                                        <div id="dvPreview">
                                            </div>
                                    </div>
                                <div class="list_photos row dropzone-previews" id="list-photos-dropzone-previews"></div>
                            </div>
                        </div>
                        <div class="form-group row mt-5">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-success mb-5 btn-lg btn-block">Tiếp tục</button>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-md-4">
                        

                        <div class="card mb-5" style="color: #856404; background-color: #fff3cd; border-color: #ffeeba;">
                            <div class="card-body">
                                <h4 class="card-title">Lưu ý khi đăng tin</h4>
                                <ul>
                                    <li style="list-style-type: square; margin-left: 15px;">Nội dung phải viết bằng tiếng Việt có dấu</li>
                                    <li style="list-style-type: square; margin-left: 15px;">Tiêu đề tin không dài quá 100 kí tự</li>
                                    <li style="list-style-type: square; margin-left: 15px;">Các bạn nên điền đầy đủ thông tin vào các mục để tin đăng có hiệu quả hơn.</li>
                                    <li style="list-style-type: square; margin-left: 15px;">Để tăng độ tin cậy và tin rao được nhiều người quan tâm hơn, hãy sửa vị trí tin rao của bạn trên bản đồ bằng cách kéo icon tới đúng vị trí của tin rao.</li>
                                    <li style="list-style-type: square; margin-left: 15px;">Tin đăng có hình ảnh rõ ràng sẽ được xem và gọi gấp nhiều lần so với tin rao không có ảnh. Hãy đăng ảnh để được giao dịch nhanh chóng!</li>
                                </ul>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <input type="hidden" id="action" name="action" value="add_new_post">
                <input type="hidden" id="map_lat" name="map_lat" value="">
                <input type="hidden" id="map_long" name="map_long" value="">
                <input type="hidden" id="payment_method" name="payment_method" value="thanh_toan_sau">
            </form>
        <?php
            include '../Backend/shared/footer.php';
        ?>
    </div>