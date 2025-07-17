<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Tea\Model;

class ListHttpApiRoutesRequest extends Model
{
    /**
     * @description The string that is used to filter routes based on consumer authentication rules. Only authorized APIs are returned.
     *
     * @example cas-xxx
     *
     * @var string
     */
    public $consumerAuthorizationRuleId;

    /**
     * @description The deployment state of the route.
     *
     * Enumerated values:
     *
     *   Deploying: The route is being deployed.
     *   DeployedWithChanges: The route is deployed and modified.
     *   Undeploying: The route is being undeployed.
     *   NotDeployed: The route is not deployed.
     *   Deployed: The route is deployed.
     *   UndeployFailed: The route failed to be undeployed.
     *   DeployFailed: The route failed to be deployed.
     *
     * @example NotDeployed
     *
     * @var string
     */
    public $deployStatuses;

    /**
     * @description Specifies to filter routes by domain ID.
     *
     * @example d-xxx
     *
     * @var string
     */
    public $domainId;

    /**
     * @description The environment ID.
     *
     * @example env-cpqnr6tlhtgubc***
     *
     * @var string
     */
    public $environmentId;

    /**
     * @var bool
     */
    public $forDeploy;

    /**
     * @description The ID of the Cloud-native API Gateway instance.
     *
     * @example gw-cpv4sqdl****
     *
     * @var string
     */
    public $gatewayId;

    /**
     * @description The route name.
     *
     * @example itemcenter-gateway
     *
     * @var string
     */
    public $name;

    /**
     * @description The route name keyword for a fuzzy search.
     *
     * @example item
     *
     * @var string
     */
    public $nameLike;

    /**
     * @description The page number of the page to return. Pages start from page 1. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Valid values: 1 to 100. Default value: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The route path keyword for a fuzzy search.
     *
     * @example /v1
     *
     * @var string
     */
    public $pathLike;

    /**
     * @description The consumer authorization information in the response.
     *
     * @example true
     *
     * @var bool
     */
    public $withAuthPolicyInfo;

    /**
     * @description The authentication rules of the specified consumer in each route returned.
     *
     * @example cs-xxx
     *
     * @var string
     */
    public $withConsumerInfoById;

    /**
     * @description The mounting information of the specified plug-in in each route returned.
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
        'forDeploy' => 'forDeploy',
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
        if (null !== $this->forDeploy) {
            $res['forDeploy'] = $this->forDeploy;
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
        if (isset($map['forDeploy'])) {
            $model->forDeploy = $map['forDeploy'];
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
