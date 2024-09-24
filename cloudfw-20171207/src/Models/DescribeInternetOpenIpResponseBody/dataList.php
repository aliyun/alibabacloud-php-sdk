<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeInternetOpenIpResponseBody;

use AlibabaCloud\Tea\Model;

class dataList extends Model
{
    /**
     * @description The reason why recommended intelligent policies are unavailable. Valid values:
     *
     *   No recommended intelligent policies are available.
     *   This feature is available only to some users.
     *   The policy configuration has been modified. No recommended intelligent policies are available.
     *   The recommended intelligent policies have been configured. No new recommended intelligent policies are available.
     *
     * @example No recommended intelligent policies are available.
     *
     * @var string
     */
    public $aclRecommendDetail;

    /**
     * @description The instance ID.
     *
     * @example i-bp1ix9w22kv6aew9****
     *
     * @var string
     */
    public $assetsInstanceId;

    /**
     * @description The instance name.
     *
     * @example launch-advisor-2023****
     *
     * @var string
     */
    public $assetsName;

    /**
     * @description The asset type of the instance.
     *
     * @example EcsEIP
     *
     * @var string
     */
    public $assetsType;

    /**
     * @description The total number of ports.
     *
     * @example 5
     *
     * @var int
     */
    public $detailNum;

    /**
     * @description Specifies whether an access control policy is recommended. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $hasAclRecommend;

    /**
     * @description The list of ports.
     *
     * @var string[]
     */
    public $portList;

    /**
     * @description The public IP address of the instance.
     *
     * @example 203.0.113.1
     *
     * @var string
     */
    public $publicIp;

    /**
     * @description The region ID of the instance.
     *
     * @example cn-shenzhen
     *
     * @var string
     */
    public $regionNo;

    /**
     * @description The risk level. Valid values:
     *
     *   **3**: high risk
     *   **2**: medium risk
     *   **1**: low risk
     *   **0**: no risk
     *
     * @example 3
     *
     * @var int
     */
    public $riskLevel;

    /**
     * @description The reason for the risk.
     *
     * @example Previous traffic is all malicious traffic.
     *
     * @var string
     */
    public $riskReason;

    /**
     * @description The list of applications.
     *
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
    public $totalReplyBytes;

    /**
     * @description The percentage of traffic of a day. Unit: percent (%).
     *
     * @example 11.1
     *
     * @var string
     */
    public $trafficPercent1Day;

    /**
     * @description The percentage of traffic of 30 days. Unit: percent (%).
     *
     * @example 99.9
     *
     * @var string
     */
    public $trafficPercent30Day;

    /**
     * @description The percentage of traffic of seven days. Unit: percent (%).
     *
     * @example 77.7
     *
     * @var string
     */
    public $trafficPercent7Day;
    protected $_name = [
        'aclRecommendDetail'  => 'AclRecommendDetail',
        'assetsInstanceId'    => 'AssetsInstanceId',
        'assetsName'          => 'AssetsName',
        'assetsType'          => 'AssetsType',
        'detailNum'           => 'DetailNum',
        'hasAclRecommend'     => 'HasAclRecommend',
        'portList'            => 'PortList',
        'publicIp'            => 'PublicIp',
        'regionNo'            => 'RegionNo',
        'riskLevel'           => 'RiskLevel',
        'riskReason'          => 'RiskReason',
        'serviceNameList'     => 'ServiceNameList',
        'srcIpCnt'            => 'SrcIpCnt',
        'totalReplyBytes'     => 'TotalReplyBytes',
        'trafficPercent1Day'  => 'TrafficPercent1Day',
        'trafficPercent30Day' => 'TrafficPercent30Day',
        'trafficPercent7Day'  => 'TrafficPercent7Day',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->portList) {
            $res['PortList'] = $this->portList;
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
            $res['ServiceNameList'] = $this->serviceNameList;
        }
        if (null !== $this->srcIpCnt) {
            $res['SrcIpCnt'] = $this->srcIpCnt;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataList
     */
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
        if (isset($map['PortList'])) {
            if (!empty($map['PortList'])) {
                $model->portList = $map['PortList'];
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
                $model->serviceNameList = $map['ServiceNameList'];
            }
        }
        if (isset($map['SrcIpCnt'])) {
            $model->srcIpCnt = $map['SrcIpCnt'];
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

        return $model;
    }
}
