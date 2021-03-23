<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Tea\Model;

class DescribeHistoryMonitorValuesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $monitorHistory;
    protected $_name = [
        'requestId'      => 'RequestId',
        'monitorHistory' => 'MonitorHistory',
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
        if (null !== $this->monitorHistory) {
            $res['MonitorHistory'] = $this->monitorHistory;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['MonitorHistory'])) {
            $model->monitorHistory = $map['MonitorHistory'];
        }

        return $model;
    }
}
