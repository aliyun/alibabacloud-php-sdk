<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\QueryRequestLogsResponseBody\requestLogs;
use AlibabaCloud\Tea\Model;

class QueryRequestLogsResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example CE5722A6-AE78-4741-A9B0-6C81********
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The list of request logs.
     *
     * @var requestLogs
     */
    public $requestLogs;
    protected $_name = [
        'requestId'   => 'RequestId',
        'requestLogs' => 'RequestLogs',
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
        if (null !== $this->requestLogs) {
            $res['RequestLogs'] = null !== $this->requestLogs ? $this->requestLogs->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryRequestLogsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RequestLogs'])) {
            $model->requestLogs = requestLogs::fromMap($map['RequestLogs']);
        }

        return $model;
    }
}
