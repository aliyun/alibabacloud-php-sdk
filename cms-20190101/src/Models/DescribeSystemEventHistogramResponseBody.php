<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSystemEventHistogramResponseBody\systemEventHistograms;
use AlibabaCloud\Tea\Model;

class DescribeSystemEventHistogramResponseBody extends Model
{
    /**
     * @description The HTTP status code.
     *
     * >  The status code 200 indicates that the call was successful.
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @example The Request is not authorization.
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the request.
     *
     * @example 486029C9-53E1-44B4-85A8-16A571A043FD
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the call was successful. The value true indicates a success. The value false indicates a failure.
     *
     * @example true
     *
     * @var string
     */
    public $success;

    /**
     * @description The information about the number of times that the system event occurred during each interval of a time period.
     *
     * @var systemEventHistograms
     */
    public $systemEventHistograms;
    protected $_name = [
        'code'                  => 'Code',
        'message'               => 'Message',
        'requestId'             => 'RequestId',
        'success'               => 'Success',
        'systemEventHistograms' => 'SystemEventHistograms',
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
        if (null !== $this->systemEventHistograms) {
            $res['SystemEventHistograms'] = null !== $this->systemEventHistograms ? $this->systemEventHistograms->toMap() : null;
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
        if (isset($map['SystemEventHistograms'])) {
            $model->systemEventHistograms = systemEventHistograms::fromMap($map['SystemEventHistograms']);
        }

        return $model;
    }
}
