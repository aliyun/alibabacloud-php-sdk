<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;

class DescribeEnsNetSaleDistrictRequest extends Model
{
    /**
     * @var string
     */
    public $netDistrictCode;

    /**
     * @var string
     */
    public $netLevelCode;
    protected $_name = [
        'netDistrictCode' => 'NetDistrictCode',
        'netLevelCode' => 'NetLevelCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->netDistrictCode) {
            $res['NetDistrictCode'] = $this->netDistrictCode;
        }

        if (null !== $this->netLevelCode) {
            $res['NetLevelCode'] = $this->netLevelCode;
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
        if (isset($map['NetDistrictCode'])) {
            $model->netDistrictCode = $map['NetDistrictCode'];
        }

        if (isset($map['NetLevelCode'])) {
            $model->netLevelCode = $map['NetLevelCode'];
        }

        return $model;
    }
}
