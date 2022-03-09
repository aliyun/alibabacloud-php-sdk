<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetBimTransModelListResponseBody;

use AlibabaCloud\Tea\Model;

class datas extends Model
{
    /**
     * @description 单位（B,MB）
     *
     * @var string
     */
    public $commpany;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $fileId;

    /**
     * @description 转换模型id
     *
     * @var int
     */
    public $id;

    /**
     * @description 模型名称
     *
     * @var string
     */
    public $modelName;

    /**
     * @var string
     */
    public $path;

    /**
     * @description 大小
     *
     * @var int
     */
    public $size;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $taskId;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'commpany'  => 'Commpany',
        'endTime'   => 'EndTime',
        'fileId'    => 'FileId',
        'id'        => 'Id',
        'modelName' => 'ModelName',
        'path'      => 'Path',
        'size'      => 'Size',
        'status'    => 'Status',
        'taskId'    => 'TaskId',
        'type'      => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commpany) {
            $res['Commpany'] = $this->commpany;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->modelName) {
            $res['ModelName'] = $this->modelName;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return datas
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Commpany'])) {
            $model->commpany = $map['Commpany'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ModelName'])) {
            $model->modelName = $map['ModelName'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
