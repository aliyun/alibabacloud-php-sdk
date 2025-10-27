<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models;

use AlibabaCloud\Dara\Model;

class MassPushV2Request extends Model
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
     * @var PushTask[]
     */
    public $pushTasks;
    protected $_name = [
        'appKey' => 'AppKey',
        'idempotentToken' => 'IdempotentToken',
        'pushTasks' => 'PushTasks',
    ];

    public function validate()
    {
        if (\is_array($this->pushTasks)) {
            Model::validateArray($this->pushTasks);
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

        if (null !== $this->pushTasks) {
            if (\is_array($this->pushTasks)) {
                $res['PushTasks'] = [];
                $n1 = 0;
                foreach ($this->pushTasks as $item1) {
                    $res['PushTasks'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['PushTasks'])) {
            if (!empty($map['PushTasks'])) {
                $model->pushTasks = [];
                $n1 = 0;
                foreach ($map['PushTasks'] as $item1) {
                    $model->pushTasks[$n1] = PushTask::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
