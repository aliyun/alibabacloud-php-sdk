<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetOrderDetailResponseBody\data\orderList\order\billModuleConfig\billModuleConfig;

use AlibabaCloud\Tea\Model;

class billModuleProperties extends Model
{
    /**
     * @var \AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetOrderDetailResponseBody\data\orderList\order\billModuleConfig\billModuleConfig\billModuleProperties\billModuleProperties[]
     */
    public $billModuleProperties;
    protected $_name = [
        'billModuleProperties' => 'billModuleProperties',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->billModuleProperties) {
            $res['billModuleProperties'] = [];
            if (null !== $this->billModuleProperties && \is_array($this->billModuleProperties)) {
                $n = 0;
                foreach ($this->billModuleProperties as $item) {
                    $res['billModuleProperties'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return billModuleProperties
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['billModuleProperties'])) {
            if (!empty($map['billModuleProperties'])) {
                $model->billModuleProperties = [];
                $n                           = 0;
                foreach ($map['billModuleProperties'] as $item) {
                    $model->billModuleProperties[$n++] = null !== $item ? \AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetOrderDetailResponseBody\data\orderList\order\billModuleConfig\billModuleConfig\billModuleProperties\billModuleProperties::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
