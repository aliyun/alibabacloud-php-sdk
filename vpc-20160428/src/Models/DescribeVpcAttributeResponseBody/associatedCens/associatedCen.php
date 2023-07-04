<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcAttributeResponseBody\associatedCens;

use AlibabaCloud\Tea\Model;

class associatedCen extends Model
{
    /**
     * @description Indicates whether the VPC supports IPv4 gateways.
     *
     * - **true**: yes
     * - **false**: no
     * @example cen-7qthudw0ll6jmc****
     *
     * @var string
     */
    public $cenId;

    /**
     * @description The IPv6 CIDR block of the VPC.
     *
     * @example 283117732402483989
     *
     * @var int
     */
    public $cenOwnerId;

    /**
     * @description The ID of the IPv4 gateway.
     *
     * @example Attached
     *
     * @var string
     */
    public $cenStatus;
    protected $_name = [
        'cenId'      => 'CenId',
        'cenOwnerId' => 'CenOwnerId',
        'cenStatus'  => 'CenStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }
        if (null !== $this->cenOwnerId) {
            $res['CenOwnerId'] = $this->cenOwnerId;
        }
        if (null !== $this->cenStatus) {
            $res['CenStatus'] = $this->cenStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return associatedCen
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }
        if (isset($map['CenOwnerId'])) {
            $model->cenOwnerId = $map['CenOwnerId'];
        }
        if (isset($map['CenStatus'])) {
            $model->cenStatus = $map['CenStatus'];
        }

        return $model;
    }
}
