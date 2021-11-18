<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models;

use AlibabaCloud\SDK\CCC\V20170705\Models\ListUnreachableContactsResponseBody\unreachableContacts;
use AlibabaCloud\Tea\Model;

class ListUnreachableContactsResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var int
     */
    public $httpStatusCode;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var unreachableContacts
     */
    public $unreachableContacts;
    protected $_name = [
        'code'                => 'Code',
        'httpStatusCode'      => 'HttpStatusCode',
        'message'             => 'Message',
        'requestId'           => 'RequestId',
        'success'             => 'Success',
        'unreachableContacts' => 'UnreachableContacts',
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
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
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
        if (null !== $this->unreachableContacts) {
            $res['UnreachableContacts'] = null !== $this->unreachableContacts ? $this->unreachableContacts->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListUnreachableContactsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
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
        if (isset($map['UnreachableContacts'])) {
            $model->unreachableContacts = unreachableContacts::fromMap($map['UnreachableContacts']);
        }

        return $model;
    }
}
