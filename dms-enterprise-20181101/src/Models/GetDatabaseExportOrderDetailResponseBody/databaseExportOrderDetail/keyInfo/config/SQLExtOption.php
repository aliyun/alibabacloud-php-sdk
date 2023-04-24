<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDatabaseExportOrderDetailResponseBody\databaseExportOrderDetail\keyInfo\config;

use AlibabaCloud\Tea\Model;

class SQLExtOption extends Model
{
    /**
     * @var string[]
     */
    public $SQLExtOption;
    protected $_name = [
        'SQLExtOption' => 'SQLExtOption',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->SQLExtOption) {
            $res['SQLExtOption'] = $this->SQLExtOption;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SQLExtOption
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SQLExtOption'])) {
            if (!empty($map['SQLExtOption'])) {
                $model->SQLExtOption = $map['SQLExtOption'];
            }
        }

        return $model;
    }
}
