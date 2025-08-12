<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertLogHistogramResponseBody\alertLogHistogramList;

class DescribeAlertLogHistogramResponseBody extends Model
{
    /**
     * @var alertLogHistogramList[]
     */
    public $alertLogHistogramList;

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
     * @var bool
     */
    public $success;
    protected $_name = [
        'alertLogHistogramList' => 'AlertLogHistogramList',
        'code' => 'Code',
        'message' => 'Message',
        'requestId' => 'RequestId',
        'success' => 'Success',
    ];

    public function validate()
    {
        if (\is_array($this->alertLogHistogramList)) {
            Model::validateArray($this->alertLogHistogramList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertLogHistogramList) {
            if (\is_array($this->alertLogHistogramList)) {
                $res['AlertLogHistogramList'] = [];
                $n1 = 0;
                foreach ($this->alertLogHistogramList as $item1) {
                    $res['AlertLogHistogramList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertLogHistogramList'])) {
            if (!empty($map['AlertLogHistogramList'])) {
                $model->alertLogHistogramList = [];
                $n1 = 0;
                foreach ($map['AlertLogHistogramList'] as $item1) {
                    $model->alertLogHistogramList[$n1] = alertLogHistogramList::fromMap($item1);
                    ++$n1;
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
