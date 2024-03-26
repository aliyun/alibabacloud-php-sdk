<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResellerTrade\V20191227\Models\QueryActivityResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $activityId;

    /**
     * @var string
     */
    public $activityName;

    /**
     * @var int[]
     */
    public $blackList;

    /**
     * @var string[]
     */
    public $commodityCodeList;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string[]
     */
    public $extMap;

    /**
     * @var string
     */
    public $promotionDescription;

    /**
     * @var float
     */
    public $promotionValue;

    /**
     * @var string[]
     */
    public $regionList;

    /**
     * @var int[]
     */
    public $sellerIdList;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int[]
     */
    public $testAccountList;

    /**
     * @var int[]
     */
    public $whiteList;
    protected $_name = [
        'activityId'           => 'ActivityId',
        'activityName'         => 'ActivityName',
        'blackList'            => 'BlackList',
        'commodityCodeList'    => 'CommodityCodeList',
        'description'          => 'Description',
        'endTime'              => 'EndTime',
        'extMap'               => 'ExtMap',
        'promotionDescription' => 'PromotionDescription',
        'promotionValue'       => 'PromotionValue',
        'regionList'           => 'RegionList',
        'sellerIdList'         => 'SellerIdList',
        'startTime'            => 'StartTime',
        'status'               => 'Status',
        'testAccountList'      => 'TestAccountList',
        'whiteList'            => 'WhiteList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activityId) {
            $res['ActivityId'] = $this->activityId;
        }
        if (null !== $this->activityName) {
            $res['ActivityName'] = $this->activityName;
        }
        if (null !== $this->blackList) {
            $res['BlackList'] = $this->blackList;
        }
        if (null !== $this->commodityCodeList) {
            $res['CommodityCodeList'] = $this->commodityCodeList;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->extMap) {
            $res['ExtMap'] = $this->extMap;
        }
        if (null !== $this->promotionDescription) {
            $res['PromotionDescription'] = $this->promotionDescription;
        }
        if (null !== $this->promotionValue) {
            $res['PromotionValue'] = $this->promotionValue;
        }
        if (null !== $this->regionList) {
            $res['RegionList'] = $this->regionList;
        }
        if (null !== $this->sellerIdList) {
            $res['SellerIdList'] = $this->sellerIdList;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->testAccountList) {
            $res['TestAccountList'] = $this->testAccountList;
        }
        if (null !== $this->whiteList) {
            $res['WhiteList'] = $this->whiteList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActivityId'])) {
            $model->activityId = $map['ActivityId'];
        }
        if (isset($map['ActivityName'])) {
            $model->activityName = $map['ActivityName'];
        }
        if (isset($map['BlackList'])) {
            if (!empty($map['BlackList'])) {
                $model->blackList = $map['BlackList'];
            }
        }
        if (isset($map['CommodityCodeList'])) {
            if (!empty($map['CommodityCodeList'])) {
                $model->commodityCodeList = $map['CommodityCodeList'];
            }
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ExtMap'])) {
            $model->extMap = $map['ExtMap'];
        }
        if (isset($map['PromotionDescription'])) {
            $model->promotionDescription = $map['PromotionDescription'];
        }
        if (isset($map['PromotionValue'])) {
            $model->promotionValue = $map['PromotionValue'];
        }
        if (isset($map['RegionList'])) {
            if (!empty($map['RegionList'])) {
                $model->regionList = $map['RegionList'];
            }
        }
        if (isset($map['SellerIdList'])) {
            if (!empty($map['SellerIdList'])) {
                $model->sellerIdList = $map['SellerIdList'];
            }
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TestAccountList'])) {
            if (!empty($map['TestAccountList'])) {
                $model->testAccountList = $map['TestAccountList'];
            }
        }
        if (isset($map['WhiteList'])) {
            if (!empty($map['WhiteList'])) {
                $model->whiteList = $map['WhiteList'];
            }
        }

        return $model;
    }
}
