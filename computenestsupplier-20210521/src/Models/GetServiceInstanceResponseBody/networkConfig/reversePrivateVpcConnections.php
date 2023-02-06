<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceInstanceResponseBody\networkConfig;

use AlibabaCloud\Tea\Model;

class reversePrivateVpcConnections extends Model
{
    /**
     * @example ep-m5ei42370541816b****
     *
     * @var string
     */
    public $endpointId;

    /**
     * @example epsrv-5ei07324541816bxxxx
     *
     * @var string
     */
    public $endpointServiceId;
    protected $_name = [
        'endpointId'        => 'EndpointId',
        'endpointServiceId' => 'EndpointServiceId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return reversePrivateVpcConnections
     */
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
