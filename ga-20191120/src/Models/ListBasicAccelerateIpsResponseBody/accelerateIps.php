<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\ListBasicAccelerateIpsResponseBody;

use AlibabaCloud\SDK\Ga\V20191120\Models\ListBasicAccelerateIpsResponseBody\accelerateIps\endpoint;
use AlibabaCloud\Tea\Model;

class accelerateIps extends Model
{
    /**
     * @var string
     */
    public $accelerateIpAddress;

    /**
     * @var string
     */
    public $accelerateIpId;

    /**
     * @var string
     */
    public $acceleratorId;

    /**
     * @var endpoint
     */
    public $endpoint;

    /**
     * @var string
     */
    public $ipSetId;

    /**
     * @var string
     */
    public $state;
    protected $_name = [
        'accelerateIpAddress' => 'AccelerateIpAddress',
        'accelerateIpId'      => 'AccelerateIpId',
        'acceleratorId'       => 'AcceleratorId',
        'endpoint'            => 'Endpoint',
        'ipSetId'             => 'IpSetId',
        'state'               => 'State',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accelerateIpAddress) {
            $res['AccelerateIpAddress'] = $this->accelerateIpAddress;
        }
        if (null !== $this->accelerateIpId) {
            $res['AccelerateIpId'] = $this->accelerateIpId;
        }
        if (null !== $this->acceleratorId) {
            $res['AcceleratorId'] = $this->acceleratorId;
        }
        if (null !== $this->endpoint) {
            $res['Endpoint'] = null !== $this->endpoint ? $this->endpoint->toMap() : null;
        }
        if (null !== $this->ipSetId) {
            $res['IpSetId'] = $this->ipSetId;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return accelerateIps
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccelerateIpAddress'])) {
            $model->accelerateIpAddress = $map['AccelerateIpAddress'];
        }
        if (isset($map['AccelerateIpId'])) {
            $model->accelerateIpId = $map['AccelerateIpId'];
        }
        if (isset($map['AcceleratorId'])) {
            $model->acceleratorId = $map['AcceleratorId'];
        }
        if (isset($map['Endpoint'])) {
            $model->endpoint = endpoint::fromMap($map['Endpoint']);
        }
        if (isset($map['IpSetId'])) {
            $model->ipSetId = $map['IpSetId'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
