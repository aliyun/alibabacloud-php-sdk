<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudOutboundObClidReportResponseBody\data;

use AlibabaCloud\Dara\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $answeredCount;

    /**
     * @var string
     */
    public $avgBridgeTime;

    /**
     * @var int
     */
    public $avgPreviewObWaitTime;

    /**
     * @var string
     */
    public $callType;

    /**
     * @var string
     */
    public $city;

    /**
     * @var string
     */
    public $clid;

    /**
     * @var string
     */
    public $clidRate;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $customerBillMinute;

    /**
     * @var string
     */
    public $dateTimeRange;

    /**
     * @var string
     */
    public $day;

    /**
     * @var int
     */
    public $enterpriseId;

    /**
     * @var string
     */
    public $hour;

    /**
     * @var string
     */
    public $maxBridgeTime;

    /**
     * @var string
     */
    public $minBridgeTime;

    /**
     * @var int
     */
    public $previewObCustomerRingingCount;

    /**
     * @var string
     */
    public $previewObCustomerRingingRate;

    /**
     * @var string
     */
    public $province;

    /**
     * @var string
     */
    public $rowName;

    /**
     * @var string
     */
    public $totalBridgeTime;

    /**
     * @var string
     */
    public $totalCount;

    /**
     * @var string
     */
    public $trunkGroupKey;

    /**
     * @var string
     */
    public $validAvgBridgeTime;

    /**
     * @var string
     */
    public $validCalls;

    /**
     * @var string
     */
    public $validTotalBridgeTime;
    protected $_name = [
        'answeredCount' => 'AnsweredCount',
        'avgBridgeTime' => 'AvgBridgeTime',
        'avgPreviewObWaitTime' => 'AvgPreviewObWaitTime',
        'callType' => 'CallType',
        'city' => 'City',
        'clid' => 'Clid',
        'clidRate' => 'ClidRate',
        'createTime' => 'CreateTime',
        'customerBillMinute' => 'CustomerBillMinute',
        'dateTimeRange' => 'DateTimeRange',
        'day' => 'Day',
        'enterpriseId' => 'EnterpriseId',
        'hour' => 'Hour',
        'maxBridgeTime' => 'MaxBridgeTime',
        'minBridgeTime' => 'MinBridgeTime',
        'previewObCustomerRingingCount' => 'PreviewObCustomerRingingCount',
        'previewObCustomerRingingRate' => 'PreviewObCustomerRingingRate',
        'province' => 'Province',
        'rowName' => 'RowName',
        'totalBridgeTime' => 'TotalBridgeTime',
        'totalCount' => 'TotalCount',
        'trunkGroupKey' => 'TrunkGroupKey',
        'validAvgBridgeTime' => 'ValidAvgBridgeTime',
        'validCalls' => 'ValidCalls',
        'validTotalBridgeTime' => 'ValidTotalBridgeTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->answeredCount) {
            $res['AnsweredCount'] = $this->answeredCount;
        }

        if (null !== $this->avgBridgeTime) {
            $res['AvgBridgeTime'] = $this->avgBridgeTime;
        }

        if (null !== $this->avgPreviewObWaitTime) {
            $res['AvgPreviewObWaitTime'] = $this->avgPreviewObWaitTime;
        }

        if (null !== $this->callType) {
            $res['CallType'] = $this->callType;
        }

        if (null !== $this->city) {
            $res['City'] = $this->city;
        }

        if (null !== $this->clid) {
            $res['Clid'] = $this->clid;
        }

        if (null !== $this->clidRate) {
            $res['ClidRate'] = $this->clidRate;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->customerBillMinute) {
            $res['CustomerBillMinute'] = $this->customerBillMinute;
        }

        if (null !== $this->dateTimeRange) {
            $res['DateTimeRange'] = $this->dateTimeRange;
        }

        if (null !== $this->day) {
            $res['Day'] = $this->day;
        }

        if (null !== $this->enterpriseId) {
            $res['EnterpriseId'] = $this->enterpriseId;
        }

        if (null !== $this->hour) {
            $res['Hour'] = $this->hour;
        }

        if (null !== $this->maxBridgeTime) {
            $res['MaxBridgeTime'] = $this->maxBridgeTime;
        }

        if (null !== $this->minBridgeTime) {
            $res['MinBridgeTime'] = $this->minBridgeTime;
        }

        if (null !== $this->previewObCustomerRingingCount) {
            $res['PreviewObCustomerRingingCount'] = $this->previewObCustomerRingingCount;
        }

        if (null !== $this->previewObCustomerRingingRate) {
            $res['PreviewObCustomerRingingRate'] = $this->previewObCustomerRingingRate;
        }

        if (null !== $this->province) {
            $res['Province'] = $this->province;
        }

        if (null !== $this->rowName) {
            $res['RowName'] = $this->rowName;
        }

        if (null !== $this->totalBridgeTime) {
            $res['TotalBridgeTime'] = $this->totalBridgeTime;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        if (null !== $this->trunkGroupKey) {
            $res['TrunkGroupKey'] = $this->trunkGroupKey;
        }

        if (null !== $this->validAvgBridgeTime) {
            $res['ValidAvgBridgeTime'] = $this->validAvgBridgeTime;
        }

        if (null !== $this->validCalls) {
            $res['ValidCalls'] = $this->validCalls;
        }

        if (null !== $this->validTotalBridgeTime) {
            $res['ValidTotalBridgeTime'] = $this->validTotalBridgeTime;
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
        if (isset($map['AnsweredCount'])) {
            $model->answeredCount = $map['AnsweredCount'];
        }

        if (isset($map['AvgBridgeTime'])) {
            $model->avgBridgeTime = $map['AvgBridgeTime'];
        }

        if (isset($map['AvgPreviewObWaitTime'])) {
            $model->avgPreviewObWaitTime = $map['AvgPreviewObWaitTime'];
        }

        if (isset($map['CallType'])) {
            $model->callType = $map['CallType'];
        }

        if (isset($map['City'])) {
            $model->city = $map['City'];
        }

        if (isset($map['Clid'])) {
            $model->clid = $map['Clid'];
        }

        if (isset($map['ClidRate'])) {
            $model->clidRate = $map['ClidRate'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['CustomerBillMinute'])) {
            $model->customerBillMinute = $map['CustomerBillMinute'];
        }

        if (isset($map['DateTimeRange'])) {
            $model->dateTimeRange = $map['DateTimeRange'];
        }

        if (isset($map['Day'])) {
            $model->day = $map['Day'];
        }

        if (isset($map['EnterpriseId'])) {
            $model->enterpriseId = $map['EnterpriseId'];
        }

        if (isset($map['Hour'])) {
            $model->hour = $map['Hour'];
        }

        if (isset($map['MaxBridgeTime'])) {
            $model->maxBridgeTime = $map['MaxBridgeTime'];
        }

        if (isset($map['MinBridgeTime'])) {
            $model->minBridgeTime = $map['MinBridgeTime'];
        }

        if (isset($map['PreviewObCustomerRingingCount'])) {
            $model->previewObCustomerRingingCount = $map['PreviewObCustomerRingingCount'];
        }

        if (isset($map['PreviewObCustomerRingingRate'])) {
            $model->previewObCustomerRingingRate = $map['PreviewObCustomerRingingRate'];
        }

        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }

        if (isset($map['RowName'])) {
            $model->rowName = $map['RowName'];
        }

        if (isset($map['TotalBridgeTime'])) {
            $model->totalBridgeTime = $map['TotalBridgeTime'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        if (isset($map['TrunkGroupKey'])) {
            $model->trunkGroupKey = $map['TrunkGroupKey'];
        }

        if (isset($map['ValidAvgBridgeTime'])) {
            $model->validAvgBridgeTime = $map['ValidAvgBridgeTime'];
        }

        if (isset($map['ValidCalls'])) {
            $model->validCalls = $map['ValidCalls'];
        }

        if (isset($map['ValidTotalBridgeTime'])) {
            $model->validTotalBridgeTime = $map['ValidTotalBridgeTime'];
        }

        return $model;
    }
}
