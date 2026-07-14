<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class UpdateNotifyPolicyResponseBody extends Model
{
    /**
     * @var NotifyPolicy
     */
    public $notifyPolicy;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'notifyPolicy' => 'notifyPolicy',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (null !== $this->notifyPolicy) {
            $this->notifyPolicy->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->notifyPolicy) {
            $res['notifyPolicy'] = null !== $this->notifyPolicy ? $this->notifyPolicy->toArray($noStream) : $this->notifyPolicy;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['notifyPolicy'])) {
            $model->notifyPolicy = NotifyPolicy::fromMap($map['notifyPolicy']);
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
