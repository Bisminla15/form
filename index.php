<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <style>
        .head {
            background-color: rgb(207, 238, 192);
        }

        .head1 {
            text-align: center;
            font-size: 30px;
            color: rgb(15, 92, 28);
        }

    </style>
</head>

<body class="head">
    <h1 class="head1">แบบฟอร์มกรอกข้อมูลส่วนตัว</h1>
    <div class="container">
        <form action="">
            <div class="form row">
                <div class="form-group col-md-3">
                    <label for="number">เลขประจำตัวประชาชน*</label>
                    <input type="text" id="number" class="form-control" placeholder="เลข 13 หลัก" required>
                </div>

                <div class="form-group col-md-3 mb-3">
                    <label for="sel1">คำนำหน้า*</label>
                    <select class="form-control" id="sel1">
                        <option selected>-เลือกข้อมูล-</option>
                        <option>นาย</option>
                        <option>นาง</option>
                        <option>นางสาว</option>
                    </select>
                </div>

                <div class="form-group col-md-2">
                    <label for="text">ชื่อ*</label>
                    <input type="text" id="text" class="form-control" placeholder="ชื่อ" required>
                </div>

                <div class="form-group col-md-3">
                    <label for="text">นามสกุล*</label>
                    <input type="text" id="text" class="form-control" placeholder="นามสกุล" required>
                </div>

                <div class="form-group col-md-3 mb-3">
                    <label for="sel1">เพศ*</label>
                    <select class="form-control" id="sel1">
                        <option selected>-เลือกข้อมูล-</option>
                        <option>ชาย</option>
                        <option>หญิง</option>
                        <option>อื่นๆ</option>
                    </select>
                </div>

                <div class="form-group col-md-3 mb-3">
                    <label for="sel1">ศาสนา*</label>
                    <select class="form-control" id="sel1">
                        <option selected>-เลือกข้อมูล-</option>
                        <option>อิสลาม</option>
                        <option>พุทธ</option>
                        <option>คริสต์</option>
                        <option>พราหมณ์/ฮินดู</option>
                        <option>อื่นๆ</option>
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <label for="text">บ้านเลขที่*</label>
                    <input type="text" id="number" class="form-control" placeholder="เช่น 123/4" required /><br>
                </div>

                <div class="form-group col-md-3">
                    <label for="text">หมู่ที่*</label>
                    <input type="text" id="number" class="form-control" placeholder="เช่น หมู่ 6" required /><br>
                </div>

                <div class="form-group col-md-3">
                    <label for="text">ถนน*</label>
                    <input type="text" id="text" class="form-control" placeholder="เช่น ถนนราชดำเนิน" required /><br>
                </div>

                <div class="form-group col-md-3">
                    <label for="text">ตำบล/แขวง*</label>
                    <input type="text" id="text" class="form-control" placeholder="เช่น ตำบลเมือง" required><br>
                </div>

                <div class="form-group col-md-3">
                    <label for="text">อำเภอ/เขต*</label>
                    <input type="text" id="text" class="form-control" placeholder="เช่น อำเภอเมือง" required>
                </div>

                <div class="form-group col-md-3 mb-3">
                    <label for="sel1">จังหวัด*</label>
                    <select class="form-control" id="sel1">
                        <option selected>-เลือกข้อมูล-</option>
                        <option>กรุงเทพมหานคร</option>
                        <option>นครศรีธรรมราช</option>
                        <option>พัทลุง</option>
                        <option>พังงา</option>
                        <option>สงขลา</option>
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <label for="text">รหัสไปรษณีย์*</label>
                    <input type="text" id="number" class="form-control" placeholder="เช่น 12345" required>
                </div>

                <div class="form-group col-md-3">
                    <label for="text">โทรศัพท์บ้าน*</label>
                    <input type="tel" id="number" class="form-control" placeholder="เช่น 099 9999999" required>
                </div>

                <div class="form-group col-md-3">
                    <label for="text">โทรศัพท์มือถือ*</label>
                    <input type="tel" id="number" class="form-control" placeholder="เช่น 099 9999999" required>
                </div>

                <div class="form-group ">
                    <div class="col-sm-6 control-label" required>
                        สาขาที่สนใจ :
                    </div>
                    <div class="col-sm-12 control-label" required>
                        <label class="checkbox  ">
                            <input type="checkbox" value=""> ITD (เทคโนโลยีสารสนเทศและนวัตกรรมดิจิทัล)
                        </label><br />
                        <label class="checkbox">
                            <input type="checkbox" value=""> IMI (นวัตกรรมสารสนเทศทางการแพทย์) </label><br />
                        <label class="checkbox">
                            <input type="checkbox" value=""> MTA (เทคโนโลยีมัลติมีเดีย แอนิเมชัน และเกม)
                        </label><br />
                        <label class="checkbox">
                            <input type="checkbox" value=""> DCM (ดิจิทัลคอนเทนต์และสื่อ) </label><br />
                        <label class="checkbox">
                            <input type="checkbox" value=""> COMM (นิเทศศาสตร์) </label><br />
                    </div>
                </div>
            </div>

            <input type="submit" id="btnSend" value="ตกลง" class="btn btn-success" />
        </form>
    </div>
    <script>
        function autoTab(obj) {
            var pattern = new String("-____-_____-_-_");
            var pattern_ex = new String("-");
            var returnText = new String("");
            var obj_l = obj.value.length;
            var obj_l2 = obj_l - 1;
            for (i = 0; i < pattern.length; i++) {
                if (obj_l2 == i && pattern.charAt(i + 1) == pattern_ex) {
                    returnText += obj.value + pattern_ex;
                    obj.value = returnText;
                }
            }
            if (obj_l >= pattern.length) {
                obj.value = obj.value.substr(0, pattern.length);
            }
        }

        function btnSubmit_Click() {
            var id = $("#frmID").val();
            var data = "{";
            data += '"id":"' + $("#frmID").val() + '"';
            data += "}";
            console.log(JSON.parse(data));
        }
        $(() => {
            $("#btnSend").click(btnSubmit_Click);
        });
    </script>
</body>

</html>
