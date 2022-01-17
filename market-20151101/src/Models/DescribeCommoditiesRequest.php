<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models;

use AlibabaCloud\Tea\Model;

class DescribeCommoditiesRequest extends Model
{
    /**
     * @var string
     */
    public $commodityAuditStatuses;

    /**
     * @var string
     */
    public $commodityCategoryIds;

    /**
     * @var string
     */
    public $commodityGmtCreatedFrom;

    /**
     * @var string
     */
    public $commodityGmtCreatedTo;

    /**
     * @var string
     */
    public $commodityGmtModifiedFrom;

    /**
     * @var string
     */
    public $commodityGmtModifiedTo;

    /**
     * @var string
     */
    public $commodityGmtPublishFrom;

    /**
     * @var string
     */
    public $commodityGmtPublishTo;

    /**
     * @var string
     */
    public $commodityId;

    /**
     * @var string
     */
    public $commodityIds;

    /**
     * @var string
     */
    public $commodityStatuses;

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
    public $properties;
    protected $_name = [
        'commodityAuditStatuses'   => 'CommodityAuditStatuses',
        'commodityCategoryIds'     => 'CommodityCategoryIds',
        'commodityGmtCreatedFrom'  => 'CommodityGmtCreatedFrom',
        'commodityGmtCreatedTo'    => 'CommodityGmtCreatedTo',
        'commodityGmtModifiedFrom' => 'CommodityGmtModifiedFrom',
        'commodityGmtModifiedTo'   => 'CommodityGmtModifiedTo',
        'commodityGmtPublishFrom'  => 'CommodityGmtPublishFrom',
        'commodityGmtPublishTo'    => 'CommodityGmtPublishTo',
        'commodityId'              => 'CommodityId',
        'commodityIds'             => 'CommodityIds',
        'commodityStatuses'        => 'CommodityStatuses',
        'pageNumber'               => 'PageNumber',
        'pageSize'                 => 'PageSize',
        'properties'               => 'Properties',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commodityAuditStatuses) {
            $res['CommodityAuditStatuses'] = $this->commodityAuditStatuses;
        }
        if (null !== $this->commodityCategoryIds) {
            $res['CommodityCategoryIds'] = $this->commodityCategoryIds;
        }
        if (null !== $this->commodityGmtCreatedFrom) {
            $res['CommodityGmtCreatedFrom'] = $this->commodityGmtCreatedFrom;
        }
        if (null !== $this->commodityGmtCreatedTo) {
            $res['CommodityGmtCreatedTo'] = $this->commodityGmtCreatedTo;
        }
        if (null !== $this->commodityGmtModifiedFrom) {
            $res['CommodityGmtModifiedFrom'] = $this->commodityGmtModifiedFrom;
        }
        if (null !== $this->commodityGmtModifiedTo) {
            $res['CommodityGmtModifiedTo'] = $this->commodityGmtModifiedTo;
        }
        if (null !== $this->commodityGmtPublishFrom) {
            $res['CommodityGmtPublishFrom'] = $this->commodityGmtPublishFrom;
        }
        if (null !== $this->commodityGmtPublishTo) {
            $res['CommodityGmtPublishTo'] = $this->commodityGmtPublishTo;
        }
        if (null !== $this->commodityId) {
            $res['CommodityId'] = $this->commodityId;
        }
        if (null !== $this->commodityIds) {
            $res['CommodityIds'] = $this->commodityIds;
        }
        if (null !== $this->commodityStatuses) {
            $res['CommodityStatuses'] = $this->commodityStatuses;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->properties) {
            $res['Properties'] = $this->properties;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCommoditiesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommodityAuditStatuses'])) {
            $model->commodityAuditStatuses = $map['CommodityAuditStatuses'];
        }
        if (isset($map['CommodityCategoryIds'])) {
            $model->commodityCategoryIds = $map['CommodityCategoryIds'];
        }
        if (isset($map['CommodityGmtCreatedFrom'])) {
            $model->commodityGmtCreatedFrom = $map['CommodityGmtCreatedFrom'];
        }
        if (isset($map['CommodityGmtCreatedTo'])) {
            $model->commodityGmtCreatedTo = $map['CommodityGmtCreatedTo'];
        }
        if (isset($map['CommodityGmtModifiedFrom'])) {
            $model->commodityGmtModifiedFrom = $map['CommodityGmtModifiedFrom'];
        }
        if (isset($map['CommodityGmtModifiedTo'])) {
            $model->commodityGmtModifiedTo = $map['CommodityGmtModifiedTo'];
        }
        if (isset($map['CommodityGmtPublishFrom'])) {
            $model->commodityGmtPublishFrom = $map['CommodityGmtPublishFrom'];
        }
        if (isset($map['CommodityGmtPublishTo'])) {
            $model->commodityGmtPublishTo = $map['CommodityGmtPublishTo'];
        }
        if (isset($map['CommodityId'])) {
            $model->commodityId = $map['CommodityId'];
        }
        if (isset($map['CommodityIds'])) {
            $model->commodityIds = $map['CommodityIds'];
        }
        if (isset($map['CommodityStatuses'])) {
            $model->commodityStatuses = $map['CommodityStatuses'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Properties'])) {
            $model->properties = $map['Properties'];
        }

        return $model;
    }
}
