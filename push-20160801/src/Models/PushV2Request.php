<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models;

use AlibabaCloud\Dara\Model;

class PushV2Request extends Model
{
    /**
     * @var int
     */
    public $appKey;

    /**
     * @var string
     */
    public $idempotentToken;

    /**
     * @var PushTask
     */
    public $pushTask;
    protected $_name = [
        'appKey' => 'AppKey',
        'idempotentToken' => 'IdempotentToken',
        'pushTask' => 'PushTask',
    ];

    public function validate()
    {
        if (null !== $this->pushTask) {
            $this->pushTask->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }

        if (null !== $this->idempotentToken) {
            $res['IdempotentToken'] = $this->idempotentToken;
        }

        if (null !== $this->pushTask) {
            $res['PushTask'] = null !== $this->pushTask ? $this->pushTask->toArray($noStream) : $this->pushTask;
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
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }

        if (isset($map['IdempotentToken'])) {
            $model->idempotentToken = $map['IdempotentToken'];
        }

        if (isset($map['PushTask'])) {
            $model->pushTask = PushTask::fromMap($map['PushTask']);
        }

        return $model;
    }
}
