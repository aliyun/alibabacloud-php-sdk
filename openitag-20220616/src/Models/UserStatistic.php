<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenITag\V20220616\Models;

use AlibabaCloud\Tea\Model;

class UserStatistic extends Model
{
    /**
     * @var float
     */
    public $acceptedMarkItemsCount;

    /**
     * @var float
     */
    public $checkCount;

    /**
     * @var float
     */
    public $checkedAcceptedCount;

    /**
     * @var float
     */
    public $checkedAccuracy;

    /**
     * @var float
     */
    public $markEfficiency;

    /**
     * @var float
     */
    public $markTime;

    /**
     * @var float
     */
    public $samplingAccuracy;

    /**
     * @var float
     */
    public $samplingCount;

    /**
     * @var float
     */
    public $samplingErrorCount;

    /**
     * @var float
     */
    public $totalMarkItemsCount;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'acceptedMarkItemsCount' => 'AcceptedMarkItemsCount',
        'checkCount'             => 'CheckCount',
        'checkedAcceptedCount'   => 'CheckedAcceptedCount',
        'checkedAccuracy'        => 'CheckedAccuracy',
        'markEfficiency'         => 'MarkEfficiency',
        'markTime'               => 'MarkTime',
        'samplingAccuracy'       => 'SamplingAccuracy',
        'samplingCount'          => 'SamplingCount',
        'samplingErrorCount'     => 'SamplingErrorCount',
        'totalMarkItemsCount'    => 'TotalMarkItemsCount',
        'userId'                 => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptedMarkItemsCount) {
            $res['AcceptedMarkItemsCount'] = $this->acceptedMarkItemsCount;
        }
        if (null !== $this->checkCount) {
            $res['CheckCount'] = $this->checkCount;
        }
        if (null !== $this->checkedAcceptedCount) {
            $res['CheckedAcceptedCount'] = $this->checkedAcceptedCount;
        }
        if (null !== $this->checkedAccuracy) {
            $res['CheckedAccuracy'] = $this->checkedAccuracy;
        }
        if (null !== $this->markEfficiency) {
            $res['MarkEfficiency'] = $this->markEfficiency;
        }
        if (null !== $this->markTime) {
            $res['MarkTime'] = $this->markTime;
        }
        if (null !== $this->samplingAccuracy) {
            $res['SamplingAccuracy'] = $this->samplingAccuracy;
        }
        if (null !== $this->samplingCount) {
            $res['SamplingCount'] = $this->samplingCount;
        }
        if (null !== $this->samplingErrorCount) {
            $res['SamplingErrorCount'] = $this->samplingErrorCount;
        }
        if (null !== $this->totalMarkItemsCount) {
            $res['TotalMarkItemsCount'] = $this->totalMarkItemsCount;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UserStatistic
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptedMarkItemsCount'])) {
            $model->acceptedMarkItemsCount = $map['AcceptedMarkItemsCount'];
        }
        if (isset($map['CheckCount'])) {
            $model->checkCount = $map['CheckCount'];
        }
        if (isset($map['CheckedAcceptedCount'])) {
            $model->checkedAcceptedCount = $map['CheckedAcceptedCount'];
        }
        if (isset($map['CheckedAccuracy'])) {
            $model->checkedAccuracy = $map['CheckedAccuracy'];
        }
        if (isset($map['MarkEfficiency'])) {
            $model->markEfficiency = $map['MarkEfficiency'];
        }
        if (isset($map['MarkTime'])) {
            $model->markTime = $map['MarkTime'];
        }
        if (isset($map['SamplingAccuracy'])) {
            $model->samplingAccuracy = $map['SamplingAccuracy'];
        }
        if (isset($map['SamplingCount'])) {
            $model->samplingCount = $map['SamplingCount'];
        }
        if (isset($map['SamplingErrorCount'])) {
            $model->samplingErrorCount = $map['SamplingErrorCount'];
        }
        if (isset($map['TotalMarkItemsCount'])) {
            $model->totalMarkItemsCount = $map['TotalMarkItemsCount'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
