<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ListPromotionActivitiesForPartnerResponseBody\module;

use AlibabaCloud\Dara\Model;

class activities extends Model
{
    /**
     * @var string
     */
    public $activityCode;

    /**
     * @var string
     */
    public $activityName;

    /**
     * @var string
     */
    public $activityType;

    /**
     * @var int
     */
    public $consumedQuota;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $createdBy;

    /**
     * @var string
     */
    public $eligibilityConfig;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @var string
     */
    public $offerConfig;

    /**
     * @var string
     */
    public $offerConfigSummary;

    /**
     * @var int
     */
    public $remainingQuota;

    /**
     * @var string
     */
    public $startDate;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $totalQuota;

    /**
     * @var string
     */
    public $touchpointConfig;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $updatedBy;

    /**
     * @var int
     */
    public $warningThreshold;
    protected $_name = [
        'activityCode' => 'ActivityCode',
        'activityName' => 'ActivityName',
        'activityType' => 'ActivityType',
        'consumedQuota' => 'ConsumedQuota',
        'createTime' => 'CreateTime',
        'createdBy' => 'CreatedBy',
        'eligibilityConfig' => 'EligibilityConfig',
        'endDate' => 'EndDate',
        'offerConfig' => 'OfferConfig',
        'offerConfigSummary' => 'OfferConfigSummary',
        'remainingQuota' => 'RemainingQuota',
        'startDate' => 'StartDate',
        'status' => 'Status',
        'totalQuota' => 'TotalQuota',
        'touchpointConfig' => 'TouchpointConfig',
        'updateTime' => 'UpdateTime',
        'updatedBy' => 'UpdatedBy',
        'warningThreshold' => 'WarningThreshold',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activityCode) {
            $res['ActivityCode'] = $this->activityCode;
        }

        if (null !== $this->activityName) {
            $res['ActivityName'] = $this->activityName;
        }

        if (null !== $this->activityType) {
            $res['ActivityType'] = $this->activityType;
        }

        if (null !== $this->consumedQuota) {
            $res['ConsumedQuota'] = $this->consumedQuota;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->createdBy) {
            $res['CreatedBy'] = $this->createdBy;
        }

        if (null !== $this->eligibilityConfig) {
            $res['EligibilityConfig'] = $this->eligibilityConfig;
        }

        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }

        if (null !== $this->offerConfig) {
            $res['OfferConfig'] = $this->offerConfig;
        }

        if (null !== $this->offerConfigSummary) {
            $res['OfferConfigSummary'] = $this->offerConfigSummary;
        }

        if (null !== $this->remainingQuota) {
            $res['RemainingQuota'] = $this->remainingQuota;
        }

        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->totalQuota) {
            $res['TotalQuota'] = $this->totalQuota;
        }

        if (null !== $this->touchpointConfig) {
            $res['TouchpointConfig'] = $this->touchpointConfig;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        if (null !== $this->updatedBy) {
            $res['UpdatedBy'] = $this->updatedBy;
        }

        if (null !== $this->warningThreshold) {
            $res['WarningThreshold'] = $this->warningThreshold;
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
        if (isset($map['ActivityCode'])) {
            $model->activityCode = $map['ActivityCode'];
        }

        if (isset($map['ActivityName'])) {
            $model->activityName = $map['ActivityName'];
        }

        if (isset($map['ActivityType'])) {
            $model->activityType = $map['ActivityType'];
        }

        if (isset($map['ConsumedQuota'])) {
            $model->consumedQuota = $map['ConsumedQuota'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['CreatedBy'])) {
            $model->createdBy = $map['CreatedBy'];
        }

        if (isset($map['EligibilityConfig'])) {
            $model->eligibilityConfig = $map['EligibilityConfig'];
        }

        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }

        if (isset($map['OfferConfig'])) {
            $model->offerConfig = $map['OfferConfig'];
        }

        if (isset($map['OfferConfigSummary'])) {
            $model->offerConfigSummary = $map['OfferConfigSummary'];
        }

        if (isset($map['RemainingQuota'])) {
            $model->remainingQuota = $map['RemainingQuota'];
        }

        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TotalQuota'])) {
            $model->totalQuota = $map['TotalQuota'];
        }

        if (isset($map['TouchpointConfig'])) {
            $model->touchpointConfig = $map['TouchpointConfig'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        if (isset($map['UpdatedBy'])) {
            $model->updatedBy = $map['UpdatedBy'];
        }

        if (isset($map['WarningThreshold'])) {
            $model->warningThreshold = $map['WarningThreshold'];
        }

        return $model;
    }
}
