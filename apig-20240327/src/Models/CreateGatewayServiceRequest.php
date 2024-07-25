<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\SDK\APIG\V20240327\Models\CreateGatewayServiceRequest\gatewayServiceConfigs;
use AlibabaCloud\Tea\Model;

class CreateGatewayServiceRequest extends Model
{
    /**
     * @var gatewayServiceConfigs[]
     */
    public $gatewayServiceConfigs;

    /**
     * @example MSE_NACOS
     *
     * @var string
     */
    public $sourceType;
    protected $_name = [
        'gatewayServiceConfigs' => 'gatewayServiceConfigs',
        'sourceType'            => 'sourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gatewayServiceConfigs) {
            $res['gatewayServiceConfigs'] = [];
            if (null !== $this->gatewayServiceConfigs && \is_array($this->gatewayServiceConfigs)) {
                $n = 0;
                foreach ($this->gatewayServiceConfigs as $item) {
                    $res['gatewayServiceConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->sourceType) {
            $res['sourceType'] = $this->sourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateGatewayServiceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['gatewayServiceConfigs'])) {
            if (!empty($map['gatewayServiceConfigs'])) {
                $model->gatewayServiceConfigs = [];
                $n                            = 0;
                foreach ($map['gatewayServiceConfigs'] as $item) {
                    $model->gatewayServiceConfigs[$n++] = null !== $item ? gatewayServiceConfigs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['sourceType'])) {
            $model->sourceType = $map['sourceType'];
        }

        return $model;
    }
}
