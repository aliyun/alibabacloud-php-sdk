<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDatabaseExportOrderDetailResponseBody\databaseExportOrderDetail\keyInfo\config;

use AlibabaCloud\Dara\Model;

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
        if (\is_array($this->SQLExtOption)) {
            Model::validateArray($this->SQLExtOption);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->SQLExtOption) {
            if (\is_array($this->SQLExtOption)) {
                $res['SQLExtOption'] = [];
                $n1                  = 0;
                foreach ($this->SQLExtOption as $item1) {
                    $res['SQLExtOption'][$n1++] = $item1;
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
        if (isset($map['SQLExtOption'])) {
            if (!empty($map['SQLExtOption'])) {
                $model->SQLExtOption = [];
                $n1                  = 0;
                foreach ($map['SQLExtOption'] as $item1) {
                    $model->SQLExtOption[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
