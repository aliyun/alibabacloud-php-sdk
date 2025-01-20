<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDatabaseExportOrderDetailResponseBody\databaseExportOrderDetail\keyInfo\config;

use AlibabaCloud\Dara\Model;

class selectedTables extends Model
{
    /**
     * @var string[]
     */
    public $selectedTables;
    protected $_name = [
        'selectedTables' => 'SelectedTables',
    ];

    public function validate()
    {
        if (\is_array($this->selectedTables)) {
            Model::validateArray($this->selectedTables);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->selectedTables) {
            if (\is_array($this->selectedTables)) {
                $res['SelectedTables'] = [];
                $n1                    = 0;
                foreach ($this->selectedTables as $item1) {
                    $res['SelectedTables'][$n1++] = $item1;
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
        if (isset($map['SelectedTables'])) {
            if (!empty($map['SelectedTables'])) {
                $model->selectedTables = [];
                $n1                    = 0;
                foreach ($map['SelectedTables'] as $item1) {
                    $model->selectedTables[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
