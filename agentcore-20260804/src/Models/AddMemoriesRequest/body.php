<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\AddMemoriesRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\AddMemoriesRequest\body\messages;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\AddMemoriesRequest\body\scope;

class body extends Model
{
    /**
     * @var messages[]
     */
    public $messages;

    /**
     * @var string[]
     */
    public $metadata;

    /**
     * @var string
     */
    public $referenceTime;

    /**
     * @var scope
     */
    public $scope;

    /**
     * @var bool
     */
    public $sync;

    /**
     * @var string
     */
    public $text;
    protected $_name = [
        'messages' => 'messages',
        'metadata' => 'metadata',
        'referenceTime' => 'referenceTime',
        'scope' => 'scope',
        'sync' => 'sync',
        'text' => 'text',
    ];

    public function validate()
    {
        if (\is_array($this->messages)) {
            Model::validateArray($this->messages);
        }
        if (\is_array($this->metadata)) {
            Model::validateArray($this->metadata);
        }
        if (null !== $this->scope) {
            $this->scope->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->messages) {
            if (\is_array($this->messages)) {
                $res['messages'] = [];
                $n1 = 0;
                foreach ($this->messages as $item1) {
                    $res['messages'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->metadata) {
            if (\is_array($this->metadata)) {
                $res['metadata'] = [];
                foreach ($this->metadata as $key1 => $value1) {
                    $res['metadata'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->referenceTime) {
            $res['referenceTime'] = $this->referenceTime;
        }

        if (null !== $this->scope) {
            $res['scope'] = null !== $this->scope ? $this->scope->toArray($noStream) : $this->scope;
        }

        if (null !== $this->sync) {
            $res['sync'] = $this->sync;
        }

        if (null !== $this->text) {
            $res['text'] = $this->text;
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
        if (isset($map['messages'])) {
            if (!empty($map['messages'])) {
                $model->messages = [];
                $n1 = 0;
                foreach ($map['messages'] as $item1) {
                    $model->messages[$n1] = messages::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['metadata'])) {
            if (!empty($map['metadata'])) {
                $model->metadata = [];
                foreach ($map['metadata'] as $key1 => $value1) {
                    $model->metadata[$key1] = $value1;
                }
            }
        }

        if (isset($map['referenceTime'])) {
            $model->referenceTime = $map['referenceTime'];
        }

        if (isset($map['scope'])) {
            $model->scope = scope::fromMap($map['scope']);
        }

        if (isset($map['sync'])) {
            $model->sync = $map['sync'];
        }

        if (isset($map['text'])) {
            $model->text = $map['text'];
        }

        return $model;
    }
}
