<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DianJin\V20240628\Models\RunChatResultGenerationResponseBody\choices;
use AlibabaCloud\SDK\DianJin\V20240628\Models\RunChatResultGenerationResponseBody\usage;

class RunChatResultGenerationResponseBody extends Model
{
    /**
     * @var choices[]
     */
    public $choices;

    /**
     * @var int
     */
    public $created;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $modelId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $time;

    /**
     * @var int
     */
    public $totalTokens;

    /**
     * @var usage
     */
    public $usage;
    protected $_name = [
        'choices' => 'choices',
        'created' => 'created',
        'id' => 'id',
        'modelId' => 'modelId',
        'requestId' => 'requestId',
        'time' => 'time',
        'totalTokens' => 'totalTokens',
        'usage' => 'usage',
    ];

    public function validate()
    {
        if (\is_array($this->choices)) {
            Model::validateArray($this->choices);
        }
        if (null !== $this->usage) {
            $this->usage->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->choices) {
            if (\is_array($this->choices)) {
                $res['choices'] = [];
                $n1 = 0;
                foreach ($this->choices as $item1) {
                    $res['choices'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->created) {
            $res['created'] = $this->created;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->modelId) {
            $res['modelId'] = $this->modelId;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->time) {
            $res['time'] = $this->time;
        }

        if (null !== $this->totalTokens) {
            $res['totalTokens'] = $this->totalTokens;
        }

        if (null !== $this->usage) {
            $res['usage'] = null !== $this->usage ? $this->usage->toArray($noStream) : $this->usage;
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
        if (isset($map['choices'])) {
            if (!empty($map['choices'])) {
                $model->choices = [];
                $n1 = 0;
                foreach ($map['choices'] as $item1) {
                    $model->choices[$n1++] = choices::fromMap($item1);
                }
            }
        }

        if (isset($map['created'])) {
            $model->created = $map['created'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['modelId'])) {
            $model->modelId = $map['modelId'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['time'])) {
            $model->time = $map['time'];
        }

        if (isset($map['totalTokens'])) {
            $model->totalTokens = $map['totalTokens'];
        }

        if (isset($map['usage'])) {
            $model->usage = usage::fromMap($map['usage']);
        }

        return $model;
    }
}
