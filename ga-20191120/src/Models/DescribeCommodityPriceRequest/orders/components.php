<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\DescribeCommodityPriceRequest\orders;

use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeCommodityPriceRequest\orders\components\properties;
use AlibabaCloud\Tea\Model;

class components extends Model
{
    /**
     * @description The code of the commodity module.
     *
     * The information varies based on the commodity module. Examples: **instance** (GA instance) and **ord_time** (subscription duration).
     * @example instance
     *
     * @var string
     */
    public $componentCode;

    /**
     * @description The attributes of commodity modules.
     *
     * The information varies based on the commodity module.
     * @var properties[]
     */
    public $properties;
    protected $_name = [
        'componentCode' => 'ComponentCode',
        'properties'    => 'Properties',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->componentCode) {
            $res['ComponentCode'] = $this->componentCode;
        }
        if (null !== $this->properties) {
            $res['Properties'] = [];
            if (null !== $this->properties && \is_array($this->properties)) {
                $n = 0;
                foreach ($this->properties as $item) {
                    $res['Properties'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return components
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ComponentCode'])) {
            $model->componentCode = $map['ComponentCode'];
        }
        if (isset($map['Properties'])) {
            if (!empty($map['Properties'])) {
                $model->properties = [];
                $n                 = 0;
                foreach ($map['Properties'] as $item) {
                    $model->properties[$n++] = null !== $item ? properties::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
