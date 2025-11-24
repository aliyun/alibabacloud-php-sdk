<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpdateIstioGatewayRoutesRequest\gatewayRoute\HTTPAdvancedOptions;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpdateIstioGatewayRoutesRequest\gatewayRoute\HTTPAdvancedOptions\fault\abort;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpdateIstioGatewayRoutesRequest\gatewayRoute\HTTPAdvancedOptions\fault\delay;

class fault extends Model
{
    /**
     * @var abort
     */
    public $abort;

    /**
     * @var delay
     */
    public $delay;
    protected $_name = [
        'abort' => 'Abort',
        'delay' => 'Delay',
    ];

    public function validate()
    {
        if (null !== $this->abort) {
            $this->abort->validate();
        }
        if (null !== $this->delay) {
            $this->delay->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->abort) {
            $res['Abort'] = null !== $this->abort ? $this->abort->toArray($noStream) : $this->abort;
        }

        if (null !== $this->delay) {
            $res['Delay'] = null !== $this->delay ? $this->delay->toArray($noStream) : $this->delay;
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
        if (isset($map['Abort'])) {
            $model->abort = abort::fromMap($map['Abort']);
        }

        if (isset($map['Delay'])) {
            $model->delay = delay::fromMap($map['Delay']);
        }

        return $model;
    }
}
