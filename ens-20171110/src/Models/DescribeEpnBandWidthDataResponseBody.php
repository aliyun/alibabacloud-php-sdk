<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEpnBandWidthDataResponseBody\monitorData;
use AlibabaCloud\Tea\Model;

class DescribeEpnBandWidthDataResponseBody extends Model
{
    /**
     * @description The monitoring data of the instance.
     *
     * @var monitorData
     */
    public $monitorData;

    /**
     * @description The request ID.
     *
     * @example 1D289DAA-F6DA-5FC4-AE47-F5C8B6277BFC
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'monitorData' => 'MonitorData',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
     * @return DescribeEpnBandWidthDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MonitorData'])) {
            $model->monitorData = monitorData::fromMap($map['MonitorData']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
