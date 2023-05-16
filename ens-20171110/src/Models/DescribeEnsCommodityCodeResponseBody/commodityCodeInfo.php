<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsCommodityCodeResponseBody;

use AlibabaCloud\Tea\Model;

class commodityCodeInfo extends Model
{
    /**
     * @var string
     */
    public $commodityCode;

    /**
     * @var string
     */
    public $commodityName;
    protected $_name = [
        'commodityCode' => 'CommodityCode',
        'commodityName' => 'CommodityName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->commodityName) {
            $res['CommodityName'] = $this->commodityName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return commodityCodeInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['CommodityName'])) {
            $model->commodityName = $map['CommodityName'];
        }

        return $model;
    }
}
