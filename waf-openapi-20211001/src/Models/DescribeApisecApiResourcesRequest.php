<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Tea\Model;

class DescribeApisecApiResourcesRequest extends Model
{
    /**
     * @description The API.
     *
     * @example /auth/login
     *
     * @var string
     */
    public $apiFormat;

    /**
     * @description The ID of the API.
     *
     * @example 867ade***24ee6e205b8da82b8f84
     *
     * @var string
     */
    public $apiId;

    /**
     * @description The request method of the API. Valid values:
     *
     * **GET**
     * **POST**
     * **HEAD**
     * **PUT**
     * **DELETE**
     * **CONNECT**
     * **PATCH**
     * **OPTIONS**
     *
     * @example POST
     *
     * @var string
     */
    public $apiMethod;

    /**
     * @description The API status. Valid values:
     *
     * **NewbornInterface**: The API is newly added.
     * **OfflineInterface**: The API is inactive.
     * **normal**: The API is normal.
     *
     * @example OfflineInterface
     *
     * @var string
     */
    public $apiStatus;

    /**
     * @description The business purpose of the API.
     *
     * >  You can call the [DescribeApisecRules](~~DescribeApisecRules~~) operation to query the business purpose of the API.
     * @example SendMail
     *
     * @var string
     */
    public $apiTag;

    /**
     * @description The service object. Valid values:
     *
     * **PublicAPI**: public services
     * **ThirdpartAPI**: cooperation with third-party partners
     * **InternalAPI**: internal office
     *
     * @example innerAPI
     *
     * @var string
     */
    public $apiType;

    /**
     * @description Specifies whether authentication is required. Valid values:
     *
     * **0**: Authentication is required.
     * **1**: Authentication is not required.
     *
     * @example 0
     *
     * @var string
     */
    public $authFlag;

    /**
     * @description The ID of the hybrid cloud cluster.
     * >For hybrid cloud scenarios only, you can call the [DescribeHybridCloudClusters](https://help.aliyun.com/document_detail/2849376.html) operation to query the hybrid cloud clusters.
     * @example 740
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The end of the time range to query. This value is a UNIX timestamp in UTC. Unit: seconds.
     *
     * @example 1683388800
     *
     * @var string
     */
    public $endTime;

    /**
     * @description Specifies whether to follow the API. Valid values:
     *
     * **1**: follows the API.
     * **0**: does not follow the API.
     *
     * @example 0
     *
     * @var int
     */
    public $follow;

    /**
     * @description The ID of the Web Application Firewall (WAF) instance.
     *
     * This parameter is required.
     * @example waf_v2_public_cn-u***gr20j
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
     * @description The remarks.
     *
     * @example API for logon
     *
     * @var string
     */
    public $note;

    /**
     * @description The name of the sorting field. Valid values:
     *
     * **allCnt**: the total number of calls to the API in the previous 30 days
     * **botCnt**: the number of bot-initiated requests in the previous 30 days
     * **crossBorderCnt**: the number of cross-border requests in the previous 30 days
     * **abnormalNum**: the number of API-related risks
     * **eventNum**: the number of API-related security events
     * **farthestTs**: the time when the API was first detected
     * **lastestTs**: the time of the most recent access to the API
     *
     * @example allCnt
     *
     * @var string
     */
    public $orderKey;

    /**
     * @description The sorting method. Valid values:
     *
     * **desc** (default): descending order
     * **asc**: ascending order
     *
     * @example desc
     *
     * @var string
     */
    public $orderWay;

    /**
     * @description The page number. Default value: **1**.
     *
     * @example 1
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
     * @description The region in which the Web Application Firewall (WAF) instance is deployed. Valid values:
     *
     * **cn-hangzhou**: Chinese mainland
     * **ap-southeast-1**: outside the Chinese mainland
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The sensitive data type in the request.
     *
     * >  You can call the [DescribeApisecRules](~~DescribeApisecRules~~) operation to query the supported sensitive data types.
     * @example 1004,1005
     *
     * @var string
     */
    public $requestSensitiveType;

    /**
     * @description The ID of the Alibaba Cloud resource group.
     *
     * @example rg-acfm***q
     *
     * @var string
     */
    public $resourceManagerResourceGroupId;

    /**
     * @description The sensitivity level of the API. Valid values:
     *
     * **L1**: high sensitivity
     * **L2**: moderate sensitivity
     * **L3**: low sensitivity
     * **N**: non-sensitivity
     *
     * @example L3
     *
     * @var string
     */
    public $sensitiveLevel;

    /**
     * @description The sensitive data type in the response.
     *
     * >  You can call the [DescribeApisecRules](~~DescribeApisecRules~~) operation to query the supported sensitive data types.
     * @example 1004
     *
     * @var string
     */
    public $sensitiveType;

    /**
     * @description The beginning of the time range to query. This value is a UNIX timestamp in UTC. Unit: seconds.
     *
     * @example 1681833600
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'apiFormat'                      => 'ApiFormat',
        'apiId'                          => 'ApiId',
        'apiMethod'                      => 'ApiMethod',
        'apiStatus'                      => 'ApiStatus',
        'apiTag'                         => 'ApiTag',
        'apiType'                        => 'ApiType',
        'authFlag'                       => 'AuthFlag',
        'clusterId'                      => 'ClusterId',
        'endTime'                        => 'EndTime',
        'follow'                         => 'Follow',
        'instanceId'                     => 'InstanceId',
        'matchedHost'                    => 'MatchedHost',
        'note'                           => 'Note',
        'orderKey'                       => 'OrderKey',
        'orderWay'                       => 'OrderWay',
        'pageNumber'                     => 'PageNumber',
        'pageSize'                       => 'PageSize',
        'regionId'                       => 'RegionId',
        'requestSensitiveType'           => 'RequestSensitiveType',
        'resourceManagerResourceGroupId' => 'ResourceManagerResourceGroupId',
        'sensitiveLevel'                 => 'SensitiveLevel',
        'sensitiveType'                  => 'SensitiveType',
        'startTime'                      => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiFormat) {
            $res['ApiFormat'] = $this->apiFormat;
        }
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }
        if (null !== $this->apiMethod) {
            $res['ApiMethod'] = $this->apiMethod;
        }
        if (null !== $this->apiStatus) {
            $res['ApiStatus'] = $this->apiStatus;
        }
        if (null !== $this->apiTag) {
            $res['ApiTag'] = $this->apiTag;
        }
        if (null !== $this->apiType) {
            $res['ApiType'] = $this->apiType;
        }
        if (null !== $this->authFlag) {
            $res['AuthFlag'] = $this->authFlag;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->follow) {
            $res['Follow'] = $this->follow;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->matchedHost) {
            $res['MatchedHost'] = $this->matchedHost;
        }
        if (null !== $this->note) {
            $res['Note'] = $this->note;
        }
        if (null !== $this->orderKey) {
            $res['OrderKey'] = $this->orderKey;
        }
        if (null !== $this->orderWay) {
            $res['OrderWay'] = $this->orderWay;
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
        if (null !== $this->requestSensitiveType) {
            $res['RequestSensitiveType'] = $this->requestSensitiveType;
        }
        if (null !== $this->resourceManagerResourceGroupId) {
            $res['ResourceManagerResourceGroupId'] = $this->resourceManagerResourceGroupId;
        }
        if (null !== $this->sensitiveLevel) {
            $res['SensitiveLevel'] = $this->sensitiveLevel;
        }
        if (null !== $this->sensitiveType) {
            $res['SensitiveType'] = $this->sensitiveType;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeApisecApiResourcesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiFormat'])) {
            $model->apiFormat = $map['ApiFormat'];
        }
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }
        if (isset($map['ApiMethod'])) {
            $model->apiMethod = $map['ApiMethod'];
        }
        if (isset($map['ApiStatus'])) {
            $model->apiStatus = $map['ApiStatus'];
        }
        if (isset($map['ApiTag'])) {
            $model->apiTag = $map['ApiTag'];
        }
        if (isset($map['ApiType'])) {
            $model->apiType = $map['ApiType'];
        }
        if (isset($map['AuthFlag'])) {
            $model->authFlag = $map['AuthFlag'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Follow'])) {
            $model->follow = $map['Follow'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['MatchedHost'])) {
            $model->matchedHost = $map['MatchedHost'];
        }
        if (isset($map['Note'])) {
            $model->note = $map['Note'];
        }
        if (isset($map['OrderKey'])) {
            $model->orderKey = $map['OrderKey'];
        }
        if (isset($map['OrderWay'])) {
            $model->orderWay = $map['OrderWay'];
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
        if (isset($map['RequestSensitiveType'])) {
            $model->requestSensitiveType = $map['RequestSensitiveType'];
        }
        if (isset($map['ResourceManagerResourceGroupId'])) {
            $model->resourceManagerResourceGroupId = $map['ResourceManagerResourceGroupId'];
        }
        if (isset($map['SensitiveLevel'])) {
            $model->sensitiveLevel = $map['SensitiveLevel'];
        }
        if (isset($map['SensitiveType'])) {
            $model->sensitiveType = $map['SensitiveType'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
