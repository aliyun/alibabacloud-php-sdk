<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Tea\Model;

class GetPartitionsHeatmapRequest extends Model
{
    /**
     * @description The reserved parameter.
     *
     * @example None
     *
     * @var string
     */
    public $consoleContext;

    /**
     * @description The instance ID.
     *
     * @example pxc-hzrciqy62c****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The time range to be queried. Valid values:
     *
     *   **LAST_ONE_HOURS**: the last hour.
     *   **LAST_SIX_HOURS**: the last six hours.
     *   **LAST_ONE_DAYS**: the last day.
     *   **LAST_THREE_DAYS**: the last three days.
     *   **LAST_SEVEN_DAYS**: the last seven days.
     *
     * @example LAST_SIX_HOURS
     *
     * @var string
     */
    public $timeRange;

    /**
     * @description The type of the data to be queried. Valid values:
     *
     *   **READ_ROWS**: the read rows.
     *   **WRITTEN_ROWS**: the written rows.
     *   **READ_WRITTEN_ROWS**: the read and written rows.
     *   **UPDATE_ROWS**: the updated rows.
     *   **INSERTED_ROWS**: the inserted rows.
     *   **DELETED_ROWS**: the deleted rows.
     *   **READ_ROWS_WITH_DN**: the read rows returned from a data node.
     *   **WRITTEN_ROWS_WITH_DN**: the written rows returned from a data node.
     *   **READ_WRITTEN_ROWS_WITH_DN**: the read and written rows returned from a data node.
     *
     * @example WRITTEN_ROWS_WITH_DN
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'consoleContext' => 'ConsoleContext',
        'instanceId'     => 'InstanceId',
        'timeRange'      => 'TimeRange',
        'type'           => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->consoleContext) {
            $res['ConsoleContext'] = $this->consoleContext;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->timeRange) {
            $res['TimeRange'] = $this->timeRange;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPartitionsHeatmapRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConsoleContext'])) {
            $model->consoleContext = $map['ConsoleContext'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['TimeRange'])) {
            $model->timeRange = $map['TimeRange'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
