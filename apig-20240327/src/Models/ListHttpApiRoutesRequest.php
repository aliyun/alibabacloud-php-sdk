<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class ListHttpApiRoutesRequest extends Model
{
    /**
     * @var string
     */
    public $consumerAuthorizationRuleId;

    /**
     * @var string
     */
    public $deployStatuses;

    /**
     * @var string
     */
    public $domainId;

    /**
     * @var string
     */
    public $environmentId;

    /**
     * @var bool
     */
    public $forDeploy;

    /**
     * @var string
     */
    public $gatewayId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $nameLike;

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
    public $pathLike;

    /**
     * @var bool
     */
    public $withAuthPolicyInfo;

    /**
     * @var string
     */
    public $withConsumerInfoById;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
