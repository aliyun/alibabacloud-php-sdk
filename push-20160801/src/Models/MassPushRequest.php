<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Push\V20160801\Models\MassPushRequest\pushTask;

class MassPushRequest extends Model
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
     * @var pushTask[]
     */
    public $pushTask;
    protected $_name = [
        'appKey' => 'AppKey',
        'idempotentToken' => 'IdempotentToken',
        'pushTask' => 'PushTask',
    ];

    public function validate()
    {
        if (\is_array($this->pushTask)) {
            Model::validateArray($this->pushTask);
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
            if (\is_array($this->pushTask)) {
                $res['PushTask'] = [];
                $n1 = 0;
                foreach ($this->pushTask as $item1) {
                    $res['PushTask'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['PushTask'])) {
                $model->pushTask = [];
                $n1 = 0;
                foreach ($map['PushTask'] as $item1) {
                    $model->pushTask[$n1] = pushTask::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
