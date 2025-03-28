<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\RunAgentResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DianJin\V20240628\Models\RunAgentResponseBody\data\response\choices;

class response extends Model
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
    public $time;
    protected $_name = [
        'choices' => 'choices',
        'created' => 'created',
        'id' => 'id',
        'modelId' => 'modelId',
        'time' => 'time',
    ];

    public function validate()
    {
        if (\is_array($this->choices)) {
            Model::validateArray($this->choices);
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

        if (null !== $this->time) {
            $res['time'] = $this->time;
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

        if (isset($map['time'])) {
            $model->time = $map['time'];
        }

        return $model;
    }
}
