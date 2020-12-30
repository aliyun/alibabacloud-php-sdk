<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeContactPointsResponseBody\contactPoints;

use AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeContactPointsResponseBody\contactPoints\contactPoint\privateAddresses;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeContactPointsResponseBody\contactPoints\contactPoint\publicAddresses;
use AlibabaCloud\Tea\Model;

class contactPoint extends Model
{
    /**
     * @var publicAddresses
     */
    public $publicAddresses;

    /**
     * @var int
     */
    public $port;

    /**
     * @var privateAddresses
     */
    public $privateAddresses;

    /**
     * @var string
     */
    public $dataCenterId;
    protected $_name = [
        'publicAddresses'  => 'PublicAddresses',
        'port'             => 'Port',
        'privateAddresses' => 'PrivateAddresses',
        'dataCenterId'     => 'DataCenterId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->publicAddresses) {
            $res['PublicAddresses'] = null !== $this->publicAddresses ? $this->publicAddresses->toMap() : null;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->privateAddresses) {
            $res['PrivateAddresses'] = null !== $this->privateAddresses ? $this->privateAddresses->toMap() : null;
        }
        if (null !== $this->dataCenterId) {
            $res['DataCenterId'] = $this->dataCenterId;
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
        if (isset($map['PublicAddresses'])) {
            $model->publicAddresses = publicAddresses::fromMap($map['PublicAddresses']);
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['PrivateAddresses'])) {
            $model->privateAddresses = privateAddresses::fromMap($map['PrivateAddresses']);
        }
        if (isset($map['DataCenterId'])) {
            $model->dataCenterId = $map['DataCenterId'];
        }

        return $model;
    }
}
