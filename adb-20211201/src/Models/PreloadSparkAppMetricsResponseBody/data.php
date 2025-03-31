<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\PreloadSparkAppMetricsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20211201\Models\PreloadSparkAppMetricsResponseBody\data\scanMetrics;

class data extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $attemptId;

    /**
     * @var string
     */
    public $eventLogPath;

    /**
     * @var bool
     */
    public $finished;

    /**
     * @var scanMetrics
     */
    public $scanMetrics;
    protected $_name = [
        'appId' => 'AppId',
        'attemptId' => 'AttemptId',
        'eventLogPath' => 'EventLogPath',
        'finished' => 'Finished',
        'scanMetrics' => 'ScanMetrics',
    ];

    public function validate()
    {
        if (null !== $this->scanMetrics) {
            $this->scanMetrics->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['ScanMetrics'] = null !== $this->scanMetrics ? $this->scanMetrics->toArray($noStream) : $this->scanMetrics;
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
