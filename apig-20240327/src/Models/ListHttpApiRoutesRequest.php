<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Tea\Model;

class ListHttpApiRoutesRequest extends Model
{
    /**
     * @description Filter the interface list based on a specific consumer authorization rule ID. The interface list in the response will only include authorized interfaces.
     *
     * @example cas-xxx
     *
     * @var string
     */
    public $consumerAuthorizationRuleId;

    /**
     * @description Deployment status of the route.
     *
     * @example NotDeployed
     *
     * @var string
     */
    public $deployStatuses;

    /**
     * @description Filter route information by domain ID.
     *
     * @example d-xxx
     *
     * @var string
     */
    public $domainId;

    /**
     * @description Environment ID.
     *
     * @example env-cpqnr6tlhtgubc***
     *
     * @var string
     */
    public $environmentId;

    /**
     * @description Cloud-native API Gateway ID.
     *
     * @example gw-cpv4sqdl****
     *
     * @var string
     */
    public $gatewayId;

    /**
     * @description Route name.
     *
     * @example itemcenter-gateway
     *
     * @var string
     */
    public $name;

    /**
     * @description Fuzzy search by route name.
     *
     * @example item
     *
     * @var string
     */
    public $nameLike;

    /**
     * @description Page number, starting from 1. Default is 1 if not specified.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description Page size, valid range [1, 100]. Default is 10 if not specified.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description Fuzzy search by route path.
     *
     * @example /v1
     *
     * @var string
     */
    public $pathLike;

    /**
     * @description The response includes consumer authorization information.
     *
     * @example true
     *
     * @var bool
     */
    public $withAuthPolicyInfo;

    /**
     * @description Each route information in the response carries the list of authorization rules for the specified consumer ID.
     *
     * @example cs-xxx
     *
     * @var string
     */
    public $withConsumerInfoById;

    /**
     * @description Each route information in the response carries the attachment information for the specified plugin ID.
     *
     * @example pl-xxx
     *
     * @var string
     */
    public $withPluginAttachmentByPluginId;
    protected $_name = [
        'consumerAuthorizationRuleId' => 'consumerAuthorizationRuleId',
        'deployStatuses' => 'deployStatuses',
        'domainId' => 'domainId',
        'environmentId' => 'environmentId',
        'gatewayId' => 'gatewayId',
        'name' => 'name',
        'nameLike' => 'nameLike',
        'pageNumber' => 'pageNumber',
        'pageSize' => 'pageSize',
        'pathLike' => 'pathLike',
        'withAuthPolicyInfo' => 'withAuthPolicyInfo',
        'withConsumerInfoById' => 'withConsumerInfoById',
        'withPluginAttachmentByPluginId' => 'withPluginAttachmentByPluginId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->consumerAuthorizationRuleId) {
            $res['consumerAuthorizationRuleId'] = $this->consumerAuthorizationRuleId;
        }
        if (null !== $this->deployStatuses) {
            $res['deployStatuses'] = $this->deployStatuses;
        }
        if (null !== $this->domainId) {
            $res['domainId'] = $this->domainId;
        }
        if (null !== $this->environmentId) {
            $res['environmentId'] = $this->environmentId;
        }
        if (null !== $this->gatewayId) {
            $res['gatewayId'] = $this->gatewayId;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->nameLike) {
            $res['nameLike'] = $this->nameLike;
        }
        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->pathLike) {
            $res['pathLike'] = $this->pathLike;
        }
        if (null !== $this->withAuthPolicyInfo) {
            $res['withAuthPolicyInfo'] = $this->withAuthPolicyInfo;
        }
        if (null !== $this->withConsumerInfoById) {
            $res['withConsumerInfoById'] = $this->withConsumerInfoById;
        }
        if (null !== $this->withPluginAttachmentByPluginId) {
            $res['withPluginAttachmentByPluginId'] = $this->withPluginAttachmentByPluginId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListHttpApiRoutesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['consumerAuthorizationRuleId'])) {
            $model->consumerAuthorizationRuleId = $map['consumerAuthorizationRuleId'];
        }
        if (isset($map['deployStatuses'])) {
            $model->deployStatuses = $map['deployStatuses'];
        }
        if (isset($map['domainId'])) {
            $model->domainId = $map['domainId'];
        }
        if (isset($map['environmentId'])) {
            $model->environmentId = $map['environmentId'];
        }
        if (isset($map['gatewayId'])) {
            $model->gatewayId = $map['gatewayId'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['nameLike'])) {
            $model->nameLike = $map['nameLike'];
        }
        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['pathLike'])) {
            $model->pathLike = $map['pathLike'];
        }
        if (isset($map['withAuthPolicyInfo'])) {
            $model->withAuthPolicyInfo = $map['withAuthPolicyInfo'];
        }
        if (isset($map['withConsumerInfoById'])) {
            $model->withConsumerInfoById = $map['withConsumerInfoById'];
        }
        if (isset($map['withPluginAttachmentByPluginId'])) {
            $model->withPluginAttachmentByPluginId = $map['withPluginAttachmentByPluginId'];
        }

        return $model;
    }
}
