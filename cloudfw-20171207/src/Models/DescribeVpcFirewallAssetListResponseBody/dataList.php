<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallAssetListResponseBody;

use AlibabaCloud\Dara\Model;

class dataList extends Model
{
    /**
     * @var string
     */
    public $assetIP;

    /**
     * @var string
     */
    public $assetInstanceId;

    /**
     * @var string
     */
    public $assetInstanceName;

    /**
     * @var int
     */
    public $inBytes;

    /**
     * @var int
     */
    public $ipsHitCnt;

    /**
     * @var int
     */
    public $outBytes;

    /**
     * @var string[]
     */
    public $portList;

    /**
     * @var string
     */
    public $regionNo;

    /**
     * @var int
     */
    public $riskLevel;

    /**
     * @var string
     */
    public $riskReason;

    /**
     * @var int
     */
    public $sessionCount;

    /**
     * @var int
     */
    public $totalBytes;
    protected $_name = [
        'assetIP' => 'AssetIP',
        'assetInstanceId' => 'AssetInstanceId',
        'assetInstanceName' => 'AssetInstanceName',
        'inBytes' => 'InBytes',
        'ipsHitCnt' => 'IpsHitCnt',
        'outBytes' => 'OutBytes',
        'portList' => 'PortList',
        'regionNo' => 'RegionNo',
        'riskLevel' => 'RiskLevel',
        'riskReason' => 'RiskReason',
        'sessionCount' => 'SessionCount',
        'totalBytes' => 'TotalBytes',
    ];

    public function validate()
    {
        if (\is_array($this->portList)) {
            Model::validateArray($this->portList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assetIP) {
            $res['AssetIP'] = $this->assetIP;
        }

        if (null !== $this->assetInstanceId) {
            $res['AssetInstanceId'] = $this->assetInstanceId;
        }

        if (null !== $this->assetInstanceName) {
            $res['AssetInstanceName'] = $this->assetInstanceName;
        }

        if (null !== $this->inBytes) {
            $res['InBytes'] = $this->inBytes;
        }

        if (null !== $this->ipsHitCnt) {
            $res['IpsHitCnt'] = $this->ipsHitCnt;
        }

        if (null !== $this->outBytes) {
            $res['OutBytes'] = $this->outBytes;
        }

        if (null !== $this->portList) {
            if (\is_array($this->portList)) {
                $res['PortList'] = [];
                $n1 = 0;
                foreach ($this->portList as $item1) {
                    $res['PortList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->regionNo) {
            $res['RegionNo'] = $this->regionNo;
        }

        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }

        if (null !== $this->riskReason) {
            $res['RiskReason'] = $this->riskReason;
        }

        if (null !== $this->sessionCount) {
            $res['SessionCount'] = $this->sessionCount;
        }

        if (null !== $this->totalBytes) {
            $res['TotalBytes'] = $this->totalBytes;
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
        if (isset($map['AssetIP'])) {
            $model->assetIP = $map['AssetIP'];
        }

        if (isset($map['AssetInstanceId'])) {
            $model->assetInstanceId = $map['AssetInstanceId'];
        }

        if (isset($map['AssetInstanceName'])) {
            $model->assetInstanceName = $map['AssetInstanceName'];
        }

        if (isset($map['InBytes'])) {
            $model->inBytes = $map['InBytes'];
        }

        if (isset($map['IpsHitCnt'])) {
            $model->ipsHitCnt = $map['IpsHitCnt'];
        }

        if (isset($map['OutBytes'])) {
            $model->outBytes = $map['OutBytes'];
        }

        if (isset($map['PortList'])) {
            if (!empty($map['PortList'])) {
                $model->portList = [];
                $n1 = 0;
                foreach ($map['PortList'] as $item1) {
                    $model->portList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RegionNo'])) {
            $model->regionNo = $map['RegionNo'];
        }

        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }

        if (isset($map['RiskReason'])) {
            $model->riskReason = $map['RiskReason'];
        }

        if (isset($map['SessionCount'])) {
            $model->sessionCount = $map['SessionCount'];
        }

        if (isset($map['TotalBytes'])) {
            $model->totalBytes = $map['TotalBytes'];
        }

        return $model;
    }
}
