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
        'code'                  => 'Code',
        'failedPhoneNumbers'    => 'FailedPhoneNumbers',
        'httpStatusCode'        => 'HttpStatusCode',
        'message'               => 'Message',
        'phoneNumbers'          => 'PhoneNumbers',
        'requestId'             => 'RequestId',
        'success'               => 'Success',
        'userdPhoneNumbers'     => 'UserdPhoneNumbers',
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
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->failedPhoneNumbers) {
            $res['FailedPhoneNumbers'] = null !== $this->failedPhoneNumbers ? $this->failedPhoneNumbers->toMap() : null;
        }
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->phoneNumbers) {
            $res['PhoneNumbers'] = null !== $this->phoneNumbers ? $this->phoneNumbers->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->userdPhoneNumbers) {
            $res['UserdPhoneNumbers'] = null !== $this->userdPhoneNumbers ? $this->userdPhoneNumbers->toMap() : null;
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
