<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetOrderDetailResponseBody\data\orderList\order;

use AlibabaCloud\Tea\Model;

class billModuleConfig extends Model
{
    /**
     * @var \AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetOrderDetailResponseBody\data\orderList\order\billModuleConfig\billModuleConfig[]
     */
    public $billModuleConfig;
    protected $_name = [
        'billModuleConfig' => 'billModuleConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->billModuleConfig) {
            $res['billModuleConfig'] = [];
            if (null !== $this->billModuleConfig && \is_array($this->billModuleConfig)) {
                $n = 0;
                foreach ($this->billModuleConfig as $item) {
                    $res['billModuleConfig'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return billModuleConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['billModuleConfig'])) {
            if (!empty($map['billModuleConfig'])) {
                $model->billModuleConfig = [];
                $n                       = 0;
                foreach ($map['billModuleConfig'] as $item) {
                    $model->billModuleConfig[$n++] = null !== $item ? \AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetOrderDetailResponseBody\data\orderList\order\billModuleConfig\billModuleConfig::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
