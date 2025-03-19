<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Tea\Model;

class ListHttpApiOperationsRequest extends Model
{
    /**
     * @description Filter the operation list based on a specific consumer authorization rule ID, and the interface list in the response only contains authorized operations.
     *
     * @example cas-xxx
     *
     * @var string
     */
    public $consumerAuthorizationRuleId;

    /**
     * @description List interfaces by Method.
     *
     * @example GET
     *
     * @var string
     */
    public $method;

    /**
     * @description Search operations by exact name.
     *
     * @example getUserInfo
     *
     * @var string
     */
    public $name;

    /**
     * @description Search operations by name prefix.
     *
     * @example GetUser
     *
     * @var string
     */
    public $nameLike;

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
     * @description Search operations by path prefix.
     *
     * @example /v1
     *
     * @var string
     */
    public $pathLike;

    /**
     * @description Each operation information in the response carries a list of authorization rules for the specified consumer under the specified environment ID. The withConsumerInEnvironmentId field needs to be additionally specified.
     *
     * @example env-xxx
     *
     * @var string
     */
    public $withConsumerInEnvironmentId;

    /**
     * @description Each operation information in the response carries a list of authorization rules for the specified consumer under the specified environment ID. The withConsumerInEnvironmentId field needs to be additionally specified.
     *
     * @example cs-xxx
     *
     * @var string
     */
    public $withConsumerInfoById;

    /**
     * @description Plugin ID, use this plugin ID to retrieve the plugin release information.
     *
     * @example pl-xxx
     *
     * @var string
     */
    public $withPluginAttachmentByPluginId;
    protected $_name = [
        'consumerAuthorizationRuleId' => 'consumerAuthorizationRuleId',
        'method' => 'method',
        'name' => 'name',
        'nameLike' => 'nameLike',
        'pageNumber' => 'pageNumber',
        'pageSize' => 'pageSize',
        'pathLike' => 'pathLike',
        'withConsumerInEnvironmentId' => 'withConsumerInEnvironmentId',
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
        if (null !== $this->method) {
            $res['method'] = $this->method;
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
        if (null !== $this->withConsumerInEnvironmentId) {
            $res['withConsumerInEnvironmentId'] = $this->withConsumerInEnvironmentId;
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
     * @return ListHttpApiOperationsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['consumerAuthorizationRuleId'])) {
            $model->consumerAuthorizationRuleId = $map['consumerAuthorizationRuleId'];
        }
        if (isset($map['method'])) {
            $model->method = $map['method'];
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
        if (isset($map['withConsumerInEnvironmentId'])) {
            $model->withConsumerInEnvironmentId = $map['withConsumerInEnvironmentId'];
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
