<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiLLMTrace\V20240311\Models\QuestionAnswer;

use AlibabaCloud\Dara\Model;

class groundTruth extends Model
{
    /**
     * @var string[]
     */
    public $contexts;

    /**
     * @var string
     */
    public $text;
    protected $_name = [
        'contexts' => 'Contexts',
        'text' => 'Text',
    ];

    public function validate()
    {
        if (\is_array($this->contexts)) {
            Model::validateArray($this->contexts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contexts) {
            if (\is_array($this->contexts)) {
                $res['Contexts'] = [];
                $n1 = 0;
                foreach ($this->contexts as $item1) {
                    $res['Contexts'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->text) {
            $res['Text'] = $this->text;
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
        if (isset($map['Contexts'])) {
            if (!empty($map['Contexts'])) {
                $model->contexts = [];
                $n1 = 0;
                foreach ($map['Contexts'] as $item1) {
                    $model->contexts[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }

        return $model;
    }
}
