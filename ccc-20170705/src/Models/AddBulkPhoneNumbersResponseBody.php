<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CCC\V20170705\Models\AddBulkPhoneNumbersResponseBody\arrearagePhoneNumbers;
use AlibabaCloud\SDK\CCC\V20170705\Models\AddBulkPhoneNumbersResponseBody\failedPhoneNumbers;
use AlibabaCloud\SDK\CCC\V20170705\Models\AddBulkPhoneNumbersResponseBody\phoneNumbers;
use AlibabaCloud\SDK\CCC\V20170705\Models\AddBulkPhoneNumbersResponseBody\userdPhoneNumbers;

class AddBulkPhoneNumbersResponseBody extends Model
{
    /**
     * @var arrearagePhoneNumbers
     */
    public $arrearagePhoneNumbers;

    /**
     * @var string
     */
    public $code;

    /**
     * @var failedPhoneNumbers
     */
    public $failedPhoneNumbers;

    /**
     * @var int
     */
    public $httpStatusCode;

    /**
     * @var string
     */
    public $message;

    /**
     * @var phoneNumbers
     */
    public $phoneNumbers;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var userdPhoneNumbers
     */
    public $userdPhoneNumbers;
    protected $_name = [
        'arrearagePhoneNumbers' => 'ArrearagePhoneNumbers',
        'code' => 'Code',
        'failedPhoneNumbers' => 'FailedPhoneNumbers',
        'httpStatusCode' => 'HttpStatusCode',
        'message' => 'Message',
        'phoneNumbers' => 'PhoneNumbers',
        'requestId' => 'RequestId',
        'success' => 'Success',
        'userdPhoneNumbers' => 'UserdPhoneNumbers',
    ];

    public function validate()
    {
        if (null !== $this->arrearagePhoneNumbers) {
            $this->arrearagePhoneNumbers->validate();
        }
        if (null !== $this->failedPhoneNumbers) {
            $this->failedPhoneNumbers->validate();
        }
        if (null !== $this->phoneNumbers) {
            $this->phoneNumbers->validate();
        }
        if (null !== $this->userdPhoneNumbers) {
            $this->userdPhoneNumbers->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->arrearagePhoneNumbers) {
            $res['ArrearagePhoneNumbers'] = null !== $this->arrearagePhoneNumbers ? $this->arrearagePhoneNumbers->toArray($noStream) : $this->arrearagePhoneNumbers;
        }

        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->failedPhoneNumbers) {
            $res['FailedPhoneNumbers'] = null !== $this->failedPhoneNumbers ? $this->failedPhoneNumbers->toArray($noStream) : $this->failedPhoneNumbers;
        }

        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->phoneNumbers) {
            $res['PhoneNumbers'] = null !== $this->phoneNumbers ? $this->phoneNumbers->toArray($noStream) : $this->phoneNumbers;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        if (null !== $this->userdPhoneNumbers) {
            $res['UserdPhoneNumbers'] = null !== $this->userdPhoneNumbers ? $this->userdPhoneNumbers->toArray($noStream) : $this->userdPhoneNumbers;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ArrearagePhoneNumbers'])) {
            $model->arrearagePhoneNumbers = arrearagePhoneNumbers::fromMap($map['ArrearagePhoneNumbers']);
        }

        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['FailedPhoneNumbers'])) {
            $model->failedPhoneNumbers = failedPhoneNumbers::fromMap($map['FailedPhoneNumbers']);
        }

        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['PhoneNumbers'])) {
            $model->phoneNumbers = phoneNumbers::fromMap($map['PhoneNumbers']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        if (isset($map['UserdPhoneNumbers'])) {
            $model->userdPhoneNumbers = userdPhoneNumbers::fromMap($map['UserdPhoneNumbers']);
        }

        return $model;
    }
}
