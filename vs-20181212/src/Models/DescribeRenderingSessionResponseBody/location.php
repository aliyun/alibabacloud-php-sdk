<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\DescribeRenderingSessionResponseBody;

use AlibabaCloud\Dara\Model;

class location extends Model
{
    /**
     * @var string
     */
    public $provinceCode;
    protected $_name = [
        'provinceCode' => 'ProvinceCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->provinceCode) {
            $res['ProvinceCode'] = $this->provinceCode;
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
        if (isset($map['ProvinceCode'])) {
            $model->provinceCode = $map['ProvinceCode'];
        }

        return $model;
    }
}
