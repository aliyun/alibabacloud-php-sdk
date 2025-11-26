<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsCommodityCodeResponseBody;

use AlibabaCloud\Dara\Model;

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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
