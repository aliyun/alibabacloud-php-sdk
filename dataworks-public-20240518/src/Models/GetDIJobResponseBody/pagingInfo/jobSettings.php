<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDIJobResponseBody\pagingInfo;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDIJobResponseBody\pagingInfo\jobSettings\columnDataTypeSettings;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDIJobResponseBody\pagingInfo\jobSettings\cycleScheduleSettings;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDIJobResponseBody\pagingInfo\jobSettings\ddlHandlingSettings;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDIJobResponseBody\pagingInfo\jobSettings\runtimeSettings;
use AlibabaCloud\Tea\Model;

class jobSettings extends Model
{
    /**
     * @description The channel control settings for the synchronization task. You can configure special channel control settings for the following synchronization links: data synchronization between Hologres data sources and data synchronization from Hologres to Kafka.
     *
     * 1.  Holo2Kafka
     *
     *   Example: {"destinationChannelSettings":{"kafkaClientProperties":[{"key":"linger.ms","value":"100"}],"keyColumns":["col3"],"writeMode":"canal"}}
     *   kafkaClientProperties: the parameters related to a Kafka producer, which are used when you write data to a Kafka data source.
     *   keyColumns: the names of Kafka columns to which data is written.
     *   writeMode: the writing format. Valid values: json and canal.
     *
     * 2.  Holo2Holo
     *
     *   Example: {"destinationChannelSettings":{"conflictMode":"replace","dynamicColumnAction":"replay","writeMode":"replay"}}
     *   conflictMode: the policy used to handle a conflict that occurs during data writing to Hologres. Valid values: replace and ignore.
     *   writeMode: the mode in which data is written to Hologres. Valid values: replay and insert.
     *   dynamicColumnAction: the mode in which data is written to dynamic columns in a Hologres table. Valid values: replay, insert, and ignore.
     *
     * @example {"structInfo":"MANAGED","storageType":"TEXTFILE","writeMode":"APPEND","partitionColumns":[{"columnName":"pt","columnType":"STRING","comment":""}],"fieldDelimiter":""}
     *
     * @var string
     */
    public $channelSettings;

    /**
     * @description The data type mappings between source fields and destination fields.
     *
     * @var columnDataTypeSettings[]
     */
    public $columnDataTypeSettings;

    /**
     * @description The settings for periodic scheduling.
     *
     * @var cycleScheduleSettings
     */
    public $cycleScheduleSettings;

    /**
     * @description The DDL operation types. Valid values:
     *
     *   RenameColumn
     *   ModifyColumn
     *   CreateTable
     *   TruncateTable
     *   DropTable
     *   DropColumn
     *   AddColumn
     *
     * @var ddlHandlingSettings[]
     */
    public $ddlHandlingSettings;

    /**
     * @description The runtime settings.
     *
     * @var runtimeSettings[]
     */
    public $runtimeSettings;
    protected $_name = [
        'channelSettings' => 'ChannelSettings',
        'columnDataTypeSettings' => 'ColumnDataTypeSettings',
        'cycleScheduleSettings' => 'CycleScheduleSettings',
        'ddlHandlingSettings' => 'DdlHandlingSettings',
        'runtimeSettings' => 'RuntimeSettings',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->channelSettings) {
            $res['ChannelSettings'] = $this->channelSettings;
        }
        if (null !== $this->columnDataTypeSettings) {
            $res['ColumnDataTypeSettings'] = [];
            if (null !== $this->columnDataTypeSettings && \is_array($this->columnDataTypeSettings)) {
                $n = 0;
                foreach ($this->columnDataTypeSettings as $item) {
                    $res['ColumnDataTypeSettings'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->cycleScheduleSettings) {
            $res['CycleScheduleSettings'] = null !== $this->cycleScheduleSettings ? $this->cycleScheduleSettings->toMap() : null;
        }
        if (null !== $this->ddlHandlingSettings) {
            $res['DdlHandlingSettings'] = [];
            if (null !== $this->ddlHandlingSettings && \is_array($this->ddlHandlingSettings)) {
                $n = 0;
                foreach ($this->ddlHandlingSettings as $item) {
                    $res['DdlHandlingSettings'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->runtimeSettings) {
            $res['RuntimeSettings'] = [];
            if (null !== $this->runtimeSettings && \is_array($this->runtimeSettings)) {
                $n = 0;
                foreach ($this->runtimeSettings as $item) {
                    $res['RuntimeSettings'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return jobSettings
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChannelSettings'])) {
            $model->channelSettings = $map['ChannelSettings'];
        }
        if (isset($map['ColumnDataTypeSettings'])) {
            if (!empty($map['ColumnDataTypeSettings'])) {
                $model->columnDataTypeSettings = [];
                $n = 0;
                foreach ($map['ColumnDataTypeSettings'] as $item) {
                    $model->columnDataTypeSettings[$n++] = null !== $item ? columnDataTypeSettings::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CycleScheduleSettings'])) {
            $model->cycleScheduleSettings = cycleScheduleSettings::fromMap($map['CycleScheduleSettings']);
        }
        if (isset($map['DdlHandlingSettings'])) {
            if (!empty($map['DdlHandlingSettings'])) {
                $model->ddlHandlingSettings = [];
                $n = 0;
                foreach ($map['DdlHandlingSettings'] as $item) {
                    $model->ddlHandlingSettings[$n++] = null !== $item ? ddlHandlingSettings::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RuntimeSettings'])) {
            if (!empty($map['RuntimeSettings'])) {
                $model->runtimeSettings = [];
                $n = 0;
                foreach ($map['RuntimeSettings'] as $item) {
                    $model->runtimeSettings[$n++] = null !== $item ? runtimeSettings::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
