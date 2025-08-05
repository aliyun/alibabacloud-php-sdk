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
     * @description The inbound network throughput, which indicates the total number of bytes that are sent inbound. Unit: bytes.
     *
     * @example 235
     *
     * @var int
     */
    public $inBytes;

    /**
     * @description The UID of the member that is managed by your Alibaba Cloud account.
     *
     * @example 14151892****7022
     *
     * @var int
     */
    public $memberUid;

    /**
     * @description The outbound network throughput, which indicates the total number of bytes that are sent outbound. Unit: bytes.
     *
     * @example 1123
     *
     * @var int
     */
    public $outBytes;

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
     * @description Number of source IPs.
     *
     * @example 22
     *
     * @var int
     */
    public $srcIpCnt;

    /**
     * @description The total inbound and outbound network throughput, which indicates the total number of bytes that are sent inbound and outbound. Unit: bytes.
     *
     * @example 253023143
     *
     * @var int
     */
    public $totalBytes;

    /**
     * @description Outbound traffic in the last 7 days.
     *
     * @example 100000
     *
     * @var int
     */
    public $totalReplyBytes;

    /**
     * @description For detailed traffic information, see the TotalBytes field.
     *
     * @example 0
     *
     * @var string
     */
    public $trafficPercent1Day;

    /**
     * @description For detailed traffic information, see the TotalBytes field.
     *
     * @example 0
     *
     * @var string
     */
    public $trafficPercent30Day;

    /**
     * @description For detailed traffic information, see the TotalBytes field.
     *
     * @example 0
     *
     * @var string
     */
    public $trafficPercent7Day;

    /**
     * @description Reasons for not analyzing the protocol when the protocol is identified as Unknown.
     *
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

    public function validate() {}

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
            $res['UnknownReason'] = $this->unknownReason;
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
                $model->unknownReason = $map['UnknownReason'];
            }
        }

        return $model;
    }
}
