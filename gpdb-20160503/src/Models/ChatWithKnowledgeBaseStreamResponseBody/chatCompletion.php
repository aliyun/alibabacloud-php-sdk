<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\ChatWithKnowledgeBaseStreamResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ChatWithKnowledgeBaseStreamResponseBody\chatCompletion\choices;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ChatWithKnowledgeBaseStreamResponseBody\chatCompletion\usage;

class chatCompletion extends Model
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
    public $model;

    /**
     * @var usage
     */
    public $usage;
    protected $_name = [
        'choices' => 'Choices',
        'created' => 'Created',
        'id' => 'Id',
        'model' => 'Model',
        'usage' => 'Usage',
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
                $res['Choices'] = [];
                $n1 = 0;
                foreach ($this->choices as $item1) {
                    $res['Choices'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->created) {
            $res['Created'] = $this->created;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }

        if (null !== $this->usage) {
            $res['Usage'] = null !== $this->usage ? $this->usage->toArray($noStream) : $this->usage;
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
        if (isset($map['Choices'])) {
            if (!empty($map['Choices'])) {
                $model->choices = [];
                $n1 = 0;
                foreach ($map['Choices'] as $item1) {
                    $model->choices[$n1] = choices::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Created'])) {
            $model->created = $map['Created'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }

        if (isset($map['Usage'])) {
            $model->usage = usage::fromMap($map['Usage']);
        }

        return $model;
    }
}
