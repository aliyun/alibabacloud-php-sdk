<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\UpdateApprovalStatusResponseBody\approval;

use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateApprovalStatusResponseBody\approval\approvalProgresses\operators;
use AlibabaCloud\Tea\Model;

class approvalProgresses extends Model
{
    /**
     * @example Approve
     *
     * @var string
     */
    public $action;

    /**
     * @var string
     */
    public $comment;

    /**
     * @example su_e8f218fb171edd167c2ad917d21f53148bdefc510ca1f3c3cc0249d3643d****
     *
     * @var string
     */
    public $executor;

    /**
     * @var operators[]
     */
    public $operators;

    /**
     * @example Approved
     *
     * @var string
     */
    public $status;

    /**
     * @example 1736752000
     *
     * @var int
     */
    public $timestamp;
    protected $_name = [
        'action' => 'Action',
        'comment' => 'Comment',
        'executor' => 'Executor',
        'operators' => 'Operators',
        'status' => 'Status',
        'timestamp' => 'Timestamp',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->executor) {
            $res['Executor'] = $this->executor;
        }
        if (null !== $this->operators) {
            $res['Operators'] = [];
            if (null !== $this->operators && \is_array($this->operators)) {
                $n = 0;
                foreach ($this->operators as $item) {
                    $res['Operators'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return approvalProgresses
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['Executor'])) {
            $model->executor = $map['Executor'];
        }
        if (isset($map['Operators'])) {
            if (!empty($map['Operators'])) {
                $model->operators = [];
                $n = 0;
                foreach ($map['Operators'] as $item) {
                    $model->operators[$n++] = null !== $item ? operators::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        return $model;
    }
}
