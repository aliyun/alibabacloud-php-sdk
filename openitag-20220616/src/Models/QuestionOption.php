<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenITag\V20220616\Models;

use AlibabaCloud\Dara\Model;

class QuestionOption extends Model
{
    /**
     * @var QuestionOption[]
     */
    public $children;

    /**
     * @var string
     */
    public $color;

    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $label;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $shortcut;
    protected $_name = [
        'children' => 'Children',
        'color' => 'Color',
        'key' => 'Key',
        'label' => 'Label',
        'remark' => 'Remark',
        'shortcut' => 'Shortcut',
    ];

    public function validate()
    {
        if (\is_array($this->children)) {
            Model::validateArray($this->children);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->children) {
            if (\is_array($this->children)) {
                $res['Children'] = [];
                $n1 = 0;
                foreach ($this->children as $item1) {
                    $res['Children'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->color) {
            $res['Color'] = $this->color;
        }

        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }

        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->shortcut) {
            $res['Shortcut'] = $this->shortcut;
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
        if (isset($map['Children'])) {
            if (!empty($map['Children'])) {
                $model->children = [];
                $n1 = 0;
                foreach ($map['Children'] as $item1) {
                    $model->children[$n1] = self::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Color'])) {
            $model->color = $map['Color'];
        }

        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }

        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['Shortcut'])) {
            $model->shortcut = $map['Shortcut'];
        }

        return $model;
    }
}
