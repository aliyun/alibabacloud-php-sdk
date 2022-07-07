<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallListResponseBody\vpcFirewalls\localVpc\vpcCidrTableList;

use AlibabaCloud\Tea\Model;

class routeEntryList extends Model
{
    /**
     * @var string
     */
    public $destinationCidr;

    /**
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
