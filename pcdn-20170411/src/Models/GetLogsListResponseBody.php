<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pcdn\V20170411\Models;

use AlibabaCloud\SDK\Pcdn\V20170411\Models\GetLogsListResponseBody\logList;
use AlibabaCloud\Tea\Model;

class GetLogsListResponseBody extends Model
{
    /**
     * @var logList
     */
    public $logList;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $code;
    protected $_name = [
        'logList'   => 'LogList',
        'requestId' => 'RequestId',
        'code'      => 'Code',
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
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetLogsListResponseBody
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        return $model;
    }
}
