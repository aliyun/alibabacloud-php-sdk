<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallListResponseBody\vpcFirewalls;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallListResponseBody\vpcFirewalls\peerVpc\vpcCidrTableList;

class peerVpc extends Model
{
    /**
     * @var string
     */
    public $authorizationStatus;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionNo;

    /**
     * @var vpcCidrTableList[]
     */
    public $vpcCidrTableList;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $vpcName;
    protected $_name = [
        'authorizationStatus' => 'AuthorizationStatus',
        'ownerId' => 'OwnerId',
        'regionNo' => 'RegionNo',
        'vpcCidrTableList' => 'VpcCidrTableList',
        'vpcId' => 'VpcId',
        'vpcName' => 'VpcName',
    ];

    public function validate()
    {
        if (\is_array($this->vpcCidrTableList)) {
            Model::validateArray($this->vpcCidrTableList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authorizationStatus) {
            $res['AuthorizationStatus'] = $this->authorizationStatus;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->regionNo) {
            $res['RegionNo'] = $this->regionNo;
        }

        if (null !== $this->vpcCidrTableList) {
            if (\is_array($this->vpcCidrTableList)) {
                $res['VpcCidrTableList'] = [];
                $n1 = 0;
                foreach ($this->vpcCidrTableList as $item1) {
                    $res['VpcCidrTableList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        if (null !== $this->vpcName) {
            $res['VpcName'] = $this->vpcName;
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
        if (isset($map['AuthorizationStatus'])) {
            $model->authorizationStatus = $map['AuthorizationStatus'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['RegionNo'])) {
            $model->regionNo = $map['RegionNo'];
        }

        if (isset($map['VpcCidrTableList'])) {
            if (!empty($map['VpcCidrTableList'])) {
                $model->vpcCidrTableList = [];
                $n1 = 0;
                foreach ($map['VpcCidrTableList'] as $item1) {
                    $model->vpcCidrTableList[$n1++] = vpcCidrTableList::fromMap($item1);
                }
            }
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        if (isset($map['VpcName'])) {
            $model->vpcName = $map['VpcName'];
        }

        return $model;
    }
}
