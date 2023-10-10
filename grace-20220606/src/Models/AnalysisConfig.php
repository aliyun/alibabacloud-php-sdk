<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Grace\V20220606\Models;

use AlibabaCloud\SDK\Grace\V20220606\Models\AnalysisConfig\timeRange;
use AlibabaCloud\Tea\Model;

class AnalysisConfig extends Model
{
    /**
     * @var float
     */
    public $badThroughputThreshold;

    /**
     * @var float
     */
    public $fullGCFrequentIntervalThreshold;

    /**
     * @var float
     */
    public $highHeapUsageThreshold;

    /**
     * @var float
     */
    public $highHumongousUsageThreshold;

    /**
     * @var float
     */
    public $highMetaspaceUsageThreshold;

    /**
     * @var float
     */
    public $highOldUsageThreshold;

    /**
     * @var float
     */
    public $highPromotionThreshold;

    /**
     * @var float
     */
    public $highSysThreshold;

    /**
     * @var float
     */
    public $longConcurrentThreshold;

    /**
     * @var float
     */
    public $longPauseThreshold;

    /**
     * @var float
     */
    public $lowUsrThreshold;

    /**
     * @var float
     */
    public $oldGCFrequentIntervalThreshold;

    /**
     * @var float
     */
    public $smallGenerationThreshold;

    /**
     * @var timeRange
     */
    public $timeRange;

    /**
     * @var float
     */
    public $tooManyOldGCThreshold;

    /**
     * @var float
     */
    public $youngGCFrequentIntervalThreshold;
    protected $_name = [
        'badThroughputThreshold'           => 'badThroughputThreshold',
        'fullGCFrequentIntervalThreshold'  => 'fullGCFrequentIntervalThreshold',
        'highHeapUsageThreshold'           => 'highHeapUsageThreshold',
        'highHumongousUsageThreshold'      => 'highHumongousUsageThreshold',
        'highMetaspaceUsageThreshold'      => 'highMetaspaceUsageThreshold',
        'highOldUsageThreshold'            => 'highOldUsageThreshold',
        'highPromotionThreshold'           => 'highPromotionThreshold',
        'highSysThreshold'                 => 'highSysThreshold',
        'longConcurrentThreshold'          => 'longConcurrentThreshold',
        'longPauseThreshold'               => 'longPauseThreshold',
        'lowUsrThreshold'                  => 'lowUsrThreshold',
        'oldGCFrequentIntervalThreshold'   => 'oldGCFrequentIntervalThreshold',
        'smallGenerationThreshold'         => 'smallGenerationThreshold',
        'timeRange'                        => 'timeRange',
        'tooManyOldGCThreshold'            => 'tooManyOldGCThreshold',
        'youngGCFrequentIntervalThreshold' => 'youngGCFrequentIntervalThreshold',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->badThroughputThreshold) {
            $res['badThroughputThreshold'] = $this->badThroughputThreshold;
        }
        if (null !== $this->fullGCFrequentIntervalThreshold) {
            $res['fullGCFrequentIntervalThreshold'] = $this->fullGCFrequentIntervalThreshold;
        }
        if (null !== $this->highHeapUsageThreshold) {
            $res['highHeapUsageThreshold'] = $this->highHeapUsageThreshold;
        }
        if (null !== $this->highHumongousUsageThreshold) {
            $res['highHumongousUsageThreshold'] = $this->highHumongousUsageThreshold;
        }
        if (null !== $this->highMetaspaceUsageThreshold) {
            $res['highMetaspaceUsageThreshold'] = $this->highMetaspaceUsageThreshold;
        }
        if (null !== $this->highOldUsageThreshold) {
            $res['highOldUsageThreshold'] = $this->highOldUsageThreshold;
        }
        if (null !== $this->highPromotionThreshold) {
            $res['highPromotionThreshold'] = $this->highPromotionThreshold;
        }
        if (null !== $this->highSysThreshold) {
            $res['highSysThreshold'] = $this->highSysThreshold;
        }
        if (null !== $this->longConcurrentThreshold) {
            $res['longConcurrentThreshold'] = $this->longConcurrentThreshold;
        }
        if (null !== $this->longPauseThreshold) {
            $res['longPauseThreshold'] = $this->longPauseThreshold;
        }
        if (null !== $this->lowUsrThreshold) {
            $res['lowUsrThreshold'] = $this->lowUsrThreshold;
        }
        if (null !== $this->oldGCFrequentIntervalThreshold) {
            $res['oldGCFrequentIntervalThreshold'] = $this->oldGCFrequentIntervalThreshold;
        }
        if (null !== $this->smallGenerationThreshold) {
            $res['smallGenerationThreshold'] = $this->smallGenerationThreshold;
        }
        if (null !== $this->timeRange) {
            $res['timeRange'] = null !== $this->timeRange ? $this->timeRange->toMap() : null;
        }
        if (null !== $this->tooManyOldGCThreshold) {
            $res['tooManyOldGCThreshold'] = $this->tooManyOldGCThreshold;
        }
        if (null !== $this->youngGCFrequentIntervalThreshold) {
            $res['youngGCFrequentIntervalThreshold'] = $this->youngGCFrequentIntervalThreshold;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AnalysisConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['badThroughputThreshold'])) {
            $model->badThroughputThreshold = $map['badThroughputThreshold'];
        }
        if (isset($map['fullGCFrequentIntervalThreshold'])) {
            $model->fullGCFrequentIntervalThreshold = $map['fullGCFrequentIntervalThreshold'];
        }
        if (isset($map['highHeapUsageThreshold'])) {
            $model->highHeapUsageThreshold = $map['highHeapUsageThreshold'];
        }
        if (isset($map['highHumongousUsageThreshold'])) {
            $model->highHumongousUsageThreshold = $map['highHumongousUsageThreshold'];
        }
        if (isset($map['highMetaspaceUsageThreshold'])) {
            $model->highMetaspaceUsageThreshold = $map['highMetaspaceUsageThreshold'];
        }
        if (isset($map['highOldUsageThreshold'])) {
            $model->highOldUsageThreshold = $map['highOldUsageThreshold'];
        }
        if (isset($map['highPromotionThreshold'])) {
            $model->highPromotionThreshold = $map['highPromotionThreshold'];
        }
        if (isset($map['highSysThreshold'])) {
            $model->highSysThreshold = $map['highSysThreshold'];
        }
        if (isset($map['longConcurrentThreshold'])) {
            $model->longConcurrentThreshold = $map['longConcurrentThreshold'];
        }
        if (isset($map['longPauseThreshold'])) {
            $model->longPauseThreshold = $map['longPauseThreshold'];
        }
        if (isset($map['lowUsrThreshold'])) {
            $model->lowUsrThreshold = $map['lowUsrThreshold'];
        }
        if (isset($map['oldGCFrequentIntervalThreshold'])) {
            $model->oldGCFrequentIntervalThreshold = $map['oldGCFrequentIntervalThreshold'];
        }
        if (isset($map['smallGenerationThreshold'])) {
            $model->smallGenerationThreshold = $map['smallGenerationThreshold'];
        }
        if (isset($map['timeRange'])) {
            $model->timeRange = timeRange::fromMap($map['timeRange']);
        }
        if (isset($map['tooManyOldGCThreshold'])) {
            $model->tooManyOldGCThreshold = $map['tooManyOldGCThreshold'];
        }
        if (isset($map['youngGCFrequentIntervalThreshold'])) {
            $model->youngGCFrequentIntervalThreshold = $map['youngGCFrequentIntervalThreshold'];
        }

        return $model;
    }
}
