<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models;

use AlibabaCloud\Dara\Model;

class MassPushV2ShrinkRequest extends Model
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
    public $pushTasksShrink;
    protected $_name = [
        'appKey' => 'AppKey',
        'idempotentToken' => 'IdempotentToken',
        'pushTasksShrink' => 'PushTasks',
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

        if (null !== $this->pushTasksShrink) {
            $res['PushTasks'] = $this->pushTasksShrink;
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

        if (isset($map['PushTasks'])) {
            $model->pushTasksShrink = $map['PushTasks'];
        }

        return $model;
    }
}
