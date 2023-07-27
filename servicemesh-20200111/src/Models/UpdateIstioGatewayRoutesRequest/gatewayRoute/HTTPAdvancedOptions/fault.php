<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpdateIstioGatewayRoutesRequest\gatewayRoute\HTTPAdvancedOptions;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpdateIstioGatewayRoutesRequest\gatewayRoute\HTTPAdvancedOptions\fault\abort;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpdateIstioGatewayRoutesRequest\gatewayRoute\HTTPAdvancedOptions\fault\delay;
use AlibabaCloud\Tea\Model;

class fault extends Model
{
    /**
     * @description The configurations for aborting requests with specified error codes.
     *
     * @var abort
     */
    public $abort;

    /**
     * @description The duration to delay a request.
     *
     * @var delay
     */
    public $delay;
    protected $_name = [
        'abort' => 'Abort',
        'delay' => 'Delay',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->abort) {
            $res['Abort'] = null !== $this->abort ? $this->abort->toMap() : null;
        }
        if (null !== $this->delay) {
            $res['Delay'] = null !== $this->delay ? $this->delay->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fault
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Abort'])) {
            $model->abort = abort::fromMap($map['Abort']);
        }
        if (isset($map['Delay'])) {
            $model->delay = delay::fromMap($map['Delay']);
        }

        return $model;
    }
}
