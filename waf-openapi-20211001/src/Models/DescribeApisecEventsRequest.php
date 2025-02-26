<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;

class DescribeApisecEventsRequest extends Model
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
    public $apiTag;
    /**
     * @var string
     */
    public $attackIp;
    /**
     * @var string
     */
    public $clusterId;
    /**
     * @var int
     */
    public $endTs;
    /**
     * @var string
     */
    public $eventId;
    /**
     * @var string
     */
    public $eventLevel;
    /**
     * @var string
     */
    public $eventTag;
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
    public $orderKey;
    /**
     * @var string
     */
    public $orderWay;
    /**
     * @var string
     */
    public $origin;
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
    public $resourceManagerResourceGroupId;
    /**
     * @var int
     */
    public $startTs;
    /**
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
