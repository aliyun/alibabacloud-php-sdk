<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeIpAbroadCountryInfosResponseBody\abroadInfos;

use AlibabaCloud\Dara\Model;

class regions extends Model
{
    /**
     * @var string
     */
    public $abroadRegionId;

    /**
     * @var string
     */
    public $abroadRegionName;
    protected $_name = [
        'abroadRegionId' => 'AbroadRegionId',
        'abroadRegionName' => 'AbroadRegionName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
