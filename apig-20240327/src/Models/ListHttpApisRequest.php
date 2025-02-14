<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class ListHttpApisRequest extends Model
{
    /**
     * @var string
     */
    public $gatewayId;
    /**
     * @var string
     */
    public $keyword;
    /**
     * @var string
     */
    public $name;
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
    public $resourceGroupId;
    /**
     * @var string
     */
    public $types;
    /**
     * @var string
     */
    public $withAuthPolicyInEnvironmentId;
    /**
     * @var bool
     */
    public $withAuthPolicyList;
    /**
     * @var string
     */
    public $withConsumerInfoById;
    /**
     * @var bool
     */
    public $withEnvironmentInfo;
    /**
     * @var string
     */
    public $withEnvironmentInfoById;
    /**
     * @var bool
     */
    public $withIngressInfo;
    /**
     * @var string
     */
    public $withPluginAttachmentByPluginId;
    protected $_name = [
        'gatewayId'                      => 'gatewayId',
        'keyword'                        => 'keyword',
        'name'                           => 'name',
        'pageNumber'                     => 'pageNumber',
        'pageSize'                       => 'pageSize',
        'resourceGroupId'                => 'resourceGroupId',
        'types'                          => 'types',
        'withAuthPolicyInEnvironmentId'  => 'withAuthPolicyInEnvironmentId',
        'withAuthPolicyList'             => 'withAuthPolicyList',
        'withConsumerInfoById'           => 'withConsumerInfoById',
        'withEnvironmentInfo'            => 'withEnvironmentInfo',
        'withEnvironmentInfoById'        => 'withEnvironmentInfoById',
        'withIngressInfo'                => 'withIngressInfo',
        'withPluginAttachmentByPluginId' => 'withPluginAttachmentByPluginId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
