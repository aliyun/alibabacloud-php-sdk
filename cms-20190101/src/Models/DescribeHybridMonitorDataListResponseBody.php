<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHybridMonitorDataListResponseBody\timeSeries;
use AlibabaCloud\Tea\Model;

class DescribeHybridMonitorDataListResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $success;

    /**
     * @var timeSeries[]
     */
    public $timeSeries;
    protected $_name = [
        'code'       => 'Code',
        'message'    => 'Message',
        'requestId'  => 'RequestId',
        'success'    => 'Success',
        'timeSeries' => 'TimeSeries',
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
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->timeSeries) {
            $res['TimeSeries'] = [];
            if (null !== $this->timeSeries && \is_array($this->timeSeries)) {
                $n = 0;
                foreach ($this->timeSeries as $item) {
                    $res['TimeSeries'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeHybridMonitorDataListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TimeSeries'])) {
            if (!empty($map['TimeSeries'])) {
                $model->timeSeries = [];
                $n                 = 0;
                foreach ($map['TimeSeries'] as $item) {
                    $model->timeSeries[$n++] = null !== $item ? timeSeries::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
