<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Tea\Model;

class QueryConsumerAuthorizationRulesRequest extends Model
{
    /**
     * @description The API name.
     *
     * @example api-xx
     *
     * @var string
     */
    public $apiNameLike;

    /**
     * @description The consumer ID.
     *
     * @example cs-ct21c16m1hkp64hk6qmg
     *
     * @var string
     */
    public $consumerId;

    /**
     * @description The consumer name.
     *
     * @example consumer-xxx
     *
     * @var string
     */
    public $consumerNameLike;

    /**
     * @description The environment ID.
     *
     * @example env-cpqnr6tlhtgubc***
     *
     * @var string
     */
    public $environmentId;

    /**
     * @description Specifies whether to group the results by API.
     *
     * @example true
     *
     * @var bool
     */
    public $groupByApi;

    /**
     * @description The number of the page to return.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The parent resource ID.
     *
     * @example ha-cn-li942gy8p01
     *
     * @var string
     */
    public $parentResourceId;

    /**
     * @description The resource ID.
     *
     * @example ha-cn-li942gy8p03
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The resource type.
     *
     * @example HttpApiRoute
     *
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'apiNameLike' => 'apiNameLike',
        'consumerId' => 'consumerId',
        'consumerNameLike' => 'consumerNameLike',
        'environmentId' => 'environmentId',
        'groupByApi' => 'groupByApi',
        'pageNumber' => 'pageNumber',
        'pageSize' => 'pageSize',
        'parentResourceId' => 'parentResourceId',
        'resourceId' => 'resourceId',
        'resourceType' => 'resourceType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiNameLike) {
            $res['apiNameLike'] = $this->apiNameLike;
        }
        if (null !== $this->consumerId) {
            $res['consumerId'] = $this->consumerId;
        }
        if (null !== $this->consumerNameLike) {
            $res['consumerNameLike'] = $this->consumerNameLike;
        }
        if (null !== $this->environmentId) {
            $res['environmentId'] = $this->environmentId;
        }
        if (null !== $this->groupByApi) {
            $res['groupByApi'] = $this->groupByApi;
        }
        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->parentResourceId) {
            $res['parentResourceId'] = $this->parentResourceId;
        }
        if (null !== $this->resourceId) {
            $res['resourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryConsumerAuthorizationRulesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['apiNameLike'])) {
            $model->apiNameLike = $map['apiNameLike'];
        }
        if (isset($map['consumerId'])) {
            $model->consumerId = $map['consumerId'];
        }
        if (isset($map['consumerNameLike'])) {
            $model->consumerNameLike = $map['consumerNameLike'];
        }
        if (isset($map['environmentId'])) {
            $model->environmentId = $map['environmentId'];
        }
        if (isset($map['groupByApi'])) {
            $model->groupByApi = $map['groupByApi'];
        }
        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['parentResourceId'])) {
            $model->parentResourceId = $map['parentResourceId'];
        }
        if (isset($map['resourceId'])) {
            $model->resourceId = $map['resourceId'];
        }
        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }

        return $model;
    }
}
