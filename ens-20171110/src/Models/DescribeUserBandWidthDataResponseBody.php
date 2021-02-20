<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeUserBandWidthDataResponseBody\monitorData;
use AlibabaCloud\Tea\Model;

class DescribeUserBandWidthDataResponseBody extends Model
{
    /**
     * @var int
     */
    public $code;

    /**
     * @var monitorData
     */
    public $monitorData;

    /**
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
     * @return DescribeUserBandWidthDataResponseBody
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
