<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20181029\Models;

use AlibabaCloud\SDK\Yundundbaudit\V20181029\Models\DescribeSessionLogsResponseBody\sessionLogs;
use AlibabaCloud\Tea\Model;

class DescribeSessionLogsResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var sessionLogs[]
     */
    public $sessionLogs;
    protected $_name = [
        'totalCount'  => 'TotalCount',
        'requestId'   => 'RequestId',
        'sessionLogs' => 'SessionLogs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->sessionLogs) {
            $res['SessionLogs'] = [];
            if (null !== $this->sessionLogs && \is_array($this->sessionLogs)) {
                $n = 0;
                foreach ($this->sessionLogs as $item) {
                    $res['SessionLogs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSessionLogsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SessionLogs'])) {
            if (!empty($map['SessionLogs'])) {
                $model->sessionLogs = [];
                $n                  = 0;
                foreach ($map['SessionLogs'] as $item) {
                    $model->sessionLogs[$n++] = null !== $item ? sessionLogs::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
