<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRetailVision\V20260506\Models;

use AlibabaCloud\Dara\Model;

class QueryRecognitionResultRequest extends Model
{
    /**
     * @var string
     */
    public $orderUniqueId;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'orderUniqueId' => 'OrderUniqueId',
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->orderUniqueId) {
            $res['OrderUniqueId'] = $this->orderUniqueId;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['OrderUniqueId'])) {
            $model->orderUniqueId = $map['OrderUniqueId'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
