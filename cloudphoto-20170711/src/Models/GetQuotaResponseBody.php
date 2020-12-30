<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudPhoto\V20170711\Models;

use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\GetQuotaResponseBody\quota;
use AlibabaCloud\Tea\Model;

class GetQuotaResponseBody extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var quota
     */
    public $quota;

    /**
     * @var string
     */
    public $code;
    protected $_name = [
        'action'    => 'Action',
        'message'   => 'Message',
        'requestId' => 'RequestId',
        'quota'     => 'Quota',
        'code'      => 'Code',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->quota) {
            $res['Quota'] = null !== $this->quota ? $this->quota->toMap() : null;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetQuotaResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Quota'])) {
            $model->quota = quota::fromMap($map['Quota']);
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        return $model;
    }
}
