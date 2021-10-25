<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\UniMkt\V20181212\Models\QueryIncomeTrendResponseBody;

use AlibabaCloud\Tea\Model;

class model extends Model
{
    /**
     * @var string
     */
    public $adSlotName;

    /**
     * @var string
     */
    public $adSlotId;

    /**
     * @var int
     */
    public $clickTimes;

    /**
     * @var int
     */
    public $showTimes;

    /**
     * @var int
     */
    public $adSlotHitTimes;

    /**
     * @var string
     */
    public $thisMonEstIncomeRate;

    /**
     * @var int
     */
    public $bizDate;

    /**
     * @var string
     */
    public $accEstIncomeRate;

    /**
     * @var string
     */
    public $thisYearEstIncomeRate;

    /**
     * @var int
     */
    public $adSlotRequests;

    /**
     * @var string
     */
    public $mediaName;

    /**
     * @var string
     */
    public $adSlotType;

    /**
     * @var string
     */
    public $mediaId;

    /**
     * @var string
     */
    public $thisDaysEstIncomeRate;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $adSlotShowRate;

    /**
     * @var string
     */
    public $ecpmRate;

    /**
     * @var int
     */
    public $thisDaysEstIncome;

    /**
     * @var string
     */
    public $channelName;

    /**
     * @var string
     */
    public $adSlotClickRate;

    /**
     * @var int
     */
    public $estimatedIncome;

    /**
     * @var int
     */
    public $accessStatus;

    /**
     * @var string
     */
    public $channelId;

    /**
     * @var int
     */
    public $ecpm;

    /**
     * @var string
     */
    public $adSlotHitRate;
    protected $_name = [
        'adSlotName'            => 'AdSlotName',
        'adSlotId'              => 'AdSlotId',
        'clickTimes'            => 'ClickTimes',
        'showTimes'             => 'ShowTimes',
        'adSlotHitTimes'        => 'AdSlotHitTimes',
        'thisMonEstIncomeRate'  => 'ThisMonEstIncomeRate',
        'bizDate'               => 'BizDate',
        'accEstIncomeRate'      => 'AccEstIncomeRate',
        'thisYearEstIncomeRate' => 'ThisYearEstIncomeRate',
        'adSlotRequests'        => 'AdSlotRequests',
        'mediaName'             => 'MediaName',
        'adSlotType'            => 'AdSlotType',
        'mediaId'               => 'MediaId',
        'thisDaysEstIncomeRate' => 'ThisDaysEstIncomeRate',
        'endTime'               => 'EndTime',
        'startTime'             => 'StartTime',
        'adSlotShowRate'        => 'AdSlotShowRate',
        'ecpmRate'              => 'EcpmRate',
        'thisDaysEstIncome'     => 'ThisDaysEstIncome',
        'channelName'           => 'ChannelName',
        'adSlotClickRate'       => 'AdSlotClickRate',
        'estimatedIncome'       => 'EstimatedIncome',
        'accessStatus'          => 'AccessStatus',
        'channelId'             => 'ChannelId',
        'ecpm'                  => 'Ecpm',
        'adSlotHitRate'         => 'AdSlotHitRate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adSlotName) {
            $res['AdSlotName'] = $this->adSlotName;
        }
        if (null !== $this->adSlotId) {
            $res['AdSlotId'] = $this->adSlotId;
        }
        if (null !== $this->clickTimes) {
            $res['ClickTimes'] = $this->clickTimes;
        }
        if (null !== $this->showTimes) {
            $res['ShowTimes'] = $this->showTimes;
        }
        if (null !== $this->adSlotHitTimes) {
            $res['AdSlotHitTimes'] = $this->adSlotHitTimes;
        }
        if (null !== $this->thisMonEstIncomeRate) {
            $res['ThisMonEstIncomeRate'] = $this->thisMonEstIncomeRate;
        }
        if (null !== $this->bizDate) {
            $res['BizDate'] = $this->bizDate;
        }
        if (null !== $this->accEstIncomeRate) {
            $res['AccEstIncomeRate'] = $this->accEstIncomeRate;
        }
        if (null !== $this->thisYearEstIncomeRate) {
            $res['ThisYearEstIncomeRate'] = $this->thisYearEstIncomeRate;
        }
        if (null !== $this->adSlotRequests) {
            $res['AdSlotRequests'] = $this->adSlotRequests;
        }
        if (null !== $this->mediaName) {
            $res['MediaName'] = $this->mediaName;
        }
        if (null !== $this->adSlotType) {
            $res['AdSlotType'] = $this->adSlotType;
        }
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }
        if (null !== $this->thisDaysEstIncomeRate) {
            $res['ThisDaysEstIncomeRate'] = $this->thisDaysEstIncomeRate;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->adSlotShowRate) {
            $res['AdSlotShowRate'] = $this->adSlotShowRate;
        }
        if (null !== $this->ecpmRate) {
            $res['EcpmRate'] = $this->ecpmRate;
        }
        if (null !== $this->thisDaysEstIncome) {
            $res['ThisDaysEstIncome'] = $this->thisDaysEstIncome;
        }
        if (null !== $this->channelName) {
            $res['ChannelName'] = $this->channelName;
        }
        if (null !== $this->adSlotClickRate) {
            $res['AdSlotClickRate'] = $this->adSlotClickRate;
        }
        if (null !== $this->estimatedIncome) {
            $res['EstimatedIncome'] = $this->estimatedIncome;
        }
        if (null !== $this->accessStatus) {
            $res['AccessStatus'] = $this->accessStatus;
        }
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->ecpm) {
            $res['Ecpm'] = $this->ecpm;
        }
        if (null !== $this->adSlotHitRate) {
            $res['AdSlotHitRate'] = $this->adSlotHitRate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return model
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdSlotName'])) {
            $model->adSlotName = $map['AdSlotName'];
        }
        if (isset($map['AdSlotId'])) {
            $model->adSlotId = $map['AdSlotId'];
        }
        if (isset($map['ClickTimes'])) {
            $model->clickTimes = $map['ClickTimes'];
        }
        if (isset($map['ShowTimes'])) {
            $model->showTimes = $map['ShowTimes'];
        }
        if (isset($map['AdSlotHitTimes'])) {
            $model->adSlotHitTimes = $map['AdSlotHitTimes'];
        }
        if (isset($map['ThisMonEstIncomeRate'])) {
            $model->thisMonEstIncomeRate = $map['ThisMonEstIncomeRate'];
        }
        if (isset($map['BizDate'])) {
            $model->bizDate = $map['BizDate'];
        }
        if (isset($map['AccEstIncomeRate'])) {
            $model->accEstIncomeRate = $map['AccEstIncomeRate'];
        }
        if (isset($map['ThisYearEstIncomeRate'])) {
            $model->thisYearEstIncomeRate = $map['ThisYearEstIncomeRate'];
        }
        if (isset($map['AdSlotRequests'])) {
            $model->adSlotRequests = $map['AdSlotRequests'];
        }
        if (isset($map['MediaName'])) {
            $model->mediaName = $map['MediaName'];
        }
        if (isset($map['AdSlotType'])) {
            $model->adSlotType = $map['AdSlotType'];
        }
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['ThisDaysEstIncomeRate'])) {
            $model->thisDaysEstIncomeRate = $map['ThisDaysEstIncomeRate'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['AdSlotShowRate'])) {
            $model->adSlotShowRate = $map['AdSlotShowRate'];
        }
        if (isset($map['EcpmRate'])) {
            $model->ecpmRate = $map['EcpmRate'];
        }
        if (isset($map['ThisDaysEstIncome'])) {
            $model->thisDaysEstIncome = $map['ThisDaysEstIncome'];
        }
        if (isset($map['ChannelName'])) {
            $model->channelName = $map['ChannelName'];
        }
        if (isset($map['AdSlotClickRate'])) {
            $model->adSlotClickRate = $map['AdSlotClickRate'];
        }
        if (isset($map['EstimatedIncome'])) {
            $model->estimatedIncome = $map['EstimatedIncome'];
        }
        if (isset($map['AccessStatus'])) {
            $model->accessStatus = $map['AccessStatus'];
        }
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['Ecpm'])) {
            $model->ecpm = $map['Ecpm'];
        }
        if (isset($map['AdSlotHitRate'])) {
            $model->adSlotHitRate = $map['AdSlotHitRate'];
        }

        return $model;
    }
}
