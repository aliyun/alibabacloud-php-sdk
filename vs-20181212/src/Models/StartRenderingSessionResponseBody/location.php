<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\StartRenderingSessionResponseBody;

use AlibabaCloud\Tea\Model;

class location extends Model
{
    /**
     * @example 610000
     *
     * @var string
     */
    public $provinceCode;
    protected $_name = [
        'provinceCode' => 'ProvinceCode',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->provinceCode) {
            $res['ProvinceCode'] = $this->provinceCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return location
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProvinceCode'])) {
            $model->provinceCode = $map['ProvinceCode'];
        }

        return $model;
    }
}
