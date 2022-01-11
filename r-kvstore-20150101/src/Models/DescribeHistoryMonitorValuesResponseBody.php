<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Tea\Model;

class DescribeHistoryMonitorValuesResponseBody extends Model
{
    /**
     * @var string
     */
    public $monitorHistory;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'monitorHistory' => 'MonitorHistory',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->monitorHistory) {
            $res['MonitorHistory'] = $this->monitorHistory;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeHistoryMonitorValuesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MonitorHistory'])) {
            $model->monitorHistory = $map['MonitorHistory'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
