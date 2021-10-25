<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\SDK\EHPC\V20180412\Models\GetHealthMonitorLogsResponseBody\logInfo;
use AlibabaCloud\Tea\Model;

class GetHealthMonitorLogsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var logInfo
     */
    public $logInfo;
    protected $_name = [
        'requestId' => 'RequestId',
        'logInfo'   => 'LogInfo',
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
        if (null !== $this->logInfo) {
            $res['LogInfo'] = null !== $this->logInfo ? $this->logInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetHealthMonitorLogsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['LogInfo'])) {
            $model->logInfo = logInfo::fromMap($map['LogInfo']);
        }

        return $model;
    }
}
