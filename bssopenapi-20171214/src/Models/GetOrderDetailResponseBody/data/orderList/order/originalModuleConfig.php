<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetOrderDetailResponseBody\data\orderList\order;

use AlibabaCloud\Tea\Model;

class originalModuleConfig extends Model
{
    /**
     * @var \AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetOrderDetailResponseBody\data\orderList\order\originalModuleConfig\originalModuleConfig[]
     */
    public $originalModuleConfig;
    protected $_name = [
        'originalModuleConfig' => 'originalModuleConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->originalModuleConfig) {
            $res['originalModuleConfig'] = [];
            if (null !== $this->originalModuleConfig && \is_array($this->originalModuleConfig)) {
                $n = 0;
                foreach ($this->originalModuleConfig as $item) {
                    $res['originalModuleConfig'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return originalModuleConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['originalModuleConfig'])) {
            if (!empty($map['originalModuleConfig'])) {
                $model->originalModuleConfig = [];
                $n                           = 0;
                foreach ($map['originalModuleConfig'] as $item) {
                    $model->originalModuleConfig[$n++] = null !== $item ? \AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetOrderDetailResponseBody\data\orderList\order\originalModuleConfig\originalModuleConfig::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
