<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHybridMonitorDataListResponseBody\timeSeries;

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
        'code' => 'Code',
        'message' => 'Message',
        'requestId' => 'RequestId',
        'success' => 'Success',
        'timeSeries' => 'TimeSeries',
    ];

    public function validate()
    {
        if (\is_array($this->timeSeries)) {
            Model::validateArray($this->timeSeries);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->timeSeries)) {
                $res['TimeSeries'] = [];
                $n1 = 0;
                foreach ($this->timeSeries as $item1) {
                    $res['TimeSeries'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['TimeSeries'] as $item1) {
                    $model->timeSeries[$n1] = timeSeries::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
