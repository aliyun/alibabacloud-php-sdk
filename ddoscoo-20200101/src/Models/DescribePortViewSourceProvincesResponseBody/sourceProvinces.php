<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribePortViewSourceProvincesResponseBody;

use AlibabaCloud\Dara\Model;

class sourceProvinces extends Model
{
    /**
     * @var int
     */
    public $count;

    /**
     * @var string
     */
    public $provinceId;
    protected $_name = [
        'count' => 'Count',
        'provinceId' => 'ProvinceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->provinceId) {
            $res['ProvinceId'] = $this->provinceId;
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
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['ProvinceId'])) {
            $model->provinceId = $map['ProvinceId'];
        }

        return $model;
    }
}
