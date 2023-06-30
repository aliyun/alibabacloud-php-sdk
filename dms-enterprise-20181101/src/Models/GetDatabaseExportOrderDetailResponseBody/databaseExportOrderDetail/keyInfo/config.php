<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDatabaseExportOrderDetailResponseBody\databaseExportOrderDetail\keyInfo;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDatabaseExportOrderDetailResponseBody\databaseExportOrderDetail\keyInfo\config\exportTypes;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDatabaseExportOrderDetailResponseBody\databaseExportOrderDetail\keyInfo\config\selectedTables;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDatabaseExportOrderDetailResponseBody\databaseExportOrderDetail\keyInfo\config\SQLExtOption;
use AlibabaCloud\Tea\Model;

class config extends Model
{
    /**
     * @description The database name.
     *
     * @example dmstest
     *
     * @var string
     */
    public $dbName;

    /**
     * @description The type of data that was exported. Valid values:
     *
     *   **DATA**: The data of the database was exported.
     *   **STRUCT**: The schema of the database was exported.
     *   **DATA_STRUCT**: The data and schema of the database were exported.
     *
     * @example DATA
     *
     * @var string
     */
    public $exportContent;

    /**
     * @description The type of schema that was exported.
     *
     * @var exportTypes
     */
    public $exportTypes;

    /**
     * @description The extension options of the SQL script.
     *
     * @var SQLExtOption
     */
    public $SQLExtOption;

    /**
     * @description The tables that were exported from the database.
     *
     * @var selectedTables
     */
    public $selectedTables;

    /**
     * @description The format in which the database was exported. Valid values:
     *
     *   **SQL**
     *   **CSV**
     *   **XLSX**
     *
     * @example SQL
     *
     * @var string
     */
    public $targetOption;
    protected $_name = [
        'dbName'         => 'DbName',
        'exportContent'  => 'ExportContent',
        'exportTypes'    => 'ExportTypes',
        'SQLExtOption'   => 'SQLExtOption',
        'selectedTables' => 'SelectedTables',
        'targetOption'   => 'TargetOption',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->exportContent) {
            $res['ExportContent'] = $this->exportContent;
        }
        if (null !== $this->exportTypes) {
            $res['ExportTypes'] = null !== $this->exportTypes ? $this->exportTypes->toMap() : null;
        }
        if (null !== $this->SQLExtOption) {
            $res['SQLExtOption'] = null !== $this->SQLExtOption ? $this->SQLExtOption->toMap() : null;
        }
        if (null !== $this->selectedTables) {
            $res['SelectedTables'] = null !== $this->selectedTables ? $this->selectedTables->toMap() : null;
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
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['ExportContent'])) {
            $model->exportContent = $map['ExportContent'];
        }
        if (isset($map['ExportTypes'])) {
            $model->exportTypes = exportTypes::fromMap($map['ExportTypes']);
        }
        if (isset($map['SQLExtOption'])) {
            $model->SQLExtOption = SQLExtOption::fromMap($map['SQLExtOption']);
        }
        if (isset($map['SelectedTables'])) {
            $model->selectedTables = selectedTables::fromMap($map['SelectedTables']);
        }
        if (isset($map['TargetOption'])) {
            $model->targetOption = $map['TargetOption'];
        }

        return $model;
    }
}
