<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models;

use AlibabaCloud\SDK\CCC\V20170705\Models\AddBulkPhoneNumbersResponseBody\arrearagePhoneNumbers;
use AlibabaCloud\SDK\CCC\V20170705\Models\AddBulkPhoneNumbersResponseBody\failedPhoneNumbers;
use AlibabaCloud\SDK\CCC\V20170705\Models\AddBulkPhoneNumbersResponseBody\phoneNumbers;
use AlibabaCloud\SDK\CCC\V20170705\Models\AddBulkPhoneNumbersResponseBody\userdPhoneNumbers;
use AlibabaCloud\Tea\Model;

class AddBulkPhoneNumbersResponseBody extends Model
{
    /**
     * @var arrearagePhoneNumbers
     */
    public $arrearagePhoneNumbers;

    /**
     * @var phoneNumbers
     */
    public $phoneNumbers;

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
    public $httpStatusCode;

    /**
     * @var failedPhoneNumbers
     */
    public $failedPhoneNumbers;

    /**
     * @var userdPhoneNumbers
     */
    public $userdPhoneNumbers;

    /**
     * @var string
     */
    public $code;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'arrearagePhoneNumbers' => 'ArrearagePhoneNumbers',
        'phoneNumbers'          => 'PhoneNumbers',
        'message'               => 'Message',
        'requestId'             => 'RequestId',
        'httpStatusCode'        => 'HttpStatusCode',
        'failedPhoneNumbers'    => 'FailedPhoneNumbers',
        'userdPhoneNumbers'     => 'UserdPhoneNumbers',
        'code'                  => 'Code',
        'success'               => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->arrearagePhoneNumbers) {
            $res['ArrearagePhoneNumbers'] = null !== $this->arrearagePhoneNumbers ? $this->arrearagePhoneNumbers->toMap() : null;
        }
        if (null !== $this->phoneNumbers) {
            $res['PhoneNumbers'] = null !== $this->phoneNumbers ? $this->phoneNumbers->toMap() : null;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->failedPhoneNumbers) {
            $res['FailedPhoneNumbers'] = null !== $this->failedPhoneNumbers ? $this->failedPhoneNumbers->toMap() : null;
        }
        if (null !== $this->userdPhoneNumbers) {
            $res['UserdPhoneNumbers'] = null !== $this->userdPhoneNumbers ? $this->userdPhoneNumbers->toMap() : null;
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
     * @return AddBulkPhoneNumbersResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ArrearagePhoneNumbers'])) {
            $model->arrearagePhoneNumbers = arrearagePhoneNumbers::fromMap($map['ArrearagePhoneNumbers']);
        }
        if (isset($map['PhoneNumbers'])) {
            $model->phoneNumbers = phoneNumbers::fromMap($map['PhoneNumbers']);
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['FailedPhoneNumbers'])) {
            $model->failedPhoneNumbers = failedPhoneNumbers::fromMap($map['FailedPhoneNumbers']);
        }
        if (isset($map['UserdPhoneNumbers'])) {
            $model->userdPhoneNumbers = userdPhoneNumbers::fromMap($map['UserdPhoneNumbers']);
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
