<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\QuerySelectOptionsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\QuerySelectOptionsResponseBody\selectOptions\children;

class selectOptions extends Model
{
    /**
     * @var mixed[]
     */
    public $bizConfig;

    /**
     * @var string
     */
    public $category;

    /**
     * @var children[]
     */
    public $children;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $label;

    /**
     * @var string[]
     */
    public $tags;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'bizConfig' => 'BizConfig',
        'category' => 'Category',
        'children' => 'Children',
        'description' => 'Description',
        'label' => 'Label',
        'tags' => 'Tags',
        'value' => 'Value',
    ];

    public function validate()
    {
        if (\is_array($this->bizConfig)) {
            Model::validateArray($this->bizConfig);
        }
        if (\is_array($this->children)) {
            Model::validateArray($this->children);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizConfig) {
            if (\is_array($this->bizConfig)) {
                $res['BizConfig'] = [];
                foreach ($this->bizConfig as $key1 => $value1) {
                    $res['BizConfig'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

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

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->value) {
            $res['Value'] = $this->value;
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
        if (isset($map['BizConfig'])) {
            if (!empty($map['BizConfig'])) {
                $model->bizConfig = [];
                foreach ($map['BizConfig'] as $key1 => $value1) {
                    $model->bizConfig[$key1] = $value1;
                }
            }
        }

        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        if (isset($map['Children'])) {
            if (!empty($map['Children'])) {
                $model->children = [];
                $n1 = 0;
                foreach ($map['Children'] as $item1) {
                    $model->children[$n1] = children::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
