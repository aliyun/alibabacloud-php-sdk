<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetDocumentAnalyzeResultResponseBody\data\kvListInfo;

use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\ContentItem;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetDocumentAnalyzeResultResponseBody\data\kvListInfo\context\confidence;
use AlibabaCloud\Tea\Model;

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
        'key'        => 'key',
        'value'      => 'value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->confidence) {
            $res['confidence'] = null !== $this->confidence ? $this->confidence->toMap() : null;
        }
        if (null !== $this->key) {
            $res['key'] = [];
            if (null !== $this->key && \is_array($this->key)) {
                $n = 0;
                foreach ($this->key as $item) {
                    $res['key'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->value) {
            $res['value'] = [];
            if (null !== $this->value && \is_array($this->value)) {
                $n = 0;
                foreach ($this->value as $item) {
                    $res['value'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return context
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['confidence'])) {
            $model->confidence = confidence::fromMap($map['confidence']);
        }
        if (isset($map['key'])) {
            if (!empty($map['key'])) {
                $model->key = [];
                $n          = 0;
                foreach ($map['key'] as $item) {
                    $model->key[$n++] = null !== $item ? ContentItem::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['value'])) {
            if (!empty($map['value'])) {
                $model->value = [];
                $n            = 0;
                foreach ($map['value'] as $item) {
                    $model->value[$n++] = null !== $item ? ContentItem::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
