<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models\GetContextStoreResponseBody\config;

use AlibabaCloud\Dara\Model;

class sourceStatus extends Model
{
    /**
     * @var mixed[]
     */
    public $checkpoint;

    /**
     * @var string
     */
    public $lastError;

    /**
     * @var string
     */
    public $lastWindowAt;

    /**
     * @var int
     */
    public $retryCount;

    /**
     * @var string
     */
    public $state;
    protected $_name = [
        'checkpoint' => 'checkpoint',
        'lastError' => 'lastError',
        'lastWindowAt' => 'lastWindowAt',
        'retryCount' => 'retryCount',
        'state' => 'state',
    ];

    public function validate()
    {
        if (\is_array($this->checkpoint)) {
            Model::validateArray($this->checkpoint);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkpoint) {
            if (\is_array($this->checkpoint)) {
                $res['checkpoint'] = [];
                foreach ($this->checkpoint as $key1 => $value1) {
                    $res['checkpoint'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->lastError) {
            $res['lastError'] = $this->lastError;
        }

        if (null !== $this->lastWindowAt) {
            $res['lastWindowAt'] = $this->lastWindowAt;
        }

        if (null !== $this->retryCount) {
            $res['retryCount'] = $this->retryCount;
        }

        if (null !== $this->state) {
            $res['state'] = $this->state;
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
        if (isset($map['checkpoint'])) {
            if (!empty($map['checkpoint'])) {
                $model->checkpoint = [];
                foreach ($map['checkpoint'] as $key1 => $value1) {
                    $model->checkpoint[$key1] = $value1;
                }
            }
        }

        if (isset($map['lastError'])) {
            $model->lastError = $map['lastError'];
        }

        if (isset($map['lastWindowAt'])) {
            $model->lastWindowAt = $map['lastWindowAt'];
        }

        if (isset($map['retryCount'])) {
            $model->retryCount = $map['retryCount'];
        }

        if (isset($map['state'])) {
            $model->state = $map['state'];
        }

        return $model;
    }
}
