<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceInstanceResponseBody\networkConfig;

use AlibabaCloud\Tea\Model;

class reversePrivateVpcConnections extends Model
{
    /**
     * @description The endpoint ID of the reverse private connection.
     *
     * @example ep-m5ei42370541816b****
     *
     * @var string
     */
    public $endpointId;
    protected $_name = [
        'endpointId' => 'EndpointId',
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

        return $model;
    }
}
