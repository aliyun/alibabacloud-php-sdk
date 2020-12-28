<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models;

use AlibabaCloud\SDK\Alikafka\V20190916\Models\DescribeAclsResponseBody\kafkaAclList;
use AlibabaCloud\Tea\Model;

class DescribeAclsResponseBody extends Model
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
     * @var int
     */
    public $code;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var kafkaAclList[]
     */
    public $kafkaAclList;
    protected $_name = [
        'message'      => 'Message',
        'requestId'    => 'RequestId',
        'code'         => 'Code',
        'success'      => 'Success',
        'kafkaAclList' => 'KafkaAclList',
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
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->kafkaAclList) {
            $res['KafkaAclList'] = [];
            if (null !== $this->kafkaAclList && \is_array($this->kafkaAclList)) {
                $n = 0;
                foreach ($this->kafkaAclList as $item) {
                    $res['KafkaAclList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['KafkaAclList'])) {
            if (!empty($map['KafkaAclList'])) {
                $model->kafkaAclList = [];
                $n                   = 0;
                foreach ($map['KafkaAclList'] as $item) {
                    $model->kafkaAclList[$n++] = null !== $item ? kafkaAclList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
