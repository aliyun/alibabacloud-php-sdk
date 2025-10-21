<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

class AsyncResourcePlanOperationResult extends Model
{
    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $plan;

    /**
     * @var string
     */
    public $ticketStatus;
    protected $_name = [
        'message' => 'message',
        'plan' => 'plan',
        'ticketStatus' => 'ticketStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->plan) {
            $res['plan'] = $this->plan;
        }

        if (null !== $this->ticketStatus) {
            $res['ticketStatus'] = $this->ticketStatus;
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
        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['plan'])) {
            $model->plan = $map['plan'];
        }

        if (isset($map['ticketStatus'])) {
            $model->ticketStatus = $map['ticketStatus'];
        }

        return $model;
    }
}
