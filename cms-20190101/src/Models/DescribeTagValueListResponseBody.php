<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeTagValueListResponseBody\tagValues;
use AlibabaCloud\Tea\Model;

class DescribeTagValueListResponseBody extends Model
{
    /**
     * @description The HTTP status code.
     *
     * >  The value 200 indicates that the call was successful.
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
     * @description The ID of the request.
     *
     * @example B04B8CF3-4489-432D-83BA-6F128E4F2295
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
     * @description The tag values returned.
     *
     * @var tagValues
     */
    public $tagValues;
    protected $_name = [
        'code'      => 'Code',
        'message'   => 'Message',
        'requestId' => 'RequestId',
        'success'   => 'Success',
        'tagValues' => 'TagValues',
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
        if (null !== $this->tagValues) {
            $res['TagValues'] = null !== $this->tagValues ? $this->tagValues->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTagValueListResponseBody
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
        if (isset($map['TagValues'])) {
            $model->tagValues = tagValues::fromMap($map['TagValues']);
        }

        return $model;
    }
}
