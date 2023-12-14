<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models;

use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeSharesBucketInfoForExpressSyncResponseBody\bucketInfos;
use AlibabaCloud\Tea\Model;

class DescribeSharesBucketInfoForExpressSyncResponseBody extends Model
{
    /**
     * @var bucketInfos
     */
    public $bucketInfos;

    /**
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @example successful
     *
     * @var string
     */
    public $message;

    /**
     * @example 29BD52E7-CF30-418F-A240-E15A9351B666
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'bucketInfos' => 'BucketInfos',
        'code'        => 'Code',
        'message'     => 'Message',
        'requestId'   => 'RequestId',
        'success'     => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bucketInfos) {
            $res['BucketInfos'] = null !== $this->bucketInfos ? $this->bucketInfos->toMap() : null;
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
     * @return DescribeSharesBucketInfoForExpressSyncResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BucketInfos'])) {
            $model->bucketInfos = bucketInfos::fromMap($map['BucketInfos']);
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
