<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class QueryConsumerAuthorizationRulesRequest extends Model
{
    /**
     * @var string
     */
    public $apiNameLike;

    /**
     * @var string
     */
    public $consumerId;

    /**
     * @var string
     */
    public $consumerNameLike;

    /**
     * @var string
     */
    public $environmentId;

    /**
     * @var bool
     */
    public $groupByApi;

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
    public $parentResourceId;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $resourceTypes;
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
        'resourceTypes' => 'resourceTypes',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->resourceTypes) {
            $res['resourceTypes'] = $this->resourceTypes;
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

        if (isset($map['resourceTypes'])) {
            $model->resourceTypes = $map['resourceTypes'];
        }

        return $model;
    }
}
