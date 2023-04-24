<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDatabaseExportOrderRequest\pluginParam;

use AlibabaCloud\Tea\Model;

class config extends Model
{
    /**
     * @var string[]
     */
    public $dataOption;

    /**
     * @example DATA
     *
     * @var string
     */
    public $exportContent;

    /**
     * @var string[]
     */
    public $exportTypes;

    /**
     * @var string[]
     */
    public $SQLExtOption;

    /**
     * @var string[]
     */
    public $selectedTables;

    /**
     * @var string[]
     */
    public $tables;

    /**
     * @example SQL
     *
     * @var string
     */
    public $targetOption;
    protected $_name = [
        'dataOption'     => 'DataOption',
        'exportContent'  => 'ExportContent',
        'exportTypes'    => 'ExportTypes',
        'SQLExtOption'   => 'SQLExtOption',
        'selectedTables' => 'SelectedTables',
        'tables'         => 'Tables',
        'targetOption'   => 'TargetOption',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataOption) {
            $res['DataOption'] = $this->dataOption;
        }
        if (null !== $this->exportContent) {
            $res['ExportContent'] = $this->exportContent;
        }
        if (null !== $this->exportTypes) {
            $res['ExportTypes'] = $this->exportTypes;
        }
        if (null !== $this->SQLExtOption) {
            $res['SQLExtOption'] = $this->SQLExtOption;
        }
        if (null !== $this->selectedTables) {
            $res['SelectedTables'] = $this->selectedTables;
        }
        if (null !== $this->tables) {
            $res['Tables'] = $this->tables;
        }
        if (null !== $this->targetOption) {
            $res['TargetOption'] = $this->targetOption;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return config
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataOption'])) {
            if (!empty($map['DataOption'])) {
                $model->dataOption = $map['DataOption'];
            }
        }
        if (isset($map['ExportContent'])) {
            $model->exportContent = $map['ExportContent'];
        }
        if (isset($map['ExportTypes'])) {
            if (!empty($map['ExportTypes'])) {
                $model->exportTypes = $map['ExportTypes'];
            }
        }
        if (isset($map['SQLExtOption'])) {
            if (!empty($map['SQLExtOption'])) {
                $model->SQLExtOption = $map['SQLExtOption'];
            }
        }
        if (isset($map['SelectedTables'])) {
            if (!empty($map['SelectedTables'])) {
                $model->selectedTables = $map['SelectedTables'];
            }
        }
        if (isset($map['Tables'])) {
            $model->tables = $map['Tables'];
        }
        if (isset($map['TargetOption'])) {
            $model->targetOption = $map['TargetOption'];
        }

        return $model;
    }
}
