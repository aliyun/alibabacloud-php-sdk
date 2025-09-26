<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetPermApplyOrderDetailResponseBody\permApplyOrderDetail\resources;

use AlibabaCloud\Dara\Model;

class rowValueInfo extends Model
{
    /**
     * @var string
     */
    public $rowValue;
    protected $_name = [
        'rowValue' => 'RowValue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->rowValue) {
            $res['RowValue'] = $this->rowValue;
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
        if (isset($map['RowValue'])) {
            $model->rowValue = $map['RowValue'];
        }

        return $model;
    }
}
