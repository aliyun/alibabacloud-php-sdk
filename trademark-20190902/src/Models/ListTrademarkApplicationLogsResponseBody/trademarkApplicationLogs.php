<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20190902\Models\ListTrademarkApplicationLogsResponseBody;

use AlibabaCloud\SDK\Trademark\V20190902\Models\ListTrademarkApplicationLogsResponseBody\trademarkApplicationLogs\trademarkApplicationLog;
use AlibabaCloud\Tea\Model;

class trademarkApplicationLogs extends Model
{
    /**
     * @var trademarkApplicationLog[]
     */
    public $trademarkApplicationLog;
    protected $_name = [
        'trademarkApplicationLog' => 'TrademarkApplicationLog',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->trademarkApplicationLog) {
            $res['TrademarkApplicationLog'] = [];
            if (null !== $this->trademarkApplicationLog && \is_array($this->trademarkApplicationLog)) {
                $n = 0;
                foreach ($this->trademarkApplicationLog as $item) {
                    $res['TrademarkApplicationLog'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return trademarkApplicationLogs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TrademarkApplicationLog'])) {
            if (!empty($map['TrademarkApplicationLog'])) {
                $model->trademarkApplicationLog = [];
                $n                              = 0;
                foreach ($map['TrademarkApplicationLog'] as $item) {
                    $model->trademarkApplicationLog[$n++] = null !== $item ? trademarkApplicationLog::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
