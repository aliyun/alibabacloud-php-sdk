<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Tea\Model;

class DescribeApisecAbnormalsRequest extends Model
{
    /**
     * @description The ID of the risk.
     *
     * @example 29c6401****99a2bad3943e26d8
     *
     * @var string
     */
    public $abnormalId;

    /**
     * @description The level of the risk. Valid values:
     *
     * **high**
     * **medium**
     * **low**
     *
     * @example medium
     *
     * @var string
     */
    public $abnormalLevel;

    /**
     * @description The type of the risk.
     *
     * >  You can call the [DescribeApisecRules](https://help.aliyun.com/document_detail/2859155.html) operation to query the supported types of risks.
     *
     * @example LackOfSpeedLimit
     *
     * @var string
     */
    public $abnormalTag;

    /**
     * @description The risk-related API.
     *
     * @example /api/users/login
     *
     * @var string
     */
    public $apiFormat;

    /**
     * @description The ID of the risk-related API.
     *
     * @example bd9efb8ad******d9ca6
     *
     * @var string
     */
    public $apiId;

    /**
     * @description The business purpose of the API.
     *
     * >  You can call the [DescribeApisecRules](https://help.aliyun.com/document_detail/2859155.html) operation to query the business purposes of APIs.
     *
     * @example RegisterAPI
     *
     * @var string
     */
    public $apiTag;

    /**
     * @description The ID of the hybrid cloud cluster.
     *
     * >  This parameter is available only in hybrid cloud scenarios. You can call the [DescribeHybridCloudClusters](https://help.aliyun.com/document_detail/2849376.html) operation to query hybrid cloud clusters.
     *
     * @example 546
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The end of the time range to query. The value is a UNIX timestamp displayed in UTC. Unit: seconds.
     *
     * @example 1684382100
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The ID of the WAF instance.
     *
     * >  You can call the [DescribeInstance](https://help.aliyun.com/document_detail/433756.html) operation to query the ID of the WAF instance.
     *
     * This parameter is required.
     *
     * @example waf_v2_public_cn-z***9g301
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The domain name or IP address of the API.
     *
     * @example a.aliyun.com
     *
     * @var string
     */
    public $matchedHost;

    /**
     * @description The name of the sorting field. Valid values:
     *
     *   **discoverTime** (default): indicates the time when a risk was first detected.
     *   **abnormalLevel**: indicates the level of a risk.
     *   **latestDiscoverTime**: indicates the time when a risk was last detected.
     *
     * @example allCnt
     *
     * @var string
     */
    public $orderKey;

    /**
     * @description The sorting method. Valid values:
     *
     * **desc (default)**: in descending order
     * **asc**: in ascending order
     *
     * @example desc
     *
     * @var string
     */
    public $orderWay;

    /**
     * @description The source of the risk type. Valid values:
     *
     * **custom**
     * **default**
     *
     * @example custom
     *
     * @var string
     */
    public $origin;

    /**
     * @description The page number. Default value: **1**.
     *
     * @example 2
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Default value: **10**.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The region ID of the WAF instance. Valid values:
     *
     *   **cn-hangzhou**: Chinese mainland.
     *   **ap-southeast-1**: outside the Chinese mainland.
     *
     * @example cn-qingdao
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the Alibaba Cloud resource group.
     *
     * @example rg-acfm***q
     *
     * @var string
     */
    public $resourceManagerResourceGroupId;

    /**
     * @description The beginning of the time range to query. The value is a UNIX timestamp displayed in UTC. Unit: seconds.
     *
     * @example 1684252800
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The status of the risk. Valid values:
     *
     * **toBeConfirmed**
     * **confirmed**
     * **toBeFixed**
     * **fixed**
     * **ignored**
     *
     * @example Confirmed
     *
     * @var string
     */
    public $userStatus;
    protected $_name = [
        'abnormalId' => 'AbnormalId',
        'abnormalLevel' => 'AbnormalLevel',
        'abnormalTag' => 'AbnormalTag',
        'apiFormat' => 'ApiFormat',
        'apiId' => 'ApiId',
        'apiTag' => 'ApiTag',
        'clusterId' => 'ClusterId',
        'endTime' => 'EndTime',
        'instanceId' => 'InstanceId',
        'matchedHost' => 'MatchedHost',
        'orderKey' => 'OrderKey',
        'orderWay' => 'OrderWay',
        'origin' => 'Origin',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'regionId' => 'RegionId',
        'resourceManagerResourceGroupId' => 'ResourceManagerResourceGroupId',
        'startTime' => 'StartTime',
        'userStatus' => 'UserStatus',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->abnormalId) {
            $res['AbnormalId'] = $this->abnormalId;
        }
        if (null !== $this->abnormalLevel) {
            $res['AbnormalLevel'] = $this->abnormalLevel;
        }
        if (null !== $this->abnormalTag) {
            $res['AbnormalTag'] = $this->abnormalTag;
        }
        if (null !== $this->apiFormat) {
            $res['ApiFormat'] = $this->apiFormat;
        }
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }
        if (null !== $this->apiTag) {
            $res['ApiTag'] = $this->apiTag;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->matchedHost) {
            $res['MatchedHost'] = $this->matchedHost;
        }
        if (null !== $this->orderKey) {
            $res['OrderKey'] = $this->orderKey;
        }
        if (null !== $this->orderWay) {
            $res['OrderWay'] = $this->orderWay;
        }
        if (null !== $this->origin) {
            $res['Origin'] = $this->origin;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceManagerResourceGroupId) {
            $res['ResourceManagerResourceGroupId'] = $this->resourceManagerResourceGroupId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->userStatus) {
            $res['UserStatus'] = $this->userStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeApisecAbnormalsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AbnormalId'])) {
            $model->abnormalId = $map['AbnormalId'];
        }
        if (isset($map['AbnormalLevel'])) {
            $model->abnormalLevel = $map['AbnormalLevel'];
        }
        if (isset($map['AbnormalTag'])) {
            $model->abnormalTag = $map['AbnormalTag'];
        }
        if (isset($map['ApiFormat'])) {
            $model->apiFormat = $map['ApiFormat'];
        }
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }
        if (isset($map['ApiTag'])) {
            $model->apiTag = $map['ApiTag'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['MatchedHost'])) {
            $model->matchedHost = $map['MatchedHost'];
        }
        if (isset($map['OrderKey'])) {
            $model->orderKey = $map['OrderKey'];
        }
        if (isset($map['OrderWay'])) {
            $model->orderWay = $map['OrderWay'];
        }
        if (isset($map['Origin'])) {
            $model->origin = $map['Origin'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceManagerResourceGroupId'])) {
            $model->resourceManagerResourceGroupId = $map['ResourceManagerResourceGroupId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['UserStatus'])) {
            $model->userStatus = $map['UserStatus'];
        }

        return $model;
    }
}
