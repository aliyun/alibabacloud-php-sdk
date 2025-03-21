<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateDiagnosticTaskRequest;

use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateDiagnosticTaskRequest\aiJobLogInfo\aiJobLogs;
use AlibabaCloud\Tea\Model;

class aiJobLogInfo extends Model
{
    /**
     * @description Task logs
     *
     * @var aiJobLogs[]
     */
    public $aiJobLogs;

    /**
     * @description End time. In timestamp format, unit: seconds.
     * > Must be on the hour or half-hour mark.
     *
     * @example 2024-08-05T10:10:01
     *
     * @var string
     */
    public $endTime;

    /**
     * @description Start time. In timestamp format, unit: seconds.
     * > Must be on the hour or half-hour mark.
     *
     * @example 2024-10-11T00:00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'aiJobLogs' => 'AiJobLogs',
        'endTime' => 'EndTime',
        'startTime' => 'StartTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->aiJobLogs) {
            $res['AiJobLogs'] = [];
            if (null !== $this->aiJobLogs && \is_array($this->aiJobLogs)) {
                $n = 0;
                foreach ($this->aiJobLogs as $item) {
                    $res['AiJobLogs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return aiJobLogInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AiJobLogs'])) {
            if (!empty($map['AiJobLogs'])) {
                $model->aiJobLogs = [];
                $n = 0;
                foreach ($map['AiJobLogs'] as $item) {
                    $model->aiJobLogs[$n++] = null !== $item ? aiJobLogs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
