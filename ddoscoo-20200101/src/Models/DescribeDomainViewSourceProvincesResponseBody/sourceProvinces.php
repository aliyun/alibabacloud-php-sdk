<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainViewSourceProvincesResponseBody;

use AlibabaCloud\Tea\Model;

class sourceProvinces extends Model
{
    /**
     * @description The total number of requests.
     *
     * @example 3390671
     *
     * @var int
     */
    public $count;

    /**
     * @description The ID of the region inside China. For more information, see the **Codes of administrative regions in China** section of the [Codes of administrative regions in China and codes of countries and areas](~~167926~~) topic. For example, **110000** indicates Beijing, and **120000** indicates Tianjin.
     *
     * @example 440000
     *
     * @var string
     */
    public $provinceId;
    protected $_name = [
        'count'      => 'Count',
        'provinceId' => 'ProvinceId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return sourceProvinces
     */
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
