<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetPrecisionTaskResponseBody\data\precisions;

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
    public $modelName;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var float
     */
    public $precision;

    /**
     * @var int
     */
    public $modelId;
    protected $_name = [
        'status'    => 'Status',
        'modelName' => 'ModelName',
        'taskId'    => 'TaskId',
        'precision' => 'Precision',
        'modelId'   => 'ModelId',
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
        if (null !== $this->modelName) {
            $res['ModelName'] = $this->modelName;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->precision) {
            $res['Precision'] = $this->precision;
        }
        if (null !== $this->modelId) {
            $res['ModelId'] = $this->modelId;
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
        if (isset($map['ModelName'])) {
            $model->modelName = $map['ModelName'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['Precision'])) {
            $model->precision = $map['Precision'];
        }
        if (isset($map['ModelId'])) {
            $model->modelId = $map['ModelId'];
        }

        return $model;
    }
}
