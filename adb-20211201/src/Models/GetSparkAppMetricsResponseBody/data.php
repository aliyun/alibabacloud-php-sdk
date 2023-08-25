<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\GetSparkAppMetricsResponseBody;

use AlibabaCloud\SDK\Adb\V20211201\Models\GetSparkAppMetricsResponseBody\data\scanMetrics;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The ID of the Spark application.
     *
     * @example s202302051515shfa865f80003691
     *
     * @var string
     */
    public $appId;

    /**
     * @description The attempt ID of the Spark application.
     *
     * @example s202301061000hz57d797b0000201-0001
     *
     * @var string
     */
    public $attemptId;

    /**
     * @description The path of the event log.
     *
     * @example oss://path/to/eventLog
     *
     * @var string
     */
    public $eventLogPath;

    /**
     * @description Indicates whether parsing is complete. Valid values:
     *
     *   true
     *   false
     *
     * @example True
     *
     * @var bool
     */
    public $finished;

    /**
     * @description The metrics.
     *
     * @var scanMetrics
     */
    public $scanMetrics;
    protected $_name = [
        'appId'        => 'AppId',
        'attemptId'    => 'AttemptId',
        'eventLogPath' => 'EventLogPath',
        'finished'     => 'Finished',
        'scanMetrics'  => 'ScanMetrics',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->attemptId) {
            $res['AttemptId'] = $this->attemptId;
        }
        if (null !== $this->eventLogPath) {
            $res['EventLogPath'] = $this->eventLogPath;
        }
        if (null !== $this->finished) {
            $res['Finished'] = $this->finished;
        }
        if (null !== $this->scanMetrics) {
            $res['ScanMetrics'] = null !== $this->scanMetrics ? $this->scanMetrics->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AttemptId'])) {
            $model->attemptId = $map['AttemptId'];
        }
        if (isset($map['EventLogPath'])) {
            $model->eventLogPath = $map['EventLogPath'];
        }
        if (isset($map['Finished'])) {
            $model->finished = $map['Finished'];
        }
        if (isset($map['ScanMetrics'])) {
            $model->scanMetrics = scanMetrics::fromMap($map['ScanMetrics']);
        }

        return $model;
    }
}
