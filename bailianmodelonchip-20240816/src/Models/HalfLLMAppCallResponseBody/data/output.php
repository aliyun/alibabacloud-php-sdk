<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BailianModelOnChip\V20240816\Models\HalfLLMAppCallResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BailianModelOnChip\V20240816\Models\HalfLLMAppCallResponseBody\data\output\choices;

class output extends Model
{
    /**
     * @var choices[]
     */
    public $choices;
    protected $_name = [
        'choices' => 'choices',
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

        return $model;
    }
}
