<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeContactPointsResponseBody\contactPoints;

use AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeContactPointsResponseBody\contactPoints\contactPoint\privateAddresses;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeContactPointsResponseBody\contactPoints\contactPoint\publicAddresses;
use AlibabaCloud\Tea\Model;

class contactPoint extends Model
{
    /**
     * @example cn-hangzhou-g
     *
     * @var string
     */
    public $dataCenterId;

    /**
     * @example 9042
     *
     * @var int
     */
    public $port;

    /**
     * @var privateAddresses
     */
    public $privateAddresses;

    /**
     * @var publicAddresses
     */
    public $publicAddresses;
    protected $_name = [
        'dataCenterId'     => 'DataCenterId',
        'port'             => 'Port',
        'privateAddresses' => 'PrivateAddresses',
        'publicAddresses'  => 'PublicAddresses',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataCenterId) {
            $res['DataCenterId'] = $this->dataCenterId;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->privateAddresses) {
            $res['PrivateAddresses'] = null !== $this->privateAddresses ? $this->privateAddresses->toMap() : null;
        }
        if (null !== $this->publicAddresses) {
            $res['PublicAddresses'] = null !== $this->publicAddresses ? $this->publicAddresses->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return contactPoint
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataCenterId'])) {
            $model->dataCenterId = $map['DataCenterId'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['PrivateAddresses'])) {
            $model->privateAddresses = privateAddresses::fromMap($map['PrivateAddresses']);
        }
        if (isset($map['PublicAddresses'])) {
            $model->publicAddresses = publicAddresses::fromMap($map['PublicAddresses']);
        }

        return $model;
    }
}
