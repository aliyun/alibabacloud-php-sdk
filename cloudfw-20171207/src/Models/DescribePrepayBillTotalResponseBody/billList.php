<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribePrepayBillTotalResponseBody;

use AlibabaCloud\Dara\Model;

class billList extends Model
{
    /**
     * @var float
     */
    public $billedDetectionTraffic;

    /**
     * @var float
     */
    public $dailyDetectionTraffic;

    /**
     * @var float
     */
    public $dailyOverflowTraffic;

    /**
     * @var int
     */
    public $defaultBandwidth;

    /**
     * @var int
     */
    public $elasticBandwidth;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $extensionBandwidth;

    /**
     * @var float
     */
    public $internetTrafficBandwidth;

    /**
     * @var float
     */
    public $monthlyRemainingFreeTraffic;

    /**
     * @var float
     */
    public $natTrafficBandwidth;

    /**
     * @var int
     */
    public $overflowTime;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $temporaryBandwidth;

    /**
     * @var float
     */
    public $vpcTrafficBandwidth;
    protected $_name = [
        'billedDetectionTraffic' => 'BilledDetectionTraffic',
        'dailyDetectionTraffic' => 'DailyDetectionTraffic',
        'dailyOverflowTraffic' => 'DailyOverflowTraffic',
        'defaultBandwidth' => 'DefaultBandwidth',
        'elasticBandwidth' => 'ElasticBandwidth',
        'endTime' => 'EndTime',
        'extensionBandwidth' => 'ExtensionBandwidth',
        'internetTrafficBandwidth' => 'InternetTrafficBandwidth',
        'monthlyRemainingFreeTraffic' => 'MonthlyRemainingFreeTraffic',
        'natTrafficBandwidth' => 'NatTrafficBandwidth',
        'overflowTime' => 'OverflowTime',
        'startTime' => 'StartTime',
        'temporaryBandwidth' => 'TemporaryBandwidth',
        'vpcTrafficBandwidth' => 'VpcTrafficBandwidth',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->billedDetectionTraffic) {
            $res['BilledDetectionTraffic'] = $this->billedDetectionTraffic;
        }

        if (null !== $this->dailyDetectionTraffic) {
            $res['DailyDetectionTraffic'] = $this->dailyDetectionTraffic;
        }

        if (null !== $this->dailyOverflowTraffic) {
            $res['DailyOverflowTraffic'] = $this->dailyOverflowTraffic;
        }

        if (null !== $this->defaultBandwidth) {
            $res['DefaultBandwidth'] = $this->defaultBandwidth;
        }

        if (null !== $this->elasticBandwidth) {
            $res['ElasticBandwidth'] = $this->elasticBandwidth;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->extensionBandwidth) {
            $res['ExtensionBandwidth'] = $this->extensionBandwidth;
        }

        if (null !== $this->internetTrafficBandwidth) {
            $res['InternetTrafficBandwidth'] = $this->internetTrafficBandwidth;
        }

        if (null !== $this->monthlyRemainingFreeTraffic) {
            $res['MonthlyRemainingFreeTraffic'] = $this->monthlyRemainingFreeTraffic;
        }

        if (null !== $this->natTrafficBandwidth) {
            $res['NatTrafficBandwidth'] = $this->natTrafficBandwidth;
        }

        if (null !== $this->overflowTime) {
            $res['OverflowTime'] = $this->overflowTime;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->temporaryBandwidth) {
            $res['TemporaryBandwidth'] = $this->temporaryBandwidth;
        }

        if (null !== $this->vpcTrafficBandwidth) {
            $res['VpcTrafficBandwidth'] = $this->vpcTrafficBandwidth;
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
        if (isset($map['BilledDetectionTraffic'])) {
            $model->billedDetectionTraffic = $map['BilledDetectionTraffic'];
        }

        if (isset($map['DailyDetectionTraffic'])) {
            $model->dailyDetectionTraffic = $map['DailyDetectionTraffic'];
        }

        if (isset($map['DailyOverflowTraffic'])) {
            $model->dailyOverflowTraffic = $map['DailyOverflowTraffic'];
        }

        if (isset($map['DefaultBandwidth'])) {
            $model->defaultBandwidth = $map['DefaultBandwidth'];
        }

        if (isset($map['ElasticBandwidth'])) {
            $model->elasticBandwidth = $map['ElasticBandwidth'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['ExtensionBandwidth'])) {
            $model->extensionBandwidth = $map['ExtensionBandwidth'];
        }

        if (isset($map['InternetTrafficBandwidth'])) {
            $model->internetTrafficBandwidth = $map['InternetTrafficBandwidth'];
        }

        if (isset($map['MonthlyRemainingFreeTraffic'])) {
            $model->monthlyRemainingFreeTraffic = $map['MonthlyRemainingFreeTraffic'];
        }

        if (isset($map['NatTrafficBandwidth'])) {
            $model->natTrafficBandwidth = $map['NatTrafficBandwidth'];
        }

        if (isset($map['OverflowTime'])) {
            $model->overflowTime = $map['OverflowTime'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['TemporaryBandwidth'])) {
            $model->temporaryBandwidth = $map['TemporaryBandwidth'];
        }

        if (isset($map['VpcTrafficBandwidth'])) {
            $model->vpcTrafficBandwidth = $map['VpcTrafficBandwidth'];
        }

        return $model;
    }
}
