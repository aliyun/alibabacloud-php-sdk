<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models;

use AlibabaCloud\Tea\Model;

class SetAccountInfoResponseBody extends Model
{
    /**
     * @description Result Code:
     *   200 OK
     *   1109 System error
     *   3030 Sub Account Nickname exceeds maximum length,  maximum length 150 bytes.
     *   3031 Remark exceeds maximum length,  maximum length 3000 bytes.
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description Message information
     *
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @description Request ID, Alibaba Cloud will track errors with this.
     *
     * @example 9C14ADFE-DF0A-54D4-8BD5-45D0839246B4
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Candidate Value: True/False, which indicates whether the current API call itself is successful. It does not guarantee the success of subsequent business operations.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'      => 'Code',
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
     * @return SetAccountInfoResponseBody
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

        return $model;
    }
}
