<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\GetHealthStatusResponseBody\endpointGroups;

use AlibabaCloud\Tea\Model;

class endpoints extends Model
{
    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $endpointId;

    /**
     * @var string
     */
    public $healthDetail;

    /**
     * @var string
     */
    public $healthStatus;

    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'address'      => 'Address',
        'endpointId'   => 'EndpointId',
        'healthDetail' => 'HealthDetail',
        'healthStatus' => 'HealthStatus',
        'port'         => 'Port',
        'type'         => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->endpointId) {
            $res['EndpointId'] = $this->endpointId;
        }
        if (null !== $this->healthDetail) {
            $res['HealthDetail'] = $this->healthDetail;
        }
        if (null !== $this->healthStatus) {
            $res['HealthStatus'] = $this->healthStatus;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return endpoints
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['EndpointId'])) {
            $model->endpointId = $map['EndpointId'];
        }
        if (isset($map['HealthDetail'])) {
            $model->healthDetail = $map['HealthDetail'];
        }
        if (isset($map['HealthStatus'])) {
            $model->healthStatus = $map['HealthStatus'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
