<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListConnectLogsResponseBody\logs;
use AlibabaCloud\Tea\Model;

class ListConnectLogsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var logs
     */
    public $logs;
    protected $_name = [
        'requestId' => 'RequestId',
        'logs'      => 'Logs',
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
        if (null !== $this->logs) {
            $res['Logs'] = null !== $this->logs ? $this->logs->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListConnectLogsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Logs'])) {
            $model->logs = logs::fromMap($map['Logs']);
        }

        return $model;
    }
}
