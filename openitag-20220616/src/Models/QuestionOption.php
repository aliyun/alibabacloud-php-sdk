<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenITag\V20220616\Models;

use AlibabaCloud\Tea\Model;

class QuestionOption extends Model
{
    /**
     * @var \AlibabaCloud\SDK\OpenITag\V20220616\Models\QuestionOption[]
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
        'color'    => 'Color',
        'key'      => 'Key',
        'label'    => 'Label',
        'remark'   => 'Remark',
        'shortcut' => 'Shortcut',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->children) {
            $res['Children'] = [];
            if (null !== $this->children && \is_array($this->children)) {
                $n = 0;
                foreach ($this->children as $item) {
                    $res['Children'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return QuestionOption
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Children'])) {
            if (!empty($map['Children'])) {
                $model->children = [];
                $n               = 0;
                foreach ($map['Children'] as $item) {
                    $model->children[$n++] = null !== $item ? self::fromMap($item) : $item;
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
