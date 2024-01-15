<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetPrecisionTaskResponseBody\data\precisions;

use AlibabaCloud\Tea\Model;

class precision extends Model
{
    /**
     * @example 2311
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
     * @example 593A04C0-E6E9-4CDC-8C99-B120C******
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'modelId'   => 'ModelId',
        'modelName' => 'ModelName',
        'precision' => 'Precision',
        'status'    => 'Status',
        'taskId'    => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
