<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryCostUnitResourceResponseBody\data;

use AlibabaCloud\Tea\Model;

class resourceInstanceDtoList extends Model
{
    /**
     * @description The split code of the resource.
     *
     * @example test
     *
     * @var string
     */
    public $apportionCode;

    /**
     * @description The split name of the resource.
     *
     * @example test
     *
     * @var string
     */
    public $apportionName;

    /**
     * @description The product code of the resource.
     *
     * @example rds
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @description The commodity name of the resource.
     *
     * @example ApsaraDB
     *
     * @var string
     */
    public $commodityName;

    /**
     * @var string
     */
    public $pipCode;

    /**
     * @description The resources related to the resource instance.
     *
     * @example oss
     *
     * @var string
     */
    public $relatedResources;

    /**
     * @description The resource group to which the resource belongs.
     *
     * @example Default Resource Group
     *
     * @var string
     */
    public $resourceGroup;

    /**
     * @description The instance ID of the resource.
     *
     * @example OSSBAG-cn-v0h1s4hma018
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The custom name of the resource.
     *
     * @example testResource
     *
     * @var string
     */
    public $resourceNick;

    /**
     * @var string
     */
    public $resourceSource;

    /**
     * @description The status of the resource.
     *
     * @example Available
     *
     * @var string
     */
    public $resourceStatus;

    /**
     * @description The tags of the resource.
     *
     * @example testResource
     *
     * @var string
     */
    public $resourceTag;

    /**
     * @description The type of the resource.
     *
     * @example FPT_ossbag_absolute_Storage_bj
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The user ID of the resource owner.
     *
     * @example 2424242134
     *
     * @var int
     */
    public $resourceUserId;

    /**
     * @description The username of the resource owner.
     *
     * @example test@test.aliyun.com
     *
     * @var string
     */
    public $resourceUserName;
    protected $_name = [
        'apportionCode'    => 'ApportionCode',
        'apportionName'    => 'ApportionName',
        'commodityCode'    => 'CommodityCode',
        'commodityName'    => 'CommodityName',
        'pipCode'          => 'PipCode',
        'relatedResources' => 'RelatedResources',
        'resourceGroup'    => 'ResourceGroup',
        'resourceId'       => 'ResourceId',
        'resourceNick'     => 'ResourceNick',
        'resourceSource'   => 'ResourceSource',
        'resourceStatus'   => 'ResourceStatus',
        'resourceTag'      => 'ResourceTag',
        'resourceType'     => 'ResourceType',
        'resourceUserId'   => 'ResourceUserId',
        'resourceUserName' => 'ResourceUserName',
    ];

    public function validate()
    {
    }

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
     * @return resourceInstanceDtoList
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
