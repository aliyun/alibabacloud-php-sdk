<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\CreateIstioGatewayRoutesRequest\gatewayRoute\HTTPAdvancedOptions\fault;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\CreateIstioGatewayRoutesRequest\gatewayRoute\HTTPAdvancedOptions\fault\delay\percentage;
use AlibabaCloud\Tea\Model;

class delay extends Model
{
    /**
     * @example 5s
     *
     * @var string
     */
    public $fixedDelay;

    /**
     * @var percentage
     */
    public $percentage;
    protected $_name = [
        'fixedDelay' => 'FixedDelay',
        'percentage' => 'Percentage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fixedDelay) {
            $res['FixedDelay'] = $this->fixedDelay;
        }
        if (null !== $this->percentage) {
            $res['Percentage'] = null !== $this->percentage ? $this->percentage->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return delay
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FixedDelay'])) {
            $model->fixedDelay = $map['FixedDelay'];
        }
        if (isset($map['Percentage'])) {
            $model->percentage = percentage::fromMap($map['Percentage']);
        }

        return $model;
    }
}
