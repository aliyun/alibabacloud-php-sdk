<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribePortViewSourceProvincesResponseBody;

use AlibabaCloud\Tea\Model;

class sourceProvinces extends Model
{
    /**
     * @var string
     */
    public $provinceId;

    /**
     * @var int
     */
    public $count;
    protected $_name = [
        'provinceId' => 'ProvinceId',
        'count'      => 'Count',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->provinceId) {
            $res['ProvinceId'] = $this->provinceId;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sourceProvinces
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProvinceId'])) {
            $model->provinceId = $map['ProvinceId'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        return $model;
    }
}
