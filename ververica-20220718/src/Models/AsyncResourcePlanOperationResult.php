<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

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
        'message'      => 'message',
        'plan'         => 'plan',
        'ticketStatus' => 'ticketStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return AsyncResourcePlanOperationResult
     */
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
