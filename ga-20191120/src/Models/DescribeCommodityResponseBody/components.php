<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\DescribeCommodityResponseBody;

use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeCommodityResponseBody\components\properties;
use AlibabaCloud\Tea\Model;

class components extends Model
{
    /**
     * @description The code of the commodity module.
     *
     * The returned information varies based on the commodity module.
     * @example Duration
     *
     * @var string
     */
    public $componentCode;

    /**
     * @description The name of the commodity module.
     *
     * The returned information varies based on the commodity module.
     * @example Duration
     *
     * @var string
     */
    public $componentName;

    /**
     * @description The attributes of the commodity module.
     *
     * The returned information varies based on the commodity module.
     * @var properties[]
     */
    public $properties;
    protected $_name = [
        'componentCode' => 'ComponentCode',
        'componentName' => 'ComponentName',
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
        if (null !== $this->componentName) {
            $res['ComponentName'] = $this->componentName;
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
        if (isset($map['ComponentName'])) {
            $model->componentName = $map['ComponentName'];
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
