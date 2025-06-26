<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetDocExtractionResultResponseBody\data\kvListInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\ContentItem;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetDocExtractionResultResponseBody\data\kvListInfo\context\confidence;

class context extends Model
{
    /**
     * @var confidence
     */
    public $confidence;

    /**
     * @var ContentItem[]
     */
    public $key;

    /**
     * @var ContentItem[]
     */
    public $value;
    protected $_name = [
        'confidence' => 'confidence',
        'key' => 'key',
        'value' => 'value',
    ];

    public function validate()
    {
        if (null !== $this->confidence) {
            $this->confidence->validate();
        }
        if (\is_array($this->key)) {
            Model::validateArray($this->key);
        }
        if (\is_array($this->value)) {
            Model::validateArray($this->value);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->confidence) {
            $res['confidence'] = null !== $this->confidence ? $this->confidence->toArray($noStream) : $this->confidence;
        }

        if (null !== $this->key) {
            if (\is_array($this->key)) {
                $res['key'] = [];
                $n1 = 0;
                foreach ($this->key as $item1) {
                    $res['key'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->value) {
            if (\is_array($this->value)) {
                $res['value'] = [];
                $n1 = 0;
                foreach ($this->value as $item1) {
                    $res['value'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['confidence'])) {
            $model->confidence = confidence::fromMap($map['confidence']);
        }

        if (isset($map['key'])) {
            if (!empty($map['key'])) {
                $model->key = [];
                $n1 = 0;
                foreach ($map['key'] as $item1) {
                    $model->key[$n1] = ContentItem::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['value'])) {
            if (!empty($map['value'])) {
                $model->value = [];
                $n1 = 0;
                foreach ($map['value'] as $item1) {
                    $model->value[$n1] = ContentItem::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
