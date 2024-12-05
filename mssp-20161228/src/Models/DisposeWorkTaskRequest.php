<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mssp\V20161228\Models;

use AlibabaCloud\Tea\Model;

class DisposeWorkTaskRequest extends Model
{
    /**
     * @description Operator.
     *
     * This parameter is required.
     * @example WB01089929
     *
     * @var string
     */
    public $operator;

    /**
     * @description Operation remarks.
     *
     * This parameter is required.
     * @example 处理完成
     *
     * @var string
     */
    public $optRemark;

    /**
     * @description Work order status.
     *
     * This parameter is required.
     * @example 8
     *
     * @var int
     */
    public $status;

    /**
     * @description Work order ID, multiple IDs separated by commas.
     *
     * This parameter is required.
     * @example 10310
     *
     * @var string
     */
    public $taskIds;
    protected $_name = [
        'operator'  => 'Operator',
        'optRemark' => 'OptRemark',
        'status'    => 'Status',
        'taskIds'   => 'TaskIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }
        if (null !== $this->optRemark) {
            $res['OptRemark'] = $this->optRemark;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskIds) {
            $res['TaskIds'] = $this->taskIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DisposeWorkTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }
        if (isset($map['OptRemark'])) {
            $model->optRemark = $map['OptRemark'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskIds'])) {
            $model->taskIds = $map['TaskIds'];
        }

        return $model;
    }
}
