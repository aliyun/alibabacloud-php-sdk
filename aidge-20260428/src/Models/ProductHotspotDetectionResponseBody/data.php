<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models\ProductHotspotDetectionResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aidge\V20260428\Models\ProductHotspotDetectionResponseBody\data\products;

class data extends Model
{
    /**
     * @var products[]
     */
    public $products;

    /**
     * @var int[]
     */
    public $usageMap;
    protected $_name = [
        'products' => 'Products',
        'usageMap' => 'UsageMap',
    ];

    public function validate()
    {
        if (\is_array($this->products)) {
            Model::validateArray($this->products);
        }
        if (\is_array($this->usageMap)) {
            Model::validateArray($this->usageMap);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->products) {
            if (\is_array($this->products)) {
                $res['Products'] = [];
                $n1 = 0;
                foreach ($this->products as $item1) {
                    $res['Products'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->usageMap) {
            if (\is_array($this->usageMap)) {
                $res['UsageMap'] = [];
                foreach ($this->usageMap as $key1 => $value1) {
                    $res['UsageMap'][$key1] = $value1;
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
        if (isset($map['Products'])) {
            if (!empty($map['Products'])) {
                $model->products = [];
                $n1 = 0;
                foreach ($map['Products'] as $item1) {
                    $model->products[$n1] = products::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['UsageMap'])) {
            if (!empty($map['UsageMap'])) {
                $model->usageMap = [];
                foreach ($map['UsageMap'] as $key1 => $value1) {
                    $model->usageMap[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
