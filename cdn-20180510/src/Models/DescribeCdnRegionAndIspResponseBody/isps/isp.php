<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnRegionAndIspResponseBody\isps;

use AlibabaCloud\Dara\Model;

class isp extends Model
{
    /**
     * @var string
     */
    public $nameEn;

    /**
     * @var string
     */
    public $nameZh;
    protected $_name = [
        'nameEn' => 'NameEn',
        'nameZh' => 'NameZh',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
