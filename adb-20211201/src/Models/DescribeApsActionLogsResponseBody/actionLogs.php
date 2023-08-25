<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeApsActionLogsResponseBody;

use AlibabaCloud\Tea\Model;

class actionLogs extends Model
{
    /**
     * @description The content of the log.
     *
     * @example DDL migration job finished
     *
     * @var string
     */
    public $context;

    /**
     * @description The task phase during which the logs are generated. Valid values:
     *
     *   **StructureMigrate**: schema migration.
     *   **FullDataSync**: full data synchronization.
     *   **IncrementalSync**: incremental data synchronization.
     *
     * @example FullDataSync
     *
     * @var string
     */
    public $stage;

    /**
     * @description The type of the log. Multiple log types are separated by commas (,). Valid values:
     *
     *   **INFO**
     *   **WARN**
     *   **ERROR**
     *
     * @example INFO,WARN,ERROR
     *
     * @var string
     */
    public $state;

    /**
     * @description The time when the log is generated. The time follows the ISO 8601 standard in the **yyyy-MM-ddTHH:mm:ssZ** format. The time is displayed in UTC.
     *
     * @example 2023-02-01T05:46:30Z
     *
     * @var string
     */
    public $time;
    protected $_name = [
        'context' => 'Context',
        'stage'   => 'Stage',
        'state'   => 'State',
        'time'    => 'Time',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->context) {
            $res['Context'] = $this->context;
        }
        if (null !== $this->stage) {
            $res['Stage'] = $this->stage;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return actionLogs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Context'])) {
            $model->context = $map['Context'];
        }
        if (isset($map['Stage'])) {
            $model->stage = $map['Stage'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}
