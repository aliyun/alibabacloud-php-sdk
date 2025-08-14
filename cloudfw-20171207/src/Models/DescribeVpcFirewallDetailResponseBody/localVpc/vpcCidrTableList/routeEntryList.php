<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallDetailResponseBody\localVpc\vpcCidrTableList;

use AlibabaCloud\Dara\Model;

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
        'destinationCidr' => 'DestinationCidr',
        'nextHopInstanceId' => 'NextHopInstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
