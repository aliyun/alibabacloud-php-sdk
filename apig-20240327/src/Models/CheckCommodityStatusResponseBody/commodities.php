<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\CheckCommodityStatusResponseBody;

use AlibabaCloud\Dara\Model;

class commodities extends Model
{
    /**
     * @var string
     */
    public $commodityCode;

    /**
     * @var bool
     */
    public $enable;
    protected $_name = [
        'commodityCode' => 'commodityCode',
        'enable' => 'enable',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->commodityCode) {
            $res['commodityCode'] = $this->commodityCode;
        }

        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
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
        if (isset($map['commodityCode'])) {
            $model->commodityCode = $map['commodityCode'];
        }

        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }

        return $model;
    }
}
