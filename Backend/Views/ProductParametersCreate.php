

<form method="post" action="<?php echo $action ?>">
    <h1>Thêm thuôc tính</h1>
    <!-- rows -->
    <div class="row" style="margin-top:5px;">
        <div class="col-md-2">Tên thuộc tính</div>
        <div class="col-md-10">
            <select name="para_id"" class="form-control" style="width: 200px;">
                <?php
                //lay danh muc cap cha
                $parameter = $this->modelListParameter();
                ?>
                <?php foreach($parameter as $rows): ?>
                    <option value="<?php echo $rows->id; ?>"><?php echo $rows->name; ?></option>
                    <?php
                    //lay danh muc cap con
                    $parameterSub = $this->modelListParameterSub($rows->id);
                    ?>
                    <?php foreach($parameterSub as $rowsSub): ?>
                        <option  value="<?php echo $rowsSub->id; ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rowsSub->name; ?></option>
                    <?php endforeach; ?>
                <?php endforeach; ?>
            </select>
        </div>
    </div>
    <!-- end rows -->
    <div class="form-group">
        <label for="exampleFormControlSelect1">Status</label>
        <select class="form-control" name="status" id="exampleFormControlSelect1">
            <option value="1">1</option>
            <option value="2">2</option>

        </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>