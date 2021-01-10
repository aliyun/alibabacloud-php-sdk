<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListPrecisionTaskResponseBody\data\precisionTask\precisions;

use AlibabaCloud\Tea\Model;

class precision extends Model
{
    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $modelName;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var int
     */
    public $modelId;

    /**
     * @var float
     */
    public $precision;
    protected $_name = [
        'status'     => 'Status',
        'createTime' => 'CreateTime',
        'modelName'  => 'ModelName',
        'taskId'     => 'TaskId',
        'modelId'    => 'ModelId',
        'precision'  => 'Precision',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->modelName) {
            $res['ModelName'] = $this->modelName;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->modelId) {
            $res['ModelId'] = $this->modelId;
        }
        if (null !== $this->precision) {
            $res['Precision'] = $this->precision;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return precision
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ModelName'])) {
            $model->modelName = $map['ModelName'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['ModelId'])) {
            $model->modelId = $map['ModelId'];
        }
        if (isset($map['Precision'])) {
            $model->precision = $map['Precision'];
        }

        return $model;
    }
}
