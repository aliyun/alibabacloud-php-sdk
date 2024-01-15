<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListPrecisionTaskResponseBody\data\precisionTask\precisions;

use AlibabaCloud\Tea\Model;

class precision extends Model
{
    /**
     * @example 2020-03-10 20:26:29
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 2321
     *
     * @var int
     */
    public $modelId;

    /**
     * @var string
     */
    public $modelName;

    /**
     * @example 0.98
     *
     * @var float
     */
    public $precision;

    /**
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @example 7C1DEF5F-2C18-4D36-99C6-8C276F781796
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'createTime' => 'CreateTime',
        'modelId'    => 'ModelId',
        'modelName'  => 'ModelName',
        'precision'  => 'Precision',
        'status'     => 'Status',
        'taskId'     => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->modelId) {
            $res['ModelId'] = $this->modelId;
        }
        if (null !== $this->modelName) {
            $res['ModelName'] = $this->modelName;
        }
        if (null !== $this->precision) {
            $res['Precision'] = $this->precision;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ModelId'])) {
            $model->modelId = $map['ModelId'];
        }
        if (isset($map['ModelName'])) {
            $model->modelName = $map['ModelName'];
        }
        if (isset($map['Precision'])) {
            $model->precision = $map['Precision'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
