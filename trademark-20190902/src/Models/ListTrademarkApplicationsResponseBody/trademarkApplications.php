<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20190902\Models\ListTrademarkApplicationsResponseBody;

use AlibabaCloud\SDK\Trademark\V20190902\Models\ListTrademarkApplicationsResponseBody\trademarkApplications\trademarkApplication;
use AlibabaCloud\Tea\Model;

class trademarkApplications extends Model
{
    /**
     * @var trademarkApplication[]
     */
    public $trademarkApplication;
    protected $_name = [
        'trademarkApplication' => 'TrademarkApplication',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->trademarkApplication) {
            $res['TrademarkApplication'] = [];
            if (null !== $this->trademarkApplication && \is_array($this->trademarkApplication)) {
                $n = 0;
                foreach ($this->trademarkApplication as $item) {
                    $res['TrademarkApplication'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return trademarkApplications
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TrademarkApplication'])) {
            if (!empty($map['TrademarkApplication'])) {
                $model->trademarkApplication = [];
                $n                           = 0;
                foreach ($map['TrademarkApplication'] as $item) {
                    $model->trademarkApplication[$n++] = null !== $item ? trademarkApplication::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
