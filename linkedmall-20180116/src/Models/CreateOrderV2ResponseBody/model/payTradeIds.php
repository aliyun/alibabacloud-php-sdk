<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\CreateOrderV2ResponseBody\model;

use AlibabaCloud\Tea\Model;

class payTradeIds extends Model
{
    /**
     * @var string[]
     */
    public $payTradeIds;
    protected $_name = [
        'payTradeIds' => 'PayTradeIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->payTradeIds) {
            $res['PayTradeIds'] = $this->payTradeIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return payTradeIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PayTradeIds'])) {
            if (!empty($map['PayTradeIds'])) {
                $model->payTradeIds = $map['PayTradeIds'];
            }
        }

        return $model;
    }
}
