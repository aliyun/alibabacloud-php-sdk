<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pcdn\V20170411\Models\GetFeeHistoryResponseBody\feeList;

use AlibabaCloud\Tea\Model;

class fee extends Model
{
    /**
     * @var string
     */
    public $endDate;

    /**
     * @var string
     */
    public $timeSpan;

    /**
     * @var string
     */
    public $date;

    /**
     * @var string
     */
    public $startDate;

    /**
     * @var int
     */
    public $levelThreeTraffic;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var int
     */
    public $totalTraffic;

    /**
     * @var string
     */
    public $businessType;

    /**
     * @var int
     */
    public $levelTwoTraffic;

    /**
     * @var int
     */
    public $levelThreeBandwidth;

    /**
     * @var int
     */
    public $levelTwoBandwidth;

    /**
     * @var int
     */
    public $flowOut;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var int
     */
    public $totalBandwidth;
    protected $_name = [
        'endDate'             => 'EndDate',
        'timeSpan'            => 'TimeSpan',
        'date'                => 'Date',
        'startDate'           => 'StartDate',
        'levelThreeTraffic'   => 'LevelThreeTraffic',
        'mode'                => 'Mode',
        'totalTraffic'        => 'TotalTraffic',
        'businessType'        => 'BusinessType',
        'levelTwoTraffic'     => 'LevelTwoTraffic',
        'levelThreeBandwidth' => 'LevelThreeBandwidth',
        'levelTwoBandwidth'   => 'LevelTwoBandwidth',
        'flowOut'             => 'FlowOut',
        'resourceId'          => 'ResourceId',
        'totalBandwidth'      => 'TotalBandwidth',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->timeSpan) {
            $res['TimeSpan'] = $this->timeSpan;
        }
        if (null !== $this->date) {
            $res['Date'] = $this->date;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->levelThreeTraffic) {
            $res['LevelThreeTraffic'] = $this->levelThreeTraffic;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->totalTraffic) {
            $res['TotalTraffic'] = $this->totalTraffic;
        }
        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
        }
        if (null !== $this->levelTwoTraffic) {
            $res['LevelTwoTraffic'] = $this->levelTwoTraffic;
        }
        if (null !== $this->levelThreeBandwidth) {
            $res['LevelThreeBandwidth'] = $this->levelThreeBandwidth;
        }
        if (null !== $this->levelTwoBandwidth) {
            $res['LevelTwoBandwidth'] = $this->levelTwoBandwidth;
        }
        if (null !== $this->flowOut) {
            $res['FlowOut'] = $this->flowOut;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->totalBandwidth) {
            $res['TotalBandwidth'] = $this->totalBandwidth;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fee
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['TimeSpan'])) {
            $model->timeSpan = $map['TimeSpan'];
        }
        if (isset($map['Date'])) {
            $model->date = $map['Date'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['LevelThreeTraffic'])) {
            $model->levelThreeTraffic = $map['LevelThreeTraffic'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['TotalTraffic'])) {
            $model->totalTraffic = $map['TotalTraffic'];
        }
        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }
        if (isset($map['LevelTwoTraffic'])) {
            $model->levelTwoTraffic = $map['LevelTwoTraffic'];
        }
        if (isset($map['LevelThreeBandwidth'])) {
            $model->levelThreeBandwidth = $map['LevelThreeBandwidth'];
        }
        if (isset($map['LevelTwoBandwidth'])) {
            $model->levelTwoBandwidth = $map['LevelTwoBandwidth'];
        }
        if (isset($map['FlowOut'])) {
            $model->flowOut = $map['FlowOut'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['TotalBandwidth'])) {
            $model->totalBandwidth = $map['TotalBandwidth'];
        }

        return $model;
    }
}
