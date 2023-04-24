<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDatabaseExportOrderDetailResponseBody\databaseExportOrderDetail\keyInfo\config;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->exportTypes) {
            $res['ExportTypes'] = $this->exportTypes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return exportTypes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExportTypes'])) {
            if (!empty($map['ExportTypes'])) {
                $model->exportTypes = $map['ExportTypes'];
            }
        }

        return $model;
    }
}
