<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Tea\Model;

class DescribeApisecEventsRequest extends Model
{
    /**
     * @description The API.
     *
     * @example /apisec/v1/register.php
     *
     * @var string
     */
    public $apiFormat;

    /**
     * @description The ID of the event-related API.
     *
     * @example 820b860***6205da93b935b28
     *
     * @var string
     */
    public $apiId;

    /**
     * @description The business purpose of the API.
     *
     * >  You can call the [DescribeApisecRules](https://help.aliyun.com/document_detail/2859155.html) operation to query the business purpose of the API.
     * @example SendMail
     *
     * @var string
     */
    public $apiTag;

    /**
     * @description The Attack source IP.
     *
     * @example 42.224.*.*
     *
     * @var string
     */
    public $attackIp;

    /**
     * @description The ID of the hybrid cloud cluster.
     * >For hybrid cloud scenarios only, you can call the [DescribeHybridCloudClusters](https://help.aliyun.com/document_detail/2849376.html) operation to query the hybrid cloud clusters.
     * @example 428
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The end of the time range to query. This value is a UNIX timestamp in UTC. Unit: seconds.
     *
     * @example 1683703260
     *
     * @var int
     */
    public $endTs;

    /**
     * @description The ID of the API security event.
     *
     * @example 18ba94fea9***e66ba0557b7b91
     *
     * @var string
     */
    public $eventId;

    /**
     * @description The severity level of the event. Valid values:
     *
     *   **high**
     *   **medium**
     *   **low**
     *
     * @example low
     *
     * @var string
     */
    public $eventLevel;

    /**
     * @description The type of the event.
     *
     * >  You can call the [DescribeApisecRules](https://help.aliyun.com/document_detail/2859155.html) operation to query the supported event types.
     * @example ObtainSensitiveUnauthorized
     *
     * @var string
     */
    public $eventTag;

    /**
     * @description The ID of the Web Application Firewall (WAF) instance.
     *
     * This parameter is required.
     * @example waf_v2_public_cn-5y***d31
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
     *   **allCnt**: the number of attacks
     *   **startTs**: the start time of the event
     *   **endTs**: the end time of the event
     *
     * @example startTs
     *
     * @var string
     */
    public $orderKey;

    /**
     * @description The sorting method. Valid values:
     *
     *   **desc** (default): descending order
     *   **asc**: ascending order
     *
     * @example desc
     *
     * @var string
     */
    public $orderWay;

    /**
     * @description The source of the event type. Valid values:
     *
     *   **custom**
     *   **default**
     *
     * @example default
     *
     * @var string
     */
    public $origin;

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
     * @description The region in which the WAF instance is deployed. Valid values:
     *
     *   **cn-hangzhou**: Chinese mainland.
     *   **ap-southeast-1**: outside the Chinese mainland.
     *
     * @example cn-hangzhou
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
     * @description The beginning of the time range to query. This value is a UNIX timestamp in UTC. Unit: seconds.
     *
     * @example 1683648000
     *
     * @var int
     */
    public $startTs;

    /**
     * @description The event status. Valid values:
     *
     *   **toBeConfirmed**
     *   **confirmed**
     *   **ignored**
     *
     * @example Ignore
     *
     * @var string
     */
    public $userStatus;
    protected $_name = [
        'apiFormat'                      => 'ApiFormat',
        'apiId'                          => 'ApiId',
        'apiTag'                         => 'ApiTag',
        'attackIp'                       => 'AttackIp',
        'clusterId'                      => 'ClusterId',
        'endTs'                          => 'EndTs',
        'eventId'                        => 'EventId',
        'eventLevel'                     => 'EventLevel',
        'eventTag'                       => 'EventTag',
        'instanceId'                     => 'InstanceId',
        'matchedHost'                    => 'MatchedHost',
        'orderKey'                       => 'OrderKey',
        'orderWay'                       => 'OrderWay',
        'origin'                         => 'Origin',
        'pageNumber'                     => 'PageNumber',
        'pageSize'                       => 'PageSize',
        'regionId'                       => 'RegionId',
        'resourceManagerResourceGroupId' => 'ResourceManagerResourceGroupId',
        'startTs'                        => 'StartTs',
        'userStatus'                     => 'UserStatus',
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
        if (null !== $this->apiTag) {
            $res['ApiTag'] = $this->apiTag;
        }
        if (null !== $this->attackIp) {
            $res['AttackIp'] = $this->attackIp;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->endTs) {
            $res['EndTs'] = $this->endTs;
        }
        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }
        if (null !== $this->eventLevel) {
            $res['EventLevel'] = $this->eventLevel;
        }
        if (null !== $this->eventTag) {
            $res['EventTag'] = $this->eventTag;
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
        if (null !== $this->startTs) {
            $res['StartTs'] = $this->startTs;
        }
        if (null !== $this->userStatus) {
            $res['UserStatus'] = $this->userStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeApisecEventsRequest
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
        if (isset($map['ApiTag'])) {
            $model->apiTag = $map['ApiTag'];
        }
        if (isset($map['AttackIp'])) {
            $model->attackIp = $map['AttackIp'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['EndTs'])) {
            $model->endTs = $map['EndTs'];
        }
        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }
        if (isset($map['EventLevel'])) {
            $model->eventLevel = $map['EventLevel'];
        }
        if (isset($map['EventTag'])) {
            $model->eventTag = $map['EventTag'];
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
        if (isset($map['StartTs'])) {
            $model->startTs = $map['StartTs'];
        }
        if (isset($map['UserStatus'])) {
            $model->userStatus = $map['UserStatus'];
        }

        return $model;
    }
}
