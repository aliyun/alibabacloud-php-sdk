<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDatabaseExportOrderDetailResponseBody\databaseExportOrderDetail\keyInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDatabaseExportOrderDetailResponseBody\databaseExportOrderDetail\keyInfo\config\exportTypes;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDatabaseExportOrderDetailResponseBody\databaseExportOrderDetail\keyInfo\config\selectedTables;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDatabaseExportOrderDetailResponseBody\databaseExportOrderDetail\keyInfo\config\SQLExtOption;

class config extends Model
{
    /**
     * @var string
     */
    public $dbName;

    /**
     * @var string
     */
    public $exportContent;

    /**
     * @var exportTypes
     */
    public $exportTypes;

    /**
     * @var SQLExtOption
     */
    public $SQLExtOption;

    /**
     * @var selectedTables
     */
    public $selectedTables;

    /**
     * @var string
     */
    public $targetOption;
    protected $_name = [
        'dbName' => 'DbName',
        'exportContent' => 'ExportContent',
        'exportTypes' => 'ExportTypes',
        'SQLExtOption' => 'SQLExtOption',
        'selectedTables' => 'SelectedTables',
        'targetOption' => 'TargetOption',
    ];

    public function validate()
    {
        if (null !== $this->exportTypes) {
            $this->exportTypes->validate();
        }
        if (null !== $this->SQLExtOption) {
            $this->SQLExtOption->validate();
        }
        if (null !== $this->selectedTables) {
            $this->selectedTables->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }

        if (null !== $this->exportContent) {
            $res['ExportContent'] = $this->exportContent;
        }

        if (null !== $this->exportTypes) {
            $res['ExportTypes'] = null !== $this->exportTypes ? $this->exportTypes->toArray($noStream) : $this->exportTypes;
        }

        if (null !== $this->SQLExtOption) {
            $res['SQLExtOption'] = null !== $this->SQLExtOption ? $this->SQLExtOption->toArray($noStream) : $this->SQLExtOption;
        }

        if (null !== $this->selectedTables) {
            $res['SelectedTables'] = null !== $this->selectedTables ? $this->selectedTables->toArray($noStream) : $this->selectedTables;
        }

        if (null !== $this->targetOption) {
            $res['TargetOption'] = $this->targetOption;
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
