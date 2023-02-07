<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryCostUnitResourceResponseBody\data;

use AlibabaCloud\Tea\Model;

class resourceInstanceDtoList extends Model
{
    /**
     * @example test
     *
     * @var string
     */
    public $apportionCode;

    /**
     * @example test
     *
     * @var string
     */
    public $apportionName;

    /**
     * @example rds
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @var string
     */
    public $commodityName;

    /**
     * @example oss
     *
     * @var string
     */
    public $relatedResources;

    /**
     * @var string
     */
    public $resourceGroup;

    /**
     * @example OSSBAG-cn-v0h1s4hma018
     *
     * @var string
     */
    public $resourceId;

    /**
     * @example testResource
     *
     * @var string
     */
    public $resourceNick;

    /**
     * @example Available
     *
     * @var string
     */
    public $resourceStatus;

    /**
     * @example testResource
     *
     * @var string
     */
    public $resourceTag;

    /**
     * @example FPT_ossbag_absolute_Storage_bj
     *
     * @var string
     */
    public $resourceType;

    /**
     * @example 2424242134
     *
     * @var int
     */
    public $resourceUserId;

    /**
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
        'relatedResources' => 'RelatedResources',
        'resourceGroup'    => 'ResourceGroup',
        'resourceId'       => 'ResourceId',
        'resourceNick'     => 'ResourceNick',
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
