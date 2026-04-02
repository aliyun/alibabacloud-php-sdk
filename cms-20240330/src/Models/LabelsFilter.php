<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class LabelsFilter extends Model
{
    /**
     * @var LabelMatcher[]
     */
    public $allOf;

    /**
     * @var LabelMatcher[]
     */
    public $anyOf;
    protected $_name = [
        'allOf' => 'allOf',
        'anyOf' => 'anyOf',
    ];

    public function validate()
    {
        if (\is_array($this->allOf)) {
            Model::validateArray($this->allOf);
        }
        if (\is_array($this->anyOf)) {
            Model::validateArray($this->anyOf);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allOf) {
            if (\is_array($this->allOf)) {
                $res['allOf'] = [];
                $n1 = 0;
                foreach ($this->allOf as $item1) {
                    $res['allOf'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->anyOf) {
            if (\is_array($this->anyOf)) {
                $res['anyOf'] = [];
                $n1 = 0;
                foreach ($this->anyOf as $item1) {
                    $res['anyOf'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['allOf'])) {
            if (!empty($map['allOf'])) {
                $model->allOf = [];
                $n1 = 0;
                foreach ($map['allOf'] as $item1) {
                    $model->allOf[$n1] = LabelMatcher::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['anyOf'])) {
            if (!empty($map['anyOf'])) {
                $model->anyOf = [];
                $n1 = 0;
                foreach ($map['anyOf'] as $item1) {
                    $model->anyOf[$n1] = LabelMatcher::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
