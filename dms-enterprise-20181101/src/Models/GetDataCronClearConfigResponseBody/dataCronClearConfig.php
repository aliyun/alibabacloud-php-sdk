<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataCronClearConfigResponseBody;

use AlibabaCloud\Tea\Model;

class dataCronClearConfig extends Model
{
    /**
     * @example 2
     *
     * @var string
     */
    public $cronCallTimes;

    /**
     * @var string
     */
    public $cronFormat;

    /**
     * @example 2022-11-18 00:00:00
     *
     * @var string
     */
    public $cronLastCallStartTime;

    /**
     * @example 2022-11-19 00:00:00
     *
     * @var string
     */
    public $cronNextCallTime;

    /**
     * @example PAUSE
     *
     * @var string
     */
    public $cronStatus;

    /**
     * @example 0
     *
     * @var int
     */
    public $currentClearTaskCount;

    /**
     * @example 1
     *
     * @var string
     */
    public $duration;

    /**
     * @example 0
     *
     * @var int
     */
    public $optimizeTableAfterEveryClearTimes;
    protected $_name = [
        'cronCallTimes'                     => 'CronCallTimes',
        'cronFormat'                        => 'CronFormat',
        'cronLastCallStartTime'             => 'CronLastCallStartTime',
        'cronNextCallTime'                  => 'CronNextCallTime',
        'cronStatus'                        => 'CronStatus',
        'currentClearTaskCount'             => 'CurrentClearTaskCount',
        'duration'                          => 'Duration',
        'optimizeTableAfterEveryClearTimes' => 'OptimizeTableAfterEveryClearTimes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cronCallTimes) {
            $res['CronCallTimes'] = $this->cronCallTimes;
        }
        if (null !== $this->cronFormat) {
            $res['CronFormat'] = $this->cronFormat;
        }
        if (null !== $this->cronLastCallStartTime) {
            $res['CronLastCallStartTime'] = $this->cronLastCallStartTime;
        }
        if (null !== $this->cronNextCallTime) {
            $res['CronNextCallTime'] = $this->cronNextCallTime;
        }
        if (null !== $this->cronStatus) {
            $res['CronStatus'] = $this->cronStatus;
        }
        if (null !== $this->currentClearTaskCount) {
            $res['CurrentClearTaskCount'] = $this->currentClearTaskCount;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->optimizeTableAfterEveryClearTimes) {
            $res['OptimizeTableAfterEveryClearTimes'] = $this->optimizeTableAfterEveryClearTimes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataCronClearConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CronCallTimes'])) {
            $model->cronCallTimes = $map['CronCallTimes'];
        }
        if (isset($map['CronFormat'])) {
            $model->cronFormat = $map['CronFormat'];
        }
        if (isset($map['CronLastCallStartTime'])) {
            $model->cronLastCallStartTime = $map['CronLastCallStartTime'];
        }
        if (isset($map['CronNextCallTime'])) {
            $model->cronNextCallTime = $map['CronNextCallTime'];
        }
        if (isset($map['CronStatus'])) {
            $model->cronStatus = $map['CronStatus'];
        }
        if (isset($map['CurrentClearTaskCount'])) {
            $model->currentClearTaskCount = $map['CurrentClearTaskCount'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['OptimizeTableAfterEveryClearTimes'])) {
            $model->optimizeTableAfterEveryClearTimes = $map['OptimizeTableAfterEveryClearTimes'];
        }

        return $model;
    }
}
