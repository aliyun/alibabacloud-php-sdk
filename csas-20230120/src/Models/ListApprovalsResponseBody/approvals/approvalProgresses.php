<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\ListApprovalsResponseBody\approvals;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListApprovalsResponseBody\approvals\approvalProgresses\operators;

class approvalProgresses extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $executor;

    /**
     * @var operators[]
     */
    public $operators;

    /**
     * @var string
     */
    public $status;

    /**
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

    public function validate()
    {
        if (\is_array($this->operators)) {
            Model::validateArray($this->operators);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->operators)) {
                $res['Operators'] = [];
                $n1 = 0;
                foreach ($this->operators as $item1) {
                    $res['Operators'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['Operators'] as $item1) {
                    $model->operators[$n1++] = operators::fromMap($item1);
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
