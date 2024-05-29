<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribePortViewSourceProvincesResponseBody;

use AlibabaCloud\Tea\Model;

class sourceProvinces extends Model
{
    /**
     * @description The total number of requests that are sent from the ISP.
     *
     * > This parameter does not indicate the accurate number of requests. You can use this parameter to calculate the proportion of requests from different administrative regions in China.
     * @example 3390671
     *
     * @var int
     */
    public $count;

    /**
     * @description The ID of the administrative region in China from which the requests are sent. For example, **110000** indicates Beijing, and **120000** indicates Tianjin.
     *
     * > For more information, see [Location parameters](https://help.aliyun.com/document_detail/167926.html).
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
