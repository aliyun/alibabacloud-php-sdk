<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class CreateRouteRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 192.168.0.0/16
     *
     * @var string
     */
    public $destinationCidr;

    /**
     * @description This parameter is required.
     *
     * @example 1000
     *
     * @var int
     */
    public $networkId;
    protected $_name = [
        'destinationCidr' => 'DestinationCidr',
        'networkId'       => 'NetworkId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->destinationCidr) {
            $res['DestinationCidr'] = $this->destinationCidr;
        }
        if (null !== $this->networkId) {
            $res['NetworkId'] = $this->networkId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRouteRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DestinationCidr'])) {
            $model->destinationCidr = $map['DestinationCidr'];
        }
        if (isset($map['NetworkId'])) {
            $model->networkId = $map['NetworkId'];
        }

        return $model;
    }
}
