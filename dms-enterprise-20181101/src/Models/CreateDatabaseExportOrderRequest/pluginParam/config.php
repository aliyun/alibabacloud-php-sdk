<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDatabaseExportOrderRequest\pluginParam;

use AlibabaCloud\Tea\Model;

class config extends Model
{
    /**
     * @description The export options for big data. The options are used to filter the big data to be exported. You can leave this parameter empty.
     *
     * This parameter is required.
     * @var string[]
     */
    public $dataOption;

    /**
     * @description The type of data that you want to export. Valid values:
     *
     *   **DATA**: The data of the database is exported.
     *   **STRUCT**: The schema of the database is exported.
     *   **DATA_STRUCT**: The data and schema of the database are exported.
     *
     * This parameter is required.
     * @example DATA
     *
     * @var string
     */
    public $exportContent;

    /**
     * @description The types of schemas that you want to export.
     *
     * @var string[]
     */
    public $exportTypes;

    /**
     * @description The extension options of the SQL script. You can leave this parameter empty.
     *
     * This parameter is required.
     * @var string[]
     */
    public $SQLExtOption;

    /**
     * @description The tables that you want to export.
     *
     * @var string[]
     */
    public $selectedTables;

    /**
     * @description The conditions used to filter the tables to be exported.
     *
     * @var string[]
     */
    public $tables;

    /**
     * @description The format in which the database is exported. Valid values:
     *
     *   **SQL**
     *   **CSV**
     *   **XLSX**
     *
     * This parameter is required.
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
