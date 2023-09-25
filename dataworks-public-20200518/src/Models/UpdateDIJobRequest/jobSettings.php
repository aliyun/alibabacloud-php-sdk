<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateDIJobRequest;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateDIJobRequest\jobSettings\columnDataTypeSettings;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateDIJobRequest\jobSettings\ddlHandlingSettings;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateDIJobRequest\jobSettings\runtimeSettings;
use AlibabaCloud\Tea\Model;

class jobSettings extends Model
{
    /**
     * @var columnDataTypeSettings[]
     */
    public $columnDataTypeSettings;

    /**
     * @var ddlHandlingSettings[]
     */
    public $ddlHandlingSettings;

    /**
     * @var runtimeSettings[]
     */
    public $runtimeSettings;
    protected $_name = [
        'columnDataTypeSettings' => 'ColumnDataTypeSettings',
        'ddlHandlingSettings'    => 'DdlHandlingSettings',
        'runtimeSettings'        => 'RuntimeSettings',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->columnDataTypeSettings) {
            $res['ColumnDataTypeSettings'] = [];
            if (null !== $this->columnDataTypeSettings && \is_array($this->columnDataTypeSettings)) {
                $n = 0;
                foreach ($this->columnDataTypeSettings as $item) {
                    $res['ColumnDataTypeSettings'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['ColumnDataTypeSettings'])) {
            if (!empty($map['ColumnDataTypeSettings'])) {
                $model->columnDataTypeSettings = [];
                $n                             = 0;
                foreach ($map['ColumnDataTypeSettings'] as $item) {
                    $model->columnDataTypeSettings[$n++] = null !== $item ? columnDataTypeSettings::fromMap($item) : $item;
                }
            }
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
