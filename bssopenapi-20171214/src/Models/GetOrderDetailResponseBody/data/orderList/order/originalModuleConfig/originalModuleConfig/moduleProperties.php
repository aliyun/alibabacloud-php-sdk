<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetOrderDetailResponseBody\data\orderList\order\originalModuleConfig\originalModuleConfig;

use AlibabaCloud\Tea\Model;

class moduleProperties extends Model
{
    /**
     * @var \AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetOrderDetailResponseBody\data\orderList\order\originalModuleConfig\originalModuleConfig\moduleProperties\moduleProperties[]
     */
    public $moduleProperties;
    protected $_name = [
        'moduleProperties' => 'moduleProperties',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->moduleProperties) {
            $res['moduleProperties'] = [];
            if (null !== $this->moduleProperties && \is_array($this->moduleProperties)) {
                $n = 0;
                foreach ($this->moduleProperties as $item) {
                    $res['moduleProperties'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return moduleProperties
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['moduleProperties'])) {
            if (!empty($map['moduleProperties'])) {
                $model->moduleProperties = [];
                $n                       = 0;
                foreach ($map['moduleProperties'] as $item) {
                    $model->moduleProperties[$n++] = null !== $item ? \AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetOrderDetailResponseBody\data\orderList\order\originalModuleConfig\originalModuleConfig\moduleProperties\moduleProperties::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
