<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeResourceCoverageDetailResponseBody\data;
use AlibabaCloud\Tea\Model;

class DescribeResourceCoverageDetailResponseBody extends Model
{
    /**
     * @description The end of the time range in which the coverage details were queried.
     *
     * @example Success
     *
     * @var string
     */
    public $code;

    /**
     * @description The ID of the account for which you want to query coverage details. If you do not set this parameter, the data of the current Alibaba Cloud account and its RAM users is queried. To query the data of a RAM user, specify the ID of the RAM user.
     *
     * @var data
     */
    public $data;

    /**
     * @description The maximum number of entries to return. Default value: 20. Maximum value: 300.
     *
     * @example Successful!
     *
     * @var string
     */
    public $message;

    /**
     * @description The message returned.
     *
     * @example 79EE7556-0CFD-44EB-9CD6-B3B526E3A85F
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The amount of the bill.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'      => 'Code',
        'data'      => 'Data',
        'message'   => 'Message',
        'requestId' => 'RequestId',
        'success'   => 'Success',
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
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
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
     * @return DescribeResourceCoverageDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
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
