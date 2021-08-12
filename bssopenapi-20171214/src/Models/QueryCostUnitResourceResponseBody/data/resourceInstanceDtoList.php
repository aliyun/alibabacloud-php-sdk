<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryCostUnitResourceResponseBody\data;

use AlibabaCloud\Tea\Model;

class resourceInstanceDtoList extends Model
{
    /**
     * @var string
     */
    public $commodityCode;

    /**
     * @var string
     */
    public $resourceUserName;

    /**
     * @var string
     */
    public $commodityName;

    /**
     * @var int
     */
    public $resourceUserId;

    /**
     * @var string
     */
    public $apportionName;

    /**
     * @var string
     */
    public $apportionCode;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $resourceNick;

    /**
     * @var string
     */
    public $resourceTag;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $resourceGroup;

    /**
     * @var string
     */
    public $relatedResources;

    /**
     * @var string
     */
    public $resourceStatus;
    protected $_name = [
        'commodityCode'    => 'CommodityCode',
        'resourceUserName' => 'ResourceUserName',
        'commodityName'    => 'CommodityName',
        'resourceUserId'   => 'ResourceUserId',
        'apportionName'    => 'ApportionName',
        'apportionCode'    => 'ApportionCode',
        'resourceType'     => 'ResourceType',
        'resourceNick'     => 'ResourceNick',
        'resourceTag'      => 'ResourceTag',
        'resourceId'       => 'ResourceId',
        'resourceGroup'    => 'ResourceGroup',
        'relatedResources' => 'RelatedResources',
        'resourceStatus'   => 'ResourceStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->resourceUserName) {
            $res['ResourceUserName'] = $this->resourceUserName;
        }
        if (null !== $this->commodityName) {
            $res['CommodityName'] = $this->commodityName;
        }
        if (null !== $this->resourceUserId) {
            $res['ResourceUserId'] = $this->resourceUserId;
        }
        if (null !== $this->apportionName) {
            $res['ApportionName'] = $this->apportionName;
        }
        if (null !== $this->apportionCode) {
            $res['ApportionCode'] = $this->apportionCode;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->resourceNick) {
            $res['ResourceNick'] = $this->resourceNick;
        }
        if (null !== $this->resourceTag) {
            $res['ResourceTag'] = $this->resourceTag;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceGroup) {
            $res['ResourceGroup'] = $this->resourceGroup;
        }
        if (null !== $this->relatedResources) {
            $res['RelatedResources'] = $this->relatedResources;
        }
        if (null !== $this->resourceStatus) {
            $res['ResourceStatus'] = $this->resourceStatus;
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
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['ResourceUserName'])) {
            $model->resourceUserName = $map['ResourceUserName'];
        }
        if (isset($map['CommodityName'])) {
            $model->commodityName = $map['CommodityName'];
        }
        if (isset($map['ResourceUserId'])) {
            $model->resourceUserId = $map['ResourceUserId'];
        }
        if (isset($map['ApportionName'])) {
            $model->apportionName = $map['ApportionName'];
        }
        if (isset($map['ApportionCode'])) {
            $model->apportionCode = $map['ApportionCode'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['ResourceNick'])) {
            $model->resourceNick = $map['ResourceNick'];
        }
        if (isset($map['ResourceTag'])) {
            $model->resourceTag = $map['ResourceTag'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceGroup'])) {
            $model->resourceGroup = $map['ResourceGroup'];
        }
        if (isset($map['RelatedResources'])) {
            $model->relatedResources = $map['RelatedResources'];
        }
        if (isset($map['ResourceStatus'])) {
            $model->resourceStatus = $map['ResourceStatus'];
        }

        return $model;
    }
}
