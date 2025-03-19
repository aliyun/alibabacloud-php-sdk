<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Tea\Model;

class ListHttpApisRequest extends Model
{
    /**
     * @description Cloud-native API Gateway ID.
     *
     * @example gw-cq2avtllh****
     *
     * @var string
     */
    public $gatewayId;

    /**
     * @description Search keyword, supports fuzzy search by API name or exact search by API ID.
     *
     * @example test-
     *
     * @var string
     */
    public $keyword;

    /**
     * @description Exact search by name.
     *
     * @example login
     *
     * @var string
     */
    public $name;

    /**
     * @description Page number, starting from 1, default is 1 if not specified.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description Page size, valid range [1, 100], default is 10 if not specified.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description Resource group ID.
     *
     * @example rg-ahr5uil8raz0rq3b
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description Type of HTTP API. Multiple types can be passed, separated by ",".
     * - Http
     * - Rest
     * - WebSocket
     * - HttpIngress
     *
     * @example Http,Rest
     *
     * @var string
     */
    public $types;

    /**
     * @description Each API information in the response carries consumer authentication policy information for the specified environment ID.
     *
     * @example env-xxx
     *
     * @var string
     */
    public $withAuthPolicyInEnvironmentId;

    /**
     * @description Whether the authentication policy is enabled.
     *
     * @example true
     *
     * @var bool
     */
    public $withAuthPolicyList;

    /**
     * @description Each API information in the response carries a list of authorization rules for the specified consumer ID.
     *
     * @example cs-xxx
     *
     * @var string
     */
    public $withConsumerInfoById;

    /**
     * @description Environment information
     *
     * @example true
     *
     * @var bool
     */
    public $withEnvironmentInfo;

    /**
     * @description Environment ID
     *
     * @example env-ctovu5mm1hksb4q8ln40
     *
     * @var string
     */
    public $withEnvironmentInfoById;

    /**
     * @description Ingress information
     *
     * @example false
     *
     * @var bool
     */
    public $withIngressInfo;

    /**
     * @description Plugin ID, used to get plugin release information based on this ID.
     *
     * @example pl-ct9qn3um1hktue8dqol0
     *
     * @var string
     */
    public $withPluginAttachmentByPluginId;
    protected $_name = [
        'gatewayId' => 'gatewayId',
        'keyword' => 'keyword',
        'name' => 'name',
        'pageNumber' => 'pageNumber',
        'pageSize' => 'pageSize',
        'resourceGroupId' => 'resourceGroupId',
        'types' => 'types',
        'withAuthPolicyInEnvironmentId' => 'withAuthPolicyInEnvironmentId',
        'withAuthPolicyList' => 'withAuthPolicyList',
        'withConsumerInfoById' => 'withConsumerInfoById',
        'withEnvironmentInfo' => 'withEnvironmentInfo',
        'withEnvironmentInfoById' => 'withEnvironmentInfoById',
        'withIngressInfo' => 'withIngressInfo',
        'withPluginAttachmentByPluginId' => 'withPluginAttachmentByPluginId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->gatewayId) {
            $res['gatewayId'] = $this->gatewayId;
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

        return $model;
    }
}
