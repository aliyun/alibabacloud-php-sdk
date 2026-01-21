<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallTrafficAssetListResponseBody;

use AlibabaCloud\Dara\Model;

class dataList extends Model
{
    /**
     * @var string
     */
    public $IP;

    /**
     * @var int
     */
    public $ipsHitCnt;

    /**
     * @var int
     */
    public $sessionCount;

    /**
     * @var int
     */
    public $totalBytes;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $vpcName;
    protected $_name = [
        'IP' => 'IP',
        'ipsHitCnt' => 'IpsHitCnt',
        'sessionCount' => 'SessionCount',
        'totalBytes' => 'TotalBytes',
        'vpcId' => 'VpcId',
        'vpcName' => 'VpcName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->IP) {
            $res['IP'] = $this->IP;
        }

        if (null !== $this->ipsHitCnt) {
            $res['IpsHitCnt'] = $this->ipsHitCnt;
        }

        if (null !== $this->sessionCount) {
            $res['SessionCount'] = $this->sessionCount;
        }

        if (null !== $this->totalBytes) {
            $res['TotalBytes'] = $this->totalBytes;
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
        if (isset($map['IP'])) {
            $model->IP = $map['IP'];
        }

        if (isset($map['IpsHitCnt'])) {
            $model->ipsHitCnt = $map['IpsHitCnt'];
        }

        if (isset($map['SessionCount'])) {
            $model->sessionCount = $map['SessionCount'];
        }

        if (isset($map['TotalBytes'])) {
            $model->totalBytes = $map['TotalBytes'];
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
