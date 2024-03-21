<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20190902\Models;

use AlibabaCloud\SDK\Trademark\V20190902\Models\ListTrademarkApplicationLogsResponseBody\trademarkApplicationLogs;
use AlibabaCloud\Tea\Model;

class ListTrademarkApplicationLogsResponseBody extends Model
{
    /**
     * @example 5D77ECD7-38AE-4D46-AA38-95EE8552CE96
     *
     * @var string
     */
    public $requestId;

    /**
     * @var trademarkApplicationLogs
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
            $res['TrademarkApplicationLogs'] = null !== $this->trademarkApplicationLogs ? $this->trademarkApplicationLogs->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTrademarkApplicationLogsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TrademarkApplicationLogs'])) {
            $model->trademarkApplicationLogs = trademarkApplicationLogs::fromMap($map['TrademarkApplicationLogs']);
        }

        return $model;
    }
}
