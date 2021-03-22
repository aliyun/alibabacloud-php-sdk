<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models;

use AlibabaCloud\SDK\Alikafka\V20190916\Models\DescribeSaslUsersResponseBody\saslUserList;
use AlibabaCloud\Tea\Model;

class DescribeSaslUsersResponseBody extends Model
{
    /**
     * @var saslUserList
     */
    public $saslUserList;

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
    protected $_name = [
        'saslUserList' => 'SaslUserList',
        'message'      => 'Message',
        'requestId'    => 'RequestId',
        'code'         => 'Code',
        'success'      => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->saslUserList) {
            $res['SaslUserList'] = null !== $this->saslUserList ? $this->saslUserList->toMap() : null;
        }
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSaslUsersResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SaslUserList'])) {
            $model->saslUserList = saslUserList::fromMap($map['SaslUserList']);
        }
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

        return $model;
    }
}
