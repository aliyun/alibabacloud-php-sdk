<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Dara\Model;

class CreateCatalogRequest extends Model
{
    /**
     * @var bool
     */
    public $isShared;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $options;

    /**
     * @var string
     */
    public $shareId;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'isShared' => 'isShared',
        'name' => 'name',
        'options' => 'options',
        'shareId' => 'shareId',
        'type' => 'type',
    ];

    public function validate()
    {
        if (\is_array($this->options)) {
            Model::validateArray($this->options);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isShared) {
            $res['isShared'] = $this->isShared;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->options) {
            if (\is_array($this->options)) {
                $res['options'] = [];
                foreach ($this->options as $key1 => $value1) {
                    $res['options'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->shareId) {
            $res['shareId'] = $this->shareId;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['isShared'])) {
            $model->isShared = $map['isShared'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['options'])) {
            if (!empty($map['options'])) {
                $model->options = [];
                foreach ($map['options'] as $key1 => $value1) {
                    $model->options[$key1] = $value1;
                }
            }
        }

        if (isset($map['shareId'])) {
            $model->shareId = $map['shareId'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
