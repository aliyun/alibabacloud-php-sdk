<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryCostUnitResourceResponse\data;

use AlibabaCloud\Tea\Model;

class resourceInstanceDtoList extends Model
{
    /**
     * @var int
     */
    public $resourceUserId;

    /**
     * @var string
     */
    public $resourceId;

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
     * @var string
     */
    public $resourceGroup;

    /**
     * @var string
     */
    public $resourceTag;

    /**
     * @var string
     */
    public $resourceNick;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $resourceStatus;

    /**
     * @var string
     */
    public $relatedResources;

    /**
     * @var string
     */
    public $apportionCode;

    /**
     * @var string
     */
    public $apportionName;
    protected $_name = [
        'resourceUserId'   => 'ResourceUserId',
        'resourceId'       => 'ResourceId',
        'commodityCode'    => 'CommodityCode',
        'resourceUserName' => 'ResourceUserName',
        'commodityName'    => 'CommodityName',
        'resourceGroup'    => 'ResourceGroup',
        'resourceTag'      => 'ResourceTag',
        'resourceNick'     => 'ResourceNick',
        'resourceType'     => 'ResourceType',
        'resourceStatus'   => 'ResourceStatus',
        'relatedResources' => 'RelatedResources',
        'apportionCode'    => 'ApportionCode',
        'apportionName'    => 'ApportionName',
    ];

    public function validate()
    {
        Model::validateRequired('resourceUserId', $this->resourceUserId, true);
        Model::validateRequired('resourceId', $this->resourceId, true);
        Model::validateRequired('commodityCode', $this->commodityCode, true);
        Model::validateRequired('resourceUserName', $this->resourceUserName, true);
        Model::validateRequired('commodityName', $this->commodityName, true);
        Model::validateRequired('resourceGroup', $this->resourceGroup, true);
        Model::validateRequired('resourceTag', $this->resourceTag, true);
        Model::validateRequired('resourceNick', $this->resourceNick, true);
        Model::validateRequired('resourceType', $this->resourceType, true);
        Model::validateRequired('resourceStatus', $this->resourceStatus, true);
        Model::validateRequired('relatedResources', $this->relatedResources, true);
        Model::validateRequired('apportionCode', $this->apportionCode, true);
        Model::validateRequired('apportionName', $this->apportionName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceUserId) {
            $res['ResourceUserId'] = $this->resourceUserId;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->resourceUserName) {
            $res['ResourceUserName'] = $this->resourceUserName;
        }
        if (null !== $this->commodityName) {
            $res['CommodityName'] = $this->commodityName;
        }
        if (null !== $this->resourceGroup) {
            $res['ResourceGroup'] = $this->resourceGroup;
        }
        if (null !== $this->resourceTag) {
            $res['ResourceTag'] = $this->resourceTag;
        }
        if (null !== $this->resourceNick) {
            $res['ResourceNick'] = $this->resourceNick;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->resourceStatus) {
            $res['ResourceStatus'] = $this->resourceStatus;
        }
        if (null !== $this->relatedResources) {
            $res['RelatedResources'] = $this->relatedResources;
        }
        if (null !== $this->apportionCode) {
            $res['ApportionCode'] = $this->apportionCode;
        }
        if (null !== $this->apportionName) {
            $res['ApportionName'] = $this->apportionName;
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
        if (isset($map['ResourceUserId'])) {
            $model->resourceUserId = $map['ResourceUserId'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['ResourceUserName'])) {
            $model->resourceUserName = $map['ResourceUserName'];
        }
        if (isset($map['CommodityName'])) {
            $model->commodityName = $map['CommodityName'];
        }
        if (isset($map['ResourceGroup'])) {
            $model->resourceGroup = $map['ResourceGroup'];
        }
        if (isset($map['ResourceTag'])) {
            $model->resourceTag = $map['ResourceTag'];
        }
        if (isset($map['ResourceNick'])) {
            $model->resourceNick = $map['ResourceNick'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['ResourceStatus'])) {
            $model->resourceStatus = $map['ResourceStatus'];
        }
        if (isset($map['RelatedResources'])) {
            $model->relatedResources = $map['RelatedResources'];
        }
        if (isset($map['ApportionCode'])) {
            $model->apportionCode = $map['ApportionCode'];
        }
        if (isset($map['ApportionName'])) {
            $model->apportionName = $map['ApportionName'];
        }

        return $model;
    }
}
