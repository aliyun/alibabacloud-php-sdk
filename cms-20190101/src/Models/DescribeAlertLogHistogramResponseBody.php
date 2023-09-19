<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertLogHistogramResponseBody\alertLogHistogramList;
use AlibabaCloud\Tea\Model;

class DescribeAlertLogHistogramResponseBody extends Model
{
    /**
     * @description The number of alert logs that were generated during each interval of a time period.
     *
     * @var alertLogHistogramList[]
     */
    public $alertLogHistogramList;

    /**
     * @description The response code.
     *
     * >  The status code 200 indicates that the request was successful.
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
        'alertLogHistogramList' => 'AlertLogHistogramList',
        'code'                  => 'Code',
        'message'               => 'Message',
        'requestId'             => 'RequestId',
        'success'               => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertLogHistogramList) {
            $res['AlertLogHistogramList'] = [];
            if (null !== $this->alertLogHistogramList && \is_array($this->alertLogHistogramList)) {
                $n = 0;
                foreach ($this->alertLogHistogramList as $item) {
                    $res['AlertLogHistogramList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeAlertLogHistogramResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertLogHistogramList'])) {
            if (!empty($map['AlertLogHistogramList'])) {
                $model->alertLogHistogramList = [];
                $n                            = 0;
                foreach ($map['AlertLogHistogramList'] as $item) {
                    $model->alertLogHistogramList[$n++] = null !== $item ? alertLogHistogramList::fromMap($item) : $item;
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
