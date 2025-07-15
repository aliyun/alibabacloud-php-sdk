<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\DocOcrMaxResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example {
     * "docType": "PPTW01",
     * "ocrIdInfo": {
     * "passportNo": "36*******",
     * "expiryDate": "2032/02/10",
     * "placeOfBirth": "TAIWAN",
     * "surname": "CHEN",
     * "givenname": "LIN-CHUN",
     * "countryCode": "TWN",
     * "sex": "F",
     * "personalNo": "S22********",
     * "issueDate": "2022/02/10",
     * "birthDate": "1988/10/04"
     * }
     * }
     *
     * @var string
     */
    public $extIdInfo;

    /**
     * @example Y
     *
     * @var string
     */
    public $passed;

    /**
     * @example 200
     *
     * @var string
     */
    public $subCode;

    /**
     * @example hk573be80f944d95ac812e0*******a8
     *
     * @var string
     */
    public $transactionId;
    protected $_name = [
        'extIdInfo' => 'ExtIdInfo',
        'passed' => 'Passed',
        'subCode' => 'SubCode',
        'transactionId' => 'TransactionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->extIdInfo) {
            $res['ExtIdInfo'] = $this->extIdInfo;
        }
        if (null !== $this->passed) {
            $res['Passed'] = $this->passed;
        }
        if (null !== $this->subCode) {
            $res['SubCode'] = $this->subCode;
        }
        if (null !== $this->transactionId) {
            $res['TransactionId'] = $this->transactionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExtIdInfo'])) {
            $model->extIdInfo = $map['ExtIdInfo'];
        }
        if (isset($map['Passed'])) {
            $model->passed = $map['Passed'];
        }
        if (isset($map['SubCode'])) {
            $model->subCode = $map['SubCode'];
        }
        if (isset($map['TransactionId'])) {
            $model->transactionId = $map['TransactionId'];
        }

        return $model;
    }
}
