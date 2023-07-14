<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class QueryReleaseMetricResponseBody extends Model
{
    /**
     * @example {"data":{"SystemCpuUser":{"all":[{"date":1632798718000,"val":4.3277,"dim":"SystemCpuUser"},{"date":1632798733000,"val":8.1091,"dim":"SystemCpuUser"}]},"SystemMemUtil":{"all":[{"date":1632798718000,"val":73.4227,"dim":"SystemMemUtil"},{"date":1632798733000,"val":93.0977,"dim":"SystemMemUtil"}]}},"success":true}
     *
     * @var string
     */
    public $data;

    /**
     * @example 46355DD8-FC56-40C5-BFC6-269DE4F9****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'data'      => 'Data',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryReleaseMetricResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
