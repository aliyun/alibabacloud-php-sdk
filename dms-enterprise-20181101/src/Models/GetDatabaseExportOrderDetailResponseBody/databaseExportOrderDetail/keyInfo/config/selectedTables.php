<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDatabaseExportOrderDetailResponseBody\databaseExportOrderDetail\keyInfo\config;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->selectedTables) {
            $res['SelectedTables'] = $this->selectedTables;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return selectedTables
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SelectedTables'])) {
            if (!empty($map['SelectedTables'])) {
                $model->selectedTables = $map['SelectedTables'];
            }
        }

        return $model;
    }
}
