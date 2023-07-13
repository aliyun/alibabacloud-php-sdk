<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeUnhealthyHostAvailabilityResponseBody\unhealthyList;
use AlibabaCloud\Tea\Model;

class DescribeUnhealthyHostAvailabilityResponseBody extends Model
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
     * @description The returned message.
     *
     * @example User not authorized to operate on the specified resource.
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the request.
     *
     * @example ACBDBB40-DFB6-4F4C-8957-51FFB233969C
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the call was successful. Valid values:
     *
     *   true: The call was successful.
     *   false: The call failed.
     *
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description The unhealthy instances that are detected by the specified availability monitoring tasks.
     *
     * @var unhealthyList
     */
    public $unhealthyList;
    protected $_name = [
        'code'          => 'Code',
        'message'       => 'Message',
        'requestId'     => 'RequestId',
        'success'       => 'Success',
        'unhealthyList' => 'UnhealthyList',
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
        if (null !== $this->unhealthyList) {
            $res['UnhealthyList'] = null !== $this->unhealthyList ? $this->unhealthyList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUnhealthyHostAvailabilityResponseBody
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
        if (isset($map['UnhealthyList'])) {
            $model->unhealthyList = unhealthyList::fromMap($map['UnhealthyList']);
        }

        return $model;
    }
}
