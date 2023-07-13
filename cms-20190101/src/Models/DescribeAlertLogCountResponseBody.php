<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertLogCountResponseBody\alertLogCount;
use AlibabaCloud\Tea\Model;

class DescribeAlertLogCountResponseBody extends Model
{
    /**
     * @description The statistics of alert logs.
     *
     * @var alertLogCount[]
     */
    public $alertLogCount;

    /**
     * @description The HTTP status code.
     *
     * > The status code 200 indicates that the request was successful.
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The error message.
     *
     * @example The specified resource is not found.
     *
     * @var string
     */
    public $message;

    /**
     * @description The request ID.
     *
     * @example 1C4A3709-BF52-42EE-87B5-7435F0929585
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request was successful. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'alertLogCount' => 'AlertLogCount',
        'code'          => 'Code',
        'message'       => 'Message',
        'requestId'     => 'RequestId',
        'success'       => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertLogCount) {
            $res['AlertLogCount'] = [];
            if (null !== $this->alertLogCount && \is_array($this->alertLogCount)) {
                $n = 0;
                foreach ($this->alertLogCount as $item) {
                    $res['AlertLogCount'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAlertLogCountResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertLogCount'])) {
            if (!empty($map['AlertLogCount'])) {
                $model->alertLogCount = [];
                $n                    = 0;
                foreach ($map['AlertLogCount'] as $item) {
                    $model->alertLogCount[$n++] = null !== $item ? alertLogCount::fromMap($item) : $item;
                }
            }
        }
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

        return $model;
    }
}
