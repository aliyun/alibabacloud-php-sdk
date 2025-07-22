<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models\AllocateCostCenterResourceRequest;

use AlibabaCloud\Tea\Model;

class resourceInstanceList extends Model
{
    /**
     * @example qwer1-cn-beijing
     *
     * @var string
     */
    public $apportionCode;

    /**
     * @example split-item-test1
     *
     * @var string
     */
    public $apportionName;

    /**
     * @example oss
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @example RESOURCE_UDR
     *
     * @var string
     */
    public $commodityName;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @example ecs
     *
     * @var string
     */
    public $pipCode;

    /**
     * @example related-resource
     *
     * @var string
     */
    public $relatedResources;

    /**
     * @example xihe_mpp
     *
     * @var string
     */
    public $resourceGroup;

    /**
     * @example cn-hangzhou;standard
     *
     * @var string
     */
    public $resourceId;

    /**
     * @example ecs-test-1
     *
     * @var string
     */
    public $resourceNick;

    /**
     * @example AUTO_ALLOCATE
     *
     * @var string
     */
    public $resourceSource;

    /**
     * @example 0
     *
     * @var string
     */
    public $resourceStatus;

    /**
     * @example tag-test1
     *
     * @var string
     */
    public $resourceTag;

    /**
     * @example SCU
     *
     * @var string
     */
    public $resourceType;

    /**
     * @example 273394581313325532
     *
     * @var int
     */
    public $resourceUserId;

    /**
     * @example test
     *
     * @var string
     */
    public $resourceUserName;
    protected $_name = [
        'apportionCode' => 'ApportionCode',
        'apportionName' => 'ApportionName',
        'commodityCode' => 'CommodityCode',
        'commodityName' => 'CommodityName',
        'instanceId' => 'InstanceId',
        'pipCode' => 'PipCode',
        'relatedResources' => 'RelatedResources',
        'resourceGroup' => 'ResourceGroup',
        'resourceId' => 'ResourceId',
        'resourceNick' => 'ResourceNick',
        'resourceSource' => 'ResourceSource',
        'resourceStatus' => 'ResourceStatus',
        'resourceTag' => 'ResourceTag',
        'resourceType' => 'ResourceType',
        'resourceUserId' => 'ResourceUserId',
        'resourceUserName' => 'ResourceUserName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->apportionCode) {
            $res['ApportionCode'] = $this->apportionCode;
        }
        if (null !== $this->apportionName) {
            $res['ApportionName'] = $this->apportionName;
        }
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->commodityName) {
            $res['CommodityName'] = $this->commodityName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->pipCode) {
            $res['PipCode'] = $this->pipCode;
        }
        if (null !== $this->relatedResources) {
            $res['RelatedResources'] = $this->relatedResources;
        }
        if (null !== $this->resourceGroup) {
            $res['ResourceGroup'] = $this->resourceGroup;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceNick) {
            $res['ResourceNick'] = $this->resourceNick;
        }
        if (null !== $this->resourceSource) {
            $res['ResourceSource'] = $this->resourceSource;
        }
        if (null !== $this->resourceStatus) {
            $res['ResourceStatus'] = $this->resourceStatus;
        }
        if (null !== $this->resourceTag) {
            $res['ResourceTag'] = $this->resourceTag;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->resourceUserId) {
            $res['ResourceUserId'] = $this->resourceUserId;
        }
        if (null !== $this->resourceUserName) {
            $res['ResourceUserName'] = $this->resourceUserName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceInstanceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApportionCode'])) {
            $model->apportionCode = $map['ApportionCode'];
        }
        if (isset($map['ApportionName'])) {
            $model->apportionName = $map['ApportionName'];
        }
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['CommodityName'])) {
            $model->commodityName = $map['CommodityName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PipCode'])) {
            $model->pipCode = $map['PipCode'];
        }
        if (isset($map['RelatedResources'])) {
            $model->relatedResources = $map['RelatedResources'];
        }
        if (isset($map['ResourceGroup'])) {
            $model->resourceGroup = $map['ResourceGroup'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceNick'])) {
            $model->resourceNick = $map['ResourceNick'];
        }
        if (isset($map['ResourceSource'])) {
            $model->resourceSource = $map['ResourceSource'];
        }
        if (isset($map['ResourceStatus'])) {
            $model->resourceStatus = $map['ResourceStatus'];
        }
        if (isset($map['ResourceTag'])) {
            $model->resourceTag = $map['ResourceTag'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['ResourceUserId'])) {
            $model->resourceUserId = $map['ResourceUserId'];
        }
        if (isset($map['ResourceUserName'])) {
            $model->resourceUserName = $map['ResourceUserName'];
        }

        return $model;
    }
}
