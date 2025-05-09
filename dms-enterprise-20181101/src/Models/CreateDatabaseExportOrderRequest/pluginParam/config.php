<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDatabaseExportOrderRequest\pluginParam;

use AlibabaCloud\Dara\Model;

class config extends Model
{
    /**
     * @var string[]
     */
    public $dataOption;

    /**
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
     * @var string
     */
    public $targetOption;
    protected $_name = [
        'dataOption' => 'DataOption',
        'exportContent' => 'ExportContent',
        'exportTypes' => 'ExportTypes',
        'SQLExtOption' => 'SQLExtOption',
        'selectedTables' => 'SelectedTables',
        'tables' => 'Tables',
        'targetOption' => 'TargetOption',
    ];

    public function validate()
    {
        if (\is_array($this->dataOption)) {
            Model::validateArray($this->dataOption);
        }
        if (\is_array($this->exportTypes)) {
            Model::validateArray($this->exportTypes);
        }
        if (\is_array($this->SQLExtOption)) {
            Model::validateArray($this->SQLExtOption);
        }
        if (\is_array($this->selectedTables)) {
            Model::validateArray($this->selectedTables);
        }
        if (\is_array($this->tables)) {
            Model::validateArray($this->tables);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataOption) {
            if (\is_array($this->dataOption)) {
                $res['DataOption'] = [];
                $n1 = 0;
                foreach ($this->dataOption as $item1) {
                    $res['DataOption'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->exportContent) {
            $res['ExportContent'] = $this->exportContent;
        }

        if (null !== $this->exportTypes) {
            if (\is_array($this->exportTypes)) {
                $res['ExportTypes'] = [];
                $n1 = 0;
                foreach ($this->exportTypes as $item1) {
                    $res['ExportTypes'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->SQLExtOption) {
            if (\is_array($this->SQLExtOption)) {
                $res['SQLExtOption'] = [];
                $n1 = 0;
                foreach ($this->SQLExtOption as $item1) {
                    $res['SQLExtOption'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->selectedTables) {
            if (\is_array($this->selectedTables)) {
                $res['SelectedTables'] = [];
                $n1 = 0;
                foreach ($this->selectedTables as $item1) {
                    $res['SelectedTables'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->tables) {
            if (\is_array($this->tables)) {
                $res['Tables'] = [];
                foreach ($this->tables as $key1 => $value1) {
                    $res['Tables'][$key1] = $value1;
                }
            }
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
        if (isset($map['DataOption'])) {
            if (!empty($map['DataOption'])) {
                $model->dataOption = [];
                $n1 = 0;
                foreach ($map['DataOption'] as $item1) {
                    $model->dataOption[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ExportContent'])) {
            $model->exportContent = $map['ExportContent'];
        }

        if (isset($map['ExportTypes'])) {
            if (!empty($map['ExportTypes'])) {
                $model->exportTypes = [];
                $n1 = 0;
                foreach ($map['ExportTypes'] as $item1) {
                    $model->exportTypes[$n1++] = $item1;
                }
            }
        }

        if (isset($map['SQLExtOption'])) {
            if (!empty($map['SQLExtOption'])) {
                $model->SQLExtOption = [];
                $n1 = 0;
                foreach ($map['SQLExtOption'] as $item1) {
                    $model->SQLExtOption[$n1++] = $item1;
                }
            }
        }

        if (isset($map['SelectedTables'])) {
            if (!empty($map['SelectedTables'])) {
                $model->selectedTables = [];
                $n1 = 0;
                foreach ($map['SelectedTables'] as $item1) {
                    $model->selectedTables[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Tables'])) {
            if (!empty($map['Tables'])) {
                $model->tables = [];
                foreach ($map['Tables'] as $key1 => $value1) {
                    $model->tables[$key1] = $value1;
                }
            }
        }

        if (isset($map['TargetOption'])) {
            $model->targetOption = $map['TargetOption'];
        }

        return $model;
    }
}
