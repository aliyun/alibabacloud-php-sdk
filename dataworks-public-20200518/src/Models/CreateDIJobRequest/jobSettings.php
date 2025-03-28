<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateDIJobRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateDIJobRequest\jobSettings\columnDataTypeSettings;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateDIJobRequest\jobSettings\cycleScheduleSettings;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateDIJobRequest\jobSettings\ddlHandlingSettings;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateDIJobRequest\jobSettings\importRuleSettings;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateDIJobRequest\jobSettings\runtimeSettings;

class jobSettings extends Model
{
    /**
     * @var string
     */
    public $channelSettings;

    /**
     * @var columnDataTypeSettings[]
     */
    public $columnDataTypeSettings;

    /**
     * @var cycleScheduleSettings
     */
    public $cycleScheduleSettings;

    /**
     * @var ddlHandlingSettings[]
     */
    public $ddlHandlingSettings;

    /**
     * @var importRuleSettings
     */
    public $importRuleSettings;

    /**
     * @var runtimeSettings[]
     */
    public $runtimeSettings;
    protected $_name = [
        'channelSettings' => 'ChannelSettings',
        'columnDataTypeSettings' => 'ColumnDataTypeSettings',
        'cycleScheduleSettings' => 'CycleScheduleSettings',
        'ddlHandlingSettings' => 'DdlHandlingSettings',
        'importRuleSettings' => 'ImportRuleSettings',
        'runtimeSettings' => 'RuntimeSettings',
    ];

    public function validate()
    {
        if (\is_array($this->columnDataTypeSettings)) {
            Model::validateArray($this->columnDataTypeSettings);
        }
        if (null !== $this->cycleScheduleSettings) {
            $this->cycleScheduleSettings->validate();
        }
        if (\is_array($this->ddlHandlingSettings)) {
            Model::validateArray($this->ddlHandlingSettings);
        }
        if (null !== $this->importRuleSettings) {
            $this->importRuleSettings->validate();
        }
        if (\is_array($this->runtimeSettings)) {
            Model::validateArray($this->runtimeSettings);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->channelSettings) {
            $res['ChannelSettings'] = $this->channelSettings;
        }

        if (null !== $this->columnDataTypeSettings) {
            if (\is_array($this->columnDataTypeSettings)) {
                $res['ColumnDataTypeSettings'] = [];
                $n1 = 0;
                foreach ($this->columnDataTypeSettings as $item1) {
                    $res['ColumnDataTypeSettings'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->cycleScheduleSettings) {
            $res['CycleScheduleSettings'] = null !== $this->cycleScheduleSettings ? $this->cycleScheduleSettings->toArray($noStream) : $this->cycleScheduleSettings;
        }

        if (null !== $this->ddlHandlingSettings) {
            if (\is_array($this->ddlHandlingSettings)) {
                $res['DdlHandlingSettings'] = [];
                $n1 = 0;
                foreach ($this->ddlHandlingSettings as $item1) {
                    $res['DdlHandlingSettings'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->importRuleSettings) {
            $res['ImportRuleSettings'] = null !== $this->importRuleSettings ? $this->importRuleSettings->toArray($noStream) : $this->importRuleSettings;
        }

        if (null !== $this->runtimeSettings) {
            if (\is_array($this->runtimeSettings)) {
                $res['RuntimeSettings'] = [];
                $n1 = 0;
                foreach ($this->runtimeSettings as $item1) {
                    $res['RuntimeSettings'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['ChannelSettings'])) {
            $model->channelSettings = $map['ChannelSettings'];
        }

        if (isset($map['ColumnDataTypeSettings'])) {
            if (!empty($map['ColumnDataTypeSettings'])) {
                $model->columnDataTypeSettings = [];
                $n1 = 0;
                foreach ($map['ColumnDataTypeSettings'] as $item1) {
                    $model->columnDataTypeSettings[$n1++] = columnDataTypeSettings::fromMap($item1);
                }
            }
        }

        if (isset($map['CycleScheduleSettings'])) {
            $model->cycleScheduleSettings = cycleScheduleSettings::fromMap($map['CycleScheduleSettings']);
        }

        if (isset($map['DdlHandlingSettings'])) {
            if (!empty($map['DdlHandlingSettings'])) {
                $model->ddlHandlingSettings = [];
                $n1 = 0;
                foreach ($map['DdlHandlingSettings'] as $item1) {
                    $model->ddlHandlingSettings[$n1++] = ddlHandlingSettings::fromMap($item1);
                }
            }
        }

        if (isset($map['ImportRuleSettings'])) {
            $model->importRuleSettings = importRuleSettings::fromMap($map['ImportRuleSettings']);
        }

        if (isset($map['RuntimeSettings'])) {
            if (!empty($map['RuntimeSettings'])) {
                $model->runtimeSettings = [];
                $n1 = 0;
                foreach ($map['RuntimeSettings'] as $item1) {
                    $model->runtimeSettings[$n1++] = runtimeSettings::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
