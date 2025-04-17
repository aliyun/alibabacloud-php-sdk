<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceInstanceResponseBody\networkConfig;

use AlibabaCloud\Dara\Model;

class reversePrivateVpcConnections extends Model
{
    /**
     * @var string
     */
    public $endpointId;

    /**
     * @var string
     */
    public $endpointServiceId;
    protected $_name = [
        'endpointId' => 'EndpointId',
        'endpointServiceId' => 'EndpointServiceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endpointId) {
            $res['EndpointId'] = $this->endpointId;
        }

        if (null !== $this->endpointServiceId) {
            $res['EndpointServiceId'] = $this->endpointServiceId;
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
        if (isset($map['EndpointId'])) {
            $model->endpointId = $map['EndpointId'];
        }

        if (isset($map['EndpointServiceId'])) {
            $model->endpointServiceId = $map['EndpointServiceId'];
        }

        return $model;
    }
}
