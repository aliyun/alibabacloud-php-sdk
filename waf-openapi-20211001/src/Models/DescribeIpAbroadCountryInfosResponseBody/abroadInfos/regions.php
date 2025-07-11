<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeIpAbroadCountryInfosResponseBody\abroadInfos;

use AlibabaCloud\Tea\Model;

class regions extends Model
{
    /**
     * @example US-CA
     *
     * @var string
     */
    public $abroadRegionId;

    /**
     * @example 加利福尼亚州
     *
     * @var string
     */
    public $abroadRegionName;
    protected $_name = [
        'abroadRegionId' => 'AbroadRegionId',
        'abroadRegionName' => 'AbroadRegionName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->abroadRegionId) {
            $res['AbroadRegionId'] = $this->abroadRegionId;
        }
        if (null !== $this->abroadRegionName) {
            $res['AbroadRegionName'] = $this->abroadRegionName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return regions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AbroadRegionId'])) {
            $model->abroadRegionId = $map['AbroadRegionId'];
        }
        if (isset($map['AbroadRegionName'])) {
            $model->abroadRegionName = $map['AbroadRegionName'];
        }

        return $model;
    }
}
