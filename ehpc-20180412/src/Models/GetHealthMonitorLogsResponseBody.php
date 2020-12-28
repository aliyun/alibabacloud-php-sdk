<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\SDK\EHPC\V20180412\Models\GetHealthMonitorLogsResponseBody\logInfo;
use AlibabaCloud\Tea\Model;

class GetHealthMonitorLogsResponseBody extends Model
{
    /**
     * @var logInfo[]
     */
    public $logInfo;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'logInfo'   => 'LogInfo',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logInfo) {
            $res['LogInfo'] = [];
            if (null !== $this->logInfo && \is_array($this->logInfo)) {
                $n = 0;
                foreach ($this->logInfo as $item) {
                    $res['LogInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['LogInfo'])) {
            if (!empty($map['LogInfo'])) {
                $model->logInfo = [];
                $n              = 0;
                foreach ($map['LogInfo'] as $item) {
                    $model->logInfo[$n++] = null !== $item ? logInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
