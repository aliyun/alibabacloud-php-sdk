<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSystemEventHistogramResponseBody\systemEventHistograms;
use AlibabaCloud\Tea\Model;

class DescribeSystemEventHistogramResponseBody extends Model
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
     * @var systemEventHistograms
     */
    public $systemEventHistograms;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $success;
    protected $_name = [
        'message'               => 'Message',
        'requestId'             => 'RequestId',
        'systemEventHistograms' => 'SystemEventHistograms',
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
        if (null !== $this->systemEventHistograms) {
            $res['SystemEventHistograms'] = null !== $this->systemEventHistograms ? $this->systemEventHistograms->toMap() : null;
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
     * @return DescribeSystemEventHistogramResponseBody
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
        if (isset($map['SystemEventHistograms'])) {
            $model->systemEventHistograms = systemEventHistograms::fromMap($map['SystemEventHistograms']);
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
