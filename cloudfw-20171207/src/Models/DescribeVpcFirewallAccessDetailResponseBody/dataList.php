<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallAccessDetailResponseBody;

use AlibabaCloud\Dara\Model;

class dataList extends Model
{
    /**
     * @var int
     */
    public $inBytes;

    /**
     * @var int
     */
    public $outBytes;

    /**
     * @var string
     */
    public $peerAssetIP;

    /**
     * @var string
     */
    public $peerAssetInstanceId;

    /**
     * @var string
     */
    public $peerAssetInstanceName;

    /**
     * @var string
     */
    public $peerVpcId;

    /**
     * @var string
     */
    public $regionNo;

    /**
     * @var int
     */
    public $sessionCount;

    /**
     * @var string
     */
    public $peerVpcName;
    protected $_name = [
        'inBytes' => 'InBytes',
        'outBytes' => 'OutBytes',
        'peerAssetIP' => 'PeerAssetIP',
        'peerAssetInstanceId' => 'PeerAssetInstanceId',
        'peerAssetInstanceName' => 'PeerAssetInstanceName',
        'peerVpcId' => 'PeerVpcId',
        'regionNo' => 'RegionNo',
        'sessionCount' => 'SessionCount',
        'peerVpcName' => 'peerVpcName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->inBytes) {
            $res['InBytes'] = $this->inBytes;
        }

        if (null !== $this->outBytes) {
            $res['OutBytes'] = $this->outBytes;
        }

        if (null !== $this->peerAssetIP) {
            $res['PeerAssetIP'] = $this->peerAssetIP;
        }

        if (null !== $this->peerAssetInstanceId) {
            $res['PeerAssetInstanceId'] = $this->peerAssetInstanceId;
        }

        if (null !== $this->peerAssetInstanceName) {
            $res['PeerAssetInstanceName'] = $this->peerAssetInstanceName;
        }

        if (null !== $this->peerVpcId) {
            $res['PeerVpcId'] = $this->peerVpcId;
        }

        if (null !== $this->regionNo) {
            $res['RegionNo'] = $this->regionNo;
        }

        if (null !== $this->sessionCount) {
            $res['SessionCount'] = $this->sessionCount;
        }

        if (null !== $this->peerVpcName) {
            $res['peerVpcName'] = $this->peerVpcName;
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
        if (isset($map['InBytes'])) {
            $model->inBytes = $map['InBytes'];
        }

        if (isset($map['OutBytes'])) {
            $model->outBytes = $map['OutBytes'];
        }

        if (isset($map['PeerAssetIP'])) {
            $model->peerAssetIP = $map['PeerAssetIP'];
        }

        if (isset($map['PeerAssetInstanceId'])) {
            $model->peerAssetInstanceId = $map['PeerAssetInstanceId'];
        }

        if (isset($map['PeerAssetInstanceName'])) {
            $model->peerAssetInstanceName = $map['PeerAssetInstanceName'];
        }

        if (isset($map['PeerVpcId'])) {
            $model->peerVpcId = $map['PeerVpcId'];
        }

        if (isset($map['RegionNo'])) {
            $model->regionNo = $map['RegionNo'];
        }

        if (isset($map['SessionCount'])) {
            $model->sessionCount = $map['SessionCount'];
        }

        if (isset($map['peerVpcName'])) {
            $model->peerVpcName = $map['peerVpcName'];
        }

        return $model;
    }
}
