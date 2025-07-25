<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models;

use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\BankMetaVerifyIntlResponseBody\resultObject;
use AlibabaCloud\Tea\Model;

class BankMetaVerifyIntlResponseBody extends Model
{
    /**
     * @description Return code: 200 for success, others for failure.
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description Return message
     *
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @description Request ID.
     *
     * @example 4EB35****87EBA1
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Returned result information
     *
     * @var resultObject
     */
    public $resultObject;
    protected $_name = [
        'code' => 'Code',
        'message' => 'Message',
        'requestId' => 'RequestId',
        'resultObject' => 'ResultObject',
    ];

    public function validate() {}

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
        if (null !== $this->resultObject) {
            $res['ResultObject'] = null !== $this->resultObject ? $this->resultObject->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BankMetaVerifyIntlResponseBody
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
        if (isset($map['ResultObject'])) {
            $model->resultObject = resultObject::fromMap($map['ResultObject']);
        }

        return $model;
    }
}
