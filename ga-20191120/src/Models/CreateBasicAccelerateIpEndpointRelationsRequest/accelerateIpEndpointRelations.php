<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\CreateBasicAccelerateIpEndpointRelationsRequest;

use AlibabaCloud\Tea\Model;

class accelerateIpEndpointRelations extends Model
{
    /**
     * @var string
     */
    public $accelerateIpId;

    /**
     * @var string
     */
    public $endpointId;
    protected $_name = [
        'accelerateIpId' => 'AccelerateIpId',
        'endpointId'     => 'EndpointId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accelerateIpId) {
            $res['AccelerateIpId'] = $this->accelerateIpId;
        }
        if (null !== $this->endpointId) {
            $res['EndpointId'] = $this->endpointId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return accelerateIpEndpointRelations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccelerateIpId'])) {
            $model->accelerateIpId = $map['AccelerateIpId'];
        }
        if (isset($map['EndpointId'])) {
            $model->endpointId = $map['EndpointId'];
        }

        return $model;
    }
}
