<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTrademarkDetailByApplyNumberResponseBody\moudle;
use AlibabaCloud\Tea\Model;

class QueryTrademarkDetailByApplyNumberResponseBody extends Model
{
    /**
     * @var moudle
     */
    public $moudle;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'moudle'    => 'Moudle',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->moudle) {
            $res['Moudle'] = null !== $this->moudle ? $this->moudle->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryTrademarkDetailByApplyNumberResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Moudle'])) {
            $model->moudle = moudle::fromMap($map['Moudle']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
