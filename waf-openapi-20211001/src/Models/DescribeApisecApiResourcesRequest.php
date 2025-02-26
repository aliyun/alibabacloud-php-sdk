<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;

class DescribeApisecApiResourcesRequest extends Model
{
    /**
     * @var string
     */
    public $apiFormat;
    /**
     * @var string
     */
    public $apiId;
    /**
     * @var string
     */
    public $apiMethod;
    /**
     * @var string
     */
    public $apiStatus;
    /**
     * @var string
     */
    public $apiTag;
    /**
     * @var string
     */
    public $apiType;
    /**
     * @var string
     */
    public $authFlag;
    /**
     * @var string
     */
    public $clusterId;
    /**
     * @var string
     */
    public $endTime;
    /**
     * @var int
     */
    public $follow;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $matchedHost;
    /**
     * @var string
     */
    public $note;
    /**
     * @var string
     */
    public $orderKey;
    /**
     * @var string
     */
    public $orderWay;
    /**
     * @var int
     */
    public $pageNumber;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $requestSensitiveType;
    /**
     * @var string
     */
    public $resourceManagerResourceGroupId;
    /**
     * @var string
     */
    public $sensitiveLevel;
    /**
     * @var string
     */
    public $sensitiveType;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
