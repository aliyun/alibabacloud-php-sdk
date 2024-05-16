<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models;

use AlibabaCloud\SDK\Alikafka\V20190916\Models\DescribeAclsResponseBody\kafkaAclList;
use AlibabaCloud\Tea\Model;

class DescribeAclsResponseBody extends Model
{
    /**
     * @description The HTTP status code returned. The HTTP status code 200 indicates that the request is successful.
     *
     * @example 200
     *
     * @var int
     */
    public $code;

    /**
     * @description The access control lists (ACLs).
     *
     * @var kafkaAclList
     */
    public $kafkaAclList;

    /**
     * @description The returned message.
     *
     * @example operation success.
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the request.
     *
     * @example 46496E38-881E-4719-A2F3-F3DA6AE****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request is successful.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'         => 'Code',
        'kafkaAclList' => 'KafkaAclList',
        'message'      => 'Message',
        'requestId'    => 'RequestId',
        'success'      => 'Success',
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
        if (null !== $this->kafkaAclList) {
            $res['KafkaAclList'] = null !== $this->kafkaAclList ? $this->kafkaAclList->toMap() : null;
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
     * @return DescribeAclsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['KafkaAclList'])) {
            $model->kafkaAclList = kafkaAclList::fromMap($map['KafkaAclList']);
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
