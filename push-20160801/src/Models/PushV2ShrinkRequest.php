<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models;

use AlibabaCloud\Dara\Model;

class PushV2ShrinkRequest extends Model
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
     * @var string
     */
    public $pushTaskShrink;
    protected $_name = [
        'appKey' => 'AppKey',
        'idempotentToken' => 'IdempotentToken',
        'pushTaskShrink' => 'PushTask',
    ];

    public function validate()
    {
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

        if (null !== $this->pushTaskShrink) {
            $res['PushTask'] = $this->pushTaskShrink;
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
            $model->pushTaskShrink = $map['PushTask'];
        }

        return $model;
    }
}
