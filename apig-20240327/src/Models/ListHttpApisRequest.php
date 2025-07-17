<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Tea\Model;

class ListHttpApisRequest extends Model
{
    /**
     * @description The ID of the Cloud-native API Gateway instance.
     *
     * @example gw-cq2avtllh****
     *
     * @var string
     */
    public $gatewayId;

    /**
     * @var string
     */
    public $gatewayType;

    /**
     * @description The search keyword. You can fuzzy-search by API name or exact-search by API ID.
     *
     * @example test-
     *
     * @var string
     */
    public $keyword;

    /**
     * @description The API name that is used for the search. In this case, exact search is performed.
     *
     * @example login
     *
     * @var string
     */
    public $name;

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
     * @description The resource group ID.
     *
     * @example rg-ahr5uil8raz0rq3b
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The API type. You can specify multiple types and separate them with a comma (,).
     *
     *   Http
     *   Rest
     *   WebSocket
     *   HttpIngress
     *
     * @example Http,Rest
     *
     * @var string
     */
    public $types;

    /**
     * @var bool
     */
    public $withAPIsPublishedToEnvironment;

    /**
     * @description The consumer authentication policy in the specified environment in each returned API.
     *
     * @example env-xxx
     *
     * @var string
     */
    public $withAuthPolicyInEnvironmentId;

    /**
     * @description Specifies whether authentication is enabled.
     *
     * @example true
     *
     * @var bool
     */
    public $withAuthPolicyList;

    /**
     * @description The authorization rules of the specified consumer in each returned API.
     *
     * @example cs-xxx
     *
     * @var string
     */
    public $withConsumerInfoById;

    /**
     * @description The environment information.
     *
     * @example true
     *
     * @var bool
     */
    public $withEnvironmentInfo;

    /**
     * @description The environment ID.
     *
     * @example env-ctovu5mm1hksb4q8ln40
     *
     * @var string
     */
    public $withEnvironmentInfoById;

    /**
     * @description The Ingress information.
     *
     * @example false
     *
     * @var bool
     */
    public $withIngressInfo;

    /**
     * @description The plug-in ID. You can use the returned value of this parameter to query the plug-in.
     *
     * @example pl-ct9qn3um1hktue8dqol0
     *
     * @var string
     */
    public $withPluginAttachmentByPluginId;

    /**
     * @var bool
     */
    public $withPolicyConfigs;
    protected $_name = [
        'gatewayId' => 'gatewayId',
        'gatewayType' => 'gatewayType',
        'keyword' => 'keyword',
        'name' => 'name',
        'pageNumber' => 'pageNumber',
        'pageSize' => 'pageSize',
        'resourceGroupId' => 'resourceGroupId',
        'types' => 'types',
        'withAPIsPublishedToEnvironment' => 'withAPIsPublishedToEnvironment',
        'withAuthPolicyInEnvironmentId' => 'withAuthPolicyInEnvironmentId',
        'withAuthPolicyList' => 'withAuthPolicyList',
        'withConsumerInfoById' => 'withConsumerInfoById',
        'withEnvironmentInfo' => 'withEnvironmentInfo',
        'withEnvironmentInfoById' => 'withEnvironmentInfoById',
        'withIngressInfo' => 'withIngressInfo',
        'withPluginAttachmentByPluginId' => 'withPluginAttachmentByPluginId',
        'withPolicyConfigs' => 'withPolicyConfigs',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->gatewayId) {
            $res['gatewayId'] = $this->gatewayId;
        }
        if (null !== $this->gatewayType) {
            $res['gatewayType'] = $this->gatewayType;
        }
        if (null !== $this->keyword) {
            $res['keyword'] = $this->keyword;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->resourceGroupId) {
            $res['resourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->types) {
            $res['types'] = $this->types;
        }
        if (null !== $this->withAPIsPublishedToEnvironment) {
            $res['withAPIsPublishedToEnvironment'] = $this->withAPIsPublishedToEnvironment;
        }
        if (null !== $this->withAuthPolicyInEnvironmentId) {
            $res['withAuthPolicyInEnvironmentId'] = $this->withAuthPolicyInEnvironmentId;
        }
        if (null !== $this->withAuthPolicyList) {
            $res['withAuthPolicyList'] = $this->withAuthPolicyList;
        }
        if (null !== $this->withConsumerInfoById) {
            $res['withConsumerInfoById'] = $this->withConsumerInfoById;
        }
        if (null !== $this->withEnvironmentInfo) {
            $res['withEnvironmentInfo'] = $this->withEnvironmentInfo;
        }
        if (null !== $this->withEnvironmentInfoById) {
            $res['withEnvironmentInfoById'] = $this->withEnvironmentInfoById;
        }
        if (null !== $this->withIngressInfo) {
            $res['withIngressInfo'] = $this->withIngressInfo;
        }
        if (null !== $this->withPluginAttachmentByPluginId) {
            $res['withPluginAttachmentByPluginId'] = $this->withPluginAttachmentByPluginId;
        }
        if (null !== $this->withPolicyConfigs) {
            $res['withPolicyConfigs'] = $this->withPolicyConfigs;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListHttpApisRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['gatewayId'])) {
            $model->gatewayId = $map['gatewayId'];
        }
        if (isset($map['gatewayType'])) {
            $model->gatewayType = $map['gatewayType'];
        }
        if (isset($map['keyword'])) {
            $model->keyword = $map['keyword'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['resourceGroupId'])) {
            $model->resourceGroupId = $map['resourceGroupId'];
        }
        if (isset($map['types'])) {
            $model->types = $map['types'];
        }
        if (isset($map['withAPIsPublishedToEnvironment'])) {
            $model->withAPIsPublishedToEnvironment = $map['withAPIsPublishedToEnvironment'];
        }
        if (isset($map['withAuthPolicyInEnvironmentId'])) {
            $model->withAuthPolicyInEnvironmentId = $map['withAuthPolicyInEnvironmentId'];
        }
        if (isset($map['withAuthPolicyList'])) {
            $model->withAuthPolicyList = $map['withAuthPolicyList'];
        }
        if (isset($map['withConsumerInfoById'])) {
            $model->withConsumerInfoById = $map['withConsumerInfoById'];
        }
        if (isset($map['withEnvironmentInfo'])) {
            $model->withEnvironmentInfo = $map['withEnvironmentInfo'];
        }
        if (isset($map['withEnvironmentInfoById'])) {
            $model->withEnvironmentInfoById = $map['withEnvironmentInfoById'];
        }
        if (isset($map['withIngressInfo'])) {
            $model->withIngressInfo = $map['withIngressInfo'];
        }
        if (isset($map['withPluginAttachmentByPluginId'])) {
            $model->withPluginAttachmentByPluginId = $map['withPluginAttachmentByPluginId'];
        }
        if (isset($map['withPolicyConfigs'])) {
            $model->withPolicyConfigs = $map['withPolicyConfigs'];
        }

        return $model;
    }
}
