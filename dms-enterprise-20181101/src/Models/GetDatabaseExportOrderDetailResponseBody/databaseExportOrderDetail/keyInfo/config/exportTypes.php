<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDatabaseExportOrderDetailResponseBody\databaseExportOrderDetail\keyInfo\config;

use AlibabaCloud\Dara\Model;

class exportTypes extends Model
{
    /**
     * @var string[]
     */
    public $exportTypes;
    protected $_name = [
        'exportTypes' => 'ExportTypes',
    ];

    public function validate()
    {
        if (\is_array($this->exportTypes)) {
            Model::validateArray($this->exportTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->exportTypes) {
            if (\is_array($this->exportTypes)) {
                $res['ExportTypes'] = [];
                $n1                 = 0;
                foreach ($this->exportTypes as $item1) {
                    $res['ExportTypes'][$n1++] = $item1;
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
        if (isset($map['ExportTypes'])) {
            if (!empty($map['ExportTypes'])) {
                $model->exportTypes = [];
                $n1                 = 0;
                foreach ($map['ExportTypes'] as $item1) {
                    $model->exportTypes[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
