<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnRegionAndIspResponseBody\isps;

use AlibabaCloud\Tea\Model;

class isp extends Model
{
    /**
     * @description The English name of the ISP.
     *
     * @example unicom
     *
     * @var string
     */
    public $nameEn;

    /**
     * @description The Chinese name of the ISP.
     *
     * @var string
     */
    public $nameZh;
    protected $_name = [
        'nameEn' => 'NameEn',
        'nameZh' => 'NameZh',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->nameEn) {
            $res['NameEn'] = $this->nameEn;
        }
        if (null !== $this->nameZh) {
            $res['NameZh'] = $this->nameZh;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return isp
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NameEn'])) {
            $model->nameEn = $map['NameEn'];
        }
        if (isset($map['NameZh'])) {
            $model->nameZh = $map['NameZh'];
        }

        return $model;
    }
}
