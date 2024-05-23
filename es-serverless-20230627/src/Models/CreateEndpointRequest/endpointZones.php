<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Esserverless\V20230627\Models\CreateEndpointRequest;

use AlibabaCloud\Tea\Model;

class endpointZones extends Model
{
    /**
     * @example vsw-uf6qmfkqdcw*****
     *
     * @var string
     */
    public $vswitchId;

    /**
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'vswitchId' => 'vswitchId',
        'zoneId'    => 'zoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vswitchId) {
            $res['vswitchId'] = $this->vswitchId;
        }
        if (null !== $this->zoneId) {
            $res['zoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return endpointZones
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['vswitchId'])) {
            $model->vswitchId = $map['vswitchId'];
        }
        if (isset($map['zoneId'])) {
            $model->zoneId = $map['zoneId'];
        }

        return $model;
    }
}
