<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models;

use AlibabaCloud\SDK\Agency\V20221216\Models\InviteSubAccountResponseBody\results;
use AlibabaCloud\Tea\Model;

class InviteSubAccountResponseBody extends Model
{
    /**
     * @description Error Code: </br>
     * • 1109 System Error</br>
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description Message</br>
     *
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @description Request ID, Alibaba Cloud will track errors with this ID.
     *
     * @example 9C14ADFE-DF0A-54D4-8BD5-45D0839246B4
     *
     * @var string
     */
    public $requestId;

    /**
     * @description List of invitation sending results
     *
     * @var results
     */
    public $results;

    /**
     * @description Candidate Values: True/False, this value states if the current API calling action is successful. It does not guarantee the success of subsequent business operations.
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
        'results'   => 'Results',
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
        if (null !== $this->results) {
            $res['Results'] = null !== $this->results ? $this->results->toMap() : null;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InviteSubAccountResponseBody
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
        if (isset($map['Results'])) {
            $model->results = results::fromMap($map['Results']);
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
