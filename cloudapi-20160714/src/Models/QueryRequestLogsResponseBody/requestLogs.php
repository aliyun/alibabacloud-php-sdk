<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\QueryRequestLogsResponseBody;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\QueryRequestLogsResponseBody\requestLogs\requestLog;
use AlibabaCloud\Tea\Model;

class requestLogs extends Model
{
    /**
     * @var requestLog[]
     */
    public $requestLog;
    protected $_name = [
        'requestLog' => 'RequestLog',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestLog) {
            $res['RequestLog'] = [];
            if (null !== $this->requestLog && \is_array($this->requestLog)) {
                $n = 0;
                foreach ($this->requestLog as $item) {
                    $res['RequestLog'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return requestLogs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestLog'])) {
            if (!empty($map['RequestLog'])) {
                $model->requestLog = [];
                $n                 = 0;
                foreach ($map['RequestLog'] as $item) {
                    $model->requestLog[$n++] = null !== $item ? requestLog::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
