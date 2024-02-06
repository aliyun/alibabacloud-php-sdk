<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstanceMonitorDataResponseBody\monitorData;
use AlibabaCloud\Tea\Model;

class DescribeInstanceMonitorDataResponseBody extends Model
{
    /**
     * @description The returned service code. A value of 0 indicates that the operation was successful.
     *
     * @example 0
     *
     * @var int
     */
    public $code;

    /**
     * @description The set of InstanceMonitorDataType data.
     *
     * @var monitorData
     */
    public $monitorData;

    /**
     * @description The request ID.
     *
     * @example C8B26B44-0189-443E-9816-D951F59623A9
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code'        => 'Code',
        'monitorData' => 'MonitorData',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->monitorData) {
            $res['MonitorData'] = null !== $this->monitorData ? $this->monitorData->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceMonitorDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['MonitorData'])) {
            $model->monitorData = monitorData::fromMap($map['MonitorData']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
