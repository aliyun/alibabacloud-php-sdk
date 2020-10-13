<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pcdn\V20170411\Models\GetFeeHistoryResponse\feeList;

use AlibabaCloud\Tea\Model;

class fee extends Model
{
    /**
     * @var string
     */
    public $date;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var int
     */
    public $totalBandwidth;

    /**
     * @var int
     */
    public $levelTwoBandwidth;

    /**
     * @var int
     */
    public $levelThreeBandwidth;

    /**
     * @var int
     */
    public $totalTraffic;

    /**
     * @var int
     */
    public $levelTwoTraffic;

    /**
     * @var int
     */
    public $levelThreeTraffic;

    /**
     * @var string
     */
    public $timeSpan;

    /**
     * @var string
     */
    public $businessType;

    /**
     * @var string
     */
    public $startDate;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var int
     */
    public $flowOut;
    protected $_name = [
        'date'                => 'Date',
        'mode'                => 'Mode',
        'totalBandwidth'      => 'TotalBandwidth',
        'levelTwoBandwidth'   => 'LevelTwoBandwidth',
        'levelThreeBandwidth' => 'LevelThreeBandwidth',
        'totalTraffic'        => 'TotalTraffic',
        'levelTwoTraffic'     => 'LevelTwoTraffic',
        'levelThreeTraffic'   => 'LevelThreeTraffic',
        'timeSpan'            => 'TimeSpan',
        'businessType'        => 'BusinessType',
        'startDate'           => 'StartDate',
        'endDate'             => 'EndDate',
        'resourceId'          => 'ResourceId',
        'flowOut'             => 'FlowOut',
    ];

    public function validate()
    {
        Model::validateRequired('date', $this->date, true);
        Model::validateRequired('mode', $this->mode, true);
        Model::validateRequired('totalBandwidth', $this->totalBandwidth, true);
        Model::validateRequired('levelTwoBandwidth', $this->levelTwoBandwidth, true);
        Model::validateRequired('levelThreeBandwidth', $this->levelThreeBandwidth, true);
        Model::validateRequired('totalTraffic', $this->totalTraffic, true);
        Model::validateRequired('levelTwoTraffic', $this->levelTwoTraffic, true);
        Model::validateRequired('levelThreeTraffic', $this->levelThreeTraffic, true);
        Model::validateRequired('timeSpan', $this->timeSpan, true);
        Model::validateRequired('businessType', $this->businessType, true);
        Model::validateRequired('startDate', $this->startDate, true);
        Model::validateRequired('endDate', $this->endDate, true);
        Model::validateRequired('resourceId', $this->resourceId, true);
        Model::validateRequired('flowOut', $this->flowOut, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->date) {
            $res['Date'] = $this->date;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->totalBandwidth) {
            $res['TotalBandwidth'] = $this->totalBandwidth;
        }
        if (null !== $this->levelTwoBandwidth) {
            $res['LevelTwoBandwidth'] = $this->levelTwoBandwidth;
        }
        if (null !== $this->levelThreeBandwidth) {
            $res['LevelThreeBandwidth'] = $this->levelThreeBandwidth;
        }
        if (null !== $this->totalTraffic) {
            $res['TotalTraffic'] = $this->totalTraffic;
        }
        if (null !== $this->levelTwoTraffic) {
            $res['LevelTwoTraffic'] = $this->levelTwoTraffic;
        }
        if (null !== $this->levelThreeTraffic) {
            $res['LevelThreeTraffic'] = $this->levelThreeTraffic;
        }
        if (null !== $this->timeSpan) {
            $res['TimeSpan'] = $this->timeSpan;
        }
        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->flowOut) {
            $res['FlowOut'] = $this->flowOut;
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
        if (isset($map['Date'])) {
            $model->date = $map['Date'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['TotalBandwidth'])) {
            $model->totalBandwidth = $map['TotalBandwidth'];
        }
        if (isset($map['LevelTwoBandwidth'])) {
            $model->levelTwoBandwidth = $map['LevelTwoBandwidth'];
        }
        if (isset($map['LevelThreeBandwidth'])) {
            $model->levelThreeBandwidth = $map['LevelThreeBandwidth'];
        }
        if (isset($map['TotalTraffic'])) {
            $model->totalTraffic = $map['TotalTraffic'];
        }
        if (isset($map['LevelTwoTraffic'])) {
            $model->levelTwoTraffic = $map['LevelTwoTraffic'];
        }
        if (isset($map['LevelThreeTraffic'])) {
            $model->levelThreeTraffic = $map['LevelThreeTraffic'];
        }
        if (isset($map['TimeSpan'])) {
            $model->timeSpan = $map['TimeSpan'];
        }
        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['FlowOut'])) {
            $model->flowOut = $map['FlowOut'];
        }

        return $model;
    }
}
