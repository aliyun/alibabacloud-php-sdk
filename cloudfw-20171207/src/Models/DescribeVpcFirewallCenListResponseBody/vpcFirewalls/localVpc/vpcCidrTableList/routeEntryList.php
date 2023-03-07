<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallCenListResponseBody\vpcFirewalls\localVpc\vpcCidrTableList;

use AlibabaCloud\Tea\Model;

class routeEntryList extends Model
{
    /**
     * @description The destination CIDR block of the VPC.
     *
     * @example 192.168.XX.XX/24
     *
     * @var string
     */
    public $destinationCidr;

    /**
     * @description The instance ID of the next hop for the VPC.
     *
     * @example vrt-m5eb5me6c3l5sezae****
     *
     * @var string
     */
    public $nextHopInstanceId;
    protected $_name = [
        'destinationCidr'   => 'DestinationCidr',
        'nextHopInstanceId' => 'NextHopInstanceId',
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
        if (null !== $this->nextHopInstanceId) {
            $res['NextHopInstanceId'] = $this->nextHopInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return routeEntryList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DestinationCidr'])) {
            $model->destinationCidr = $map['DestinationCidr'];
        }
        if (isset($map['NextHopInstanceId'])) {
            $model->nextHopInstanceId = $map['NextHopInstanceId'];
        }

        return $model;
    }
}
