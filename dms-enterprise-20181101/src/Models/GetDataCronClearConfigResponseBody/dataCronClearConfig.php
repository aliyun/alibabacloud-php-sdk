<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataCronClearConfigResponseBody;

use AlibabaCloud\Tea\Model;

class dataCronClearConfig extends Model
{
    /**
     * @description The number of times that the task is run.
     *
     * @example 2
     *
     * @var string
     */
    public $cronCallTimes;

    /**
     * @description The crontab expression that you can use to run the task at a specified time. For more information, see [Crontab expression](~~206581~~).
     *
     * @example 0 0 23 ? * 7,1
     *
     * @var string
     */
    public $cronFormat;

    /**
     * @description The time when the task was last run.
     *
     * @example 2022-11-18 00:00:00
     *
     * @var string
     */
    public $cronLastCallStartTime;

    /**
     * @description The time when the task is run next time. This parameter is displayed only when the status of the scheduled task is SUCCESS.
     *
     * @example 2022-11-19 00:00:00
     *
     * @var string
     */
    public $cronNextCallTime;

    /**
     * @description The status of the scheduled task. If this parameter is empty, it indicates the task is not run. Valid values:
     *
     *   PAUSE: The task is suspended.
     *   WAITING: The task is waiting to be run.
     *   SUCCESS: The task is complete.
     *
     * @example PAUSE
     *
     * @var string
     */
    public $cronStatus;

    /**
     * @description The number of times that the Optimize Table statement is automatically exeuted. This parameter is valid only when the value of the OptimizeTableAfterEveryClearTimes parameter is greater than 0.
     *
     * @example 0
     *
     * @var int
     */
    public $currentClearTaskCount;

    /**
     * @description The execution duration of the task. Unit: hours. If the value is 0, it indicates the duration is not specified.
     *
     * @example 1
     *
     * @var string
     */
    public $duration;

    /**
     * @description Specifies whether to enable automatic execution of the OPTIMIZE TABLE statement. Valid values:
     *
     *   0: disables automatic execution
     *   A number greater than 0: enables automatic execution. The number specifies the number of times that cleanup operations must be performed before the OPTIMIZE TABLE statement is automatically executed.
     *
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
