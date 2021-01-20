<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertLogHistogramResponseBody\alertLogHistogramList;
use AlibabaCloud\Tea\Model;

class DescribeAlertLogHistogramResponseBody extends Model
{
    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var alertLogHistogramList[]
     */
    public $alertLogHistogramList;

    /**
     * @var string
     */
    public $code;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'message'               => 'Message',
        'requestId'             => 'RequestId',
        'alertLogHistogramList' => 'AlertLogHistogramList',
        'code'                  => 'Code',
        'success'               => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
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
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
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
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
