<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20190902\Models;

use AlibabaCloud\SDK\Trademark\V20190902\Models\ListAdminTrademarkApplicationLogsResponseBody\trademarkApplicationLogs;
use AlibabaCloud\Tea\Model;

class ListAdminTrademarkApplicationLogsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var trademarkApplicationLogs[]
     */
    public $trademarkApplicationLogs;
    protected $_name = [
        'requestId'                => 'RequestId',
        'trademarkApplicationLogs' => 'TrademarkApplicationLogs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->trademarkApplicationLogs) {
            $res['TrademarkApplicationLogs'] = [];
            if (null !== $this->trademarkApplicationLogs && \is_array($this->trademarkApplicationLogs)) {
                $n = 0;
                foreach ($this->trademarkApplicationLogs as $item) {
                    $res['TrademarkApplicationLogs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAdminTrademarkApplicationLogsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TrademarkApplicationLogs'])) {
            if (!empty($map['TrademarkApplicationLogs'])) {
                $model->trademarkApplicationLogs = [];
                $n                               = 0;
                foreach ($map['TrademarkApplicationLogs'] as $item) {
                    $model->trademarkApplicationLogs[$n++] = null !== $item ? trademarkApplicationLogs::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
