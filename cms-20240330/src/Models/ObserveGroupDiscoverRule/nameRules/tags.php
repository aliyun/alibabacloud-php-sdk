<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\ObserveGroupDiscoverRule\nameRules;

use AlibabaCloud\Dara\Model;

class tags extends Model
{
    /**
     * @var string
     */
    public $op;

    /**
     * @var string[]
     */
    public $tagValues;
    protected $_name = [
        'op' => 'Op',
        'tagValues' => 'TagValues',
    ];

    public function validate()
    {
        if (\is_array($this->tagValues)) {
            Model::validateArray($this->tagValues);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->op) {
            $res['Op'] = $this->op;
        }

        if (null !== $this->tagValues) {
            if (\is_array($this->tagValues)) {
                $res['TagValues'] = [];
                $n1 = 0;
                foreach ($this->tagValues as $item1) {
                    $res['TagValues'][$n1] = $item1;
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
        if (isset($map['Op'])) {
            $model->op = $map['Op'];
        }

        if (isset($map['TagValues'])) {
            if (!empty($map['TagValues'])) {
                $model->tagValues = [];
                $n1 = 0;
                foreach ($map['TagValues'] as $item1) {
                    $model->tagValues[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
