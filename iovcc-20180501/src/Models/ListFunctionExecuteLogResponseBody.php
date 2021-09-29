<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListFunctionExecuteLogResponseBody\logList;
use AlibabaCloud\Tea\Model;

class ListFunctionExecuteLogResponseBody extends Model
{
    /**
     * @var logList
     */
    public $logList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'logList'   => 'LogList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logList) {
            $res['LogList'] = null !== $this->logList ? $this->logList->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFunctionExecuteLogResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogList'])) {
            $model->logList = logList::fromMap($map['LogList']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
