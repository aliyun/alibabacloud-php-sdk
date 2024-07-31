<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateDIJobRequest;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateDIJobRequest\jobSettings\columnDataTypeSettings;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateDIJobRequest\jobSettings\cycleScheduleSettings;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateDIJobRequest\jobSettings\ddlHandlingSettings;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateDIJobRequest\jobSettings\importRuleSettings;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateDIJobRequest\jobSettings\runtimeSettings;
use AlibabaCloud\Tea\Model;

class jobSettings extends Model
{
    /**
     * @description The channel control settings for the synchronization task. The value of this parameter must be a JSON string.
     *
     * @example {"structInfo":"MANAGED","storageType":"TEXTFILE","writeMode":"APPEND","partitionColumns":[{"columnName":"pt","columnType":"STRING","comment":""}],"fieldDelimiter":""}
     *
     * @var string
     */
    public $channelSettings;

    /**
     * @description The settings for data type mappings between source fields and destination fields. The value of this parameter must be an array.
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
     * @description The processing settings for DDL messages.
     *
     * @var ddlHandlingSettings[]
     */
    public $ddlHandlingSettings;

    /**
     * @description The import settings for the synchronization task.
     *
     * @var importRuleSettings
     */
    public $importRuleSettings;

    /**
     * @description The runtime settings. The value of this parameter must be an array.
     *
     * @var runtimeSettings[]
     */
    public $runtimeSettings;
    protected $_name = [
        'channelSettings'        => 'ChannelSettings',
        'columnDataTypeSettings' => 'ColumnDataTypeSettings',
        'cycleScheduleSettings'  => 'CycleScheduleSettings',
        'ddlHandlingSettings'    => 'DdlHandlingSettings',
        'importRuleSettings'     => 'ImportRuleSettings',
        'runtimeSettings'        => 'RuntimeSettings',
    ];

    public function validate()
    {
    }

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
        if (null !== $this->importRuleSettings) {
            $res['ImportRuleSettings'] = null !== $this->importRuleSettings ? $this->importRuleSettings->toMap() : null;
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
                $n                             = 0;
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
                $n                          = 0;
                foreach ($map['DdlHandlingSettings'] as $item) {
                    $model->ddlHandlingSettings[$n++] = null !== $item ? ddlHandlingSettings::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ImportRuleSettings'])) {
            $model->importRuleSettings = importRuleSettings::fromMap($map['ImportRuleSettings']);
        }
        if (isset($map['RuntimeSettings'])) {
            if (!empty($map['RuntimeSettings'])) {
                $model->runtimeSettings = [];
                $n                      = 0;
                foreach ($map['RuntimeSettings'] as $item) {
                    $model->runtimeSettings[$n++] = null !== $item ? runtimeSettings::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
