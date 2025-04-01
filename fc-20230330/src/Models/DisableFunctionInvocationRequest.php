<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class DisableFunctionInvocationRequest extends Model
{
    /**
     * @var bool
     */
    public $abortOngoingRequest;

    /**
     * @var string
     */
    public $reason;
    protected $_name = [
        'abortOngoingRequest' => 'abortOngoingRequest',
        'reason' => 'reason',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->abortOngoingRequest) {
            $res['abortOngoingRequest'] = $this->abortOngoingRequest;
        }

        if (null !== $this->reason) {
            $res['reason'] = $this->reason;
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
        if (isset($map['abortOngoingRequest'])) {
            $model->abortOngoingRequest = $map['abortOngoingRequest'];
        }

        if (isset($map['reason'])) {
            $model->reason = $map['reason'];
        }

        return $model;
    }
}
