<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeInternetOpenIpResponseBody;

use AlibabaCloud\Dara\Model;

class dataList extends Model
{
    /**
     * @var string
     */
    public $aclRecommendDetail;

    /**
     * @var string
     */
    public $assetsInstanceId;

    /**
     * @var string
     */
    public $assetsName;

    /**
     * @var string
     */
    public $assetsType;

    /**
     * @var int
     */
    public $detailNum;

    /**
     * @var bool
     */
    public $hasAclRecommend;

    /**
     * @var int
     */
    public $inBytes;

    /**
     * @var int
     */
    public $memberUid;

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
    public $publicIp;

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
     * @var string[]
     */
    public $serviceNameList;

    /**
     * @var int
     */
    public $srcIpCnt;

    /**
     * @var int
     */
    public $totalBytes;

    /**
     * @var int
     */
    public $totalReplyBytes;

    /**
     * @var string
     */
    public $trafficPercent1Day;

    /**
     * @var string
     */
    public $trafficPercent30Day;

    /**
     * @var string
     */
    public $trafficPercent7Day;

    /**
     * @var string[]
     */
    public $unknownReason;
    protected $_name = [
        'aclRecommendDetail' => 'AclRecommendDetail',
        'assetsInstanceId' => 'AssetsInstanceId',
        'assetsName' => 'AssetsName',
        'assetsType' => 'AssetsType',
        'detailNum' => 'DetailNum',
        'hasAclRecommend' => 'HasAclRecommend',
        'inBytes' => 'InBytes',
        'memberUid' => 'MemberUid',
        'outBytes' => 'OutBytes',
        'portList' => 'PortList',
        'publicIp' => 'PublicIp',
        'regionNo' => 'RegionNo',
        'riskLevel' => 'RiskLevel',
        'riskReason' => 'RiskReason',
        'serviceNameList' => 'ServiceNameList',
        'srcIpCnt' => 'SrcIpCnt',
        'totalBytes' => 'TotalBytes',
        'totalReplyBytes' => 'TotalReplyBytes',
        'trafficPercent1Day' => 'TrafficPercent1Day',
        'trafficPercent30Day' => 'TrafficPercent30Day',
        'trafficPercent7Day' => 'TrafficPercent7Day',
        'unknownReason' => 'UnknownReason',
    ];

    public function validate()
    {
        if (\is_array($this->portList)) {
            Model::validateArray($this->portList);
        }
        if (\is_array($this->serviceNameList)) {
            Model::validateArray($this->serviceNameList);
        }
        if (\is_array($this->unknownReason)) {
            Model::validateArray($this->unknownReason);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aclRecommendDetail) {
            $res['AclRecommendDetail'] = $this->aclRecommendDetail;
        }

        if (null !== $this->assetsInstanceId) {
            $res['AssetsInstanceId'] = $this->assetsInstanceId;
        }

        if (null !== $this->assetsName) {
            $res['AssetsName'] = $this->assetsName;
        }

        if (null !== $this->assetsType) {
            $res['AssetsType'] = $this->assetsType;
        }

        if (null !== $this->detailNum) {
            $res['DetailNum'] = $this->detailNum;
        }

        if (null !== $this->hasAclRecommend) {
            $res['HasAclRecommend'] = $this->hasAclRecommend;
        }

        if (null !== $this->inBytes) {
            $res['InBytes'] = $this->inBytes;
        }

        if (null !== $this->memberUid) {
            $res['MemberUid'] = $this->memberUid;
        }

        if (null !== $this->outBytes) {
            $res['OutBytes'] = $this->outBytes;
        }

        if (null !== $this->portList) {
            if (\is_array($this->portList)) {
                $res['PortList'] = [];
                $n1 = 0;
                foreach ($this->portList as $item1) {
                    $res['PortList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->publicIp) {
            $res['PublicIp'] = $this->publicIp;
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

        if (null !== $this->serviceNameList) {
            if (\is_array($this->serviceNameList)) {
                $res['ServiceNameList'] = [];
                $n1 = 0;
                foreach ($this->serviceNameList as $item1) {
                    $res['ServiceNameList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->srcIpCnt) {
            $res['SrcIpCnt'] = $this->srcIpCnt;
        }

        if (null !== $this->totalBytes) {
            $res['TotalBytes'] = $this->totalBytes;
        }

        if (null !== $this->totalReplyBytes) {
            $res['TotalReplyBytes'] = $this->totalReplyBytes;
        }

        if (null !== $this->trafficPercent1Day) {
            $res['TrafficPercent1Day'] = $this->trafficPercent1Day;
        }

        if (null !== $this->trafficPercent30Day) {
            $res['TrafficPercent30Day'] = $this->trafficPercent30Day;
        }

        if (null !== $this->trafficPercent7Day) {
            $res['TrafficPercent7Day'] = $this->trafficPercent7Day;
        }

        if (null !== $this->unknownReason) {
            if (\is_array($this->unknownReason)) {
                $res['UnknownReason'] = [];
                $n1 = 0;
                foreach ($this->unknownReason as $item1) {
                    $res['UnknownReason'][$n1++] = $item1;
                }
            }
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
        if (isset($map['AclRecommendDetail'])) {
            $model->aclRecommendDetail = $map['AclRecommendDetail'];
        }

        if (isset($map['AssetsInstanceId'])) {
            $model->assetsInstanceId = $map['AssetsInstanceId'];
        }

        if (isset($map['AssetsName'])) {
            $model->assetsName = $map['AssetsName'];
        }

        if (isset($map['AssetsType'])) {
            $model->assetsType = $map['AssetsType'];
        }

        if (isset($map['DetailNum'])) {
            $model->detailNum = $map['DetailNum'];
        }

        if (isset($map['HasAclRecommend'])) {
            $model->hasAclRecommend = $map['HasAclRecommend'];
        }

        if (isset($map['InBytes'])) {
            $model->inBytes = $map['InBytes'];
        }

        if (isset($map['MemberUid'])) {
            $model->memberUid = $map['MemberUid'];
        }

        if (isset($map['OutBytes'])) {
            $model->outBytes = $map['OutBytes'];
        }

        if (isset($map['PortList'])) {
            if (!empty($map['PortList'])) {
                $model->portList = [];
                $n1 = 0;
                foreach ($map['PortList'] as $item1) {
                    $model->portList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['PublicIp'])) {
            $model->publicIp = $map['PublicIp'];
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

        if (isset($map['ServiceNameList'])) {
            if (!empty($map['ServiceNameList'])) {
                $model->serviceNameList = [];
                $n1 = 0;
                foreach ($map['ServiceNameList'] as $item1) {
                    $model->serviceNameList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['SrcIpCnt'])) {
            $model->srcIpCnt = $map['SrcIpCnt'];
        }

        if (isset($map['TotalBytes'])) {
            $model->totalBytes = $map['TotalBytes'];
        }

        if (isset($map['TotalReplyBytes'])) {
            $model->totalReplyBytes = $map['TotalReplyBytes'];
        }

        if (isset($map['TrafficPercent1Day'])) {
            $model->trafficPercent1Day = $map['TrafficPercent1Day'];
        }

        if (isset($map['TrafficPercent30Day'])) {
            $model->trafficPercent30Day = $map['TrafficPercent30Day'];
        }

        if (isset($map['TrafficPercent7Day'])) {
            $model->trafficPercent7Day = $map['TrafficPercent7Day'];
        }

        if (isset($map['UnknownReason'])) {
            if (!empty($map['UnknownReason'])) {
                $model->unknownReason = [];
                $n1 = 0;
                foreach ($map['UnknownReason'] as $item1) {
                    $model->unknownReason[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
