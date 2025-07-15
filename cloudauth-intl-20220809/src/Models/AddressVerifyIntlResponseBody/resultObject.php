<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\AddressVerifyIntlResponseBody;

use AlibabaCloud\Tea\Model;

class resultObject extends Model
{
    /**
     * @example 0-3000
     *
     * @var string
     */
    public $addressInfo;

    /**
     * @example CMCC
     *
     * @var string
     */
    public $ispName;

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
     * @example hksb7ba1b28130d24e015d69********
     *
     * @var string
     */
    public $transactionId;
    protected $_name = [
        'addressInfo' => 'AddressInfo',
        'ispName' => 'IspName',
        'passed' => 'Passed',
        'subCode' => 'SubCode',
        'transactionId' => 'TransactionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->addressInfo) {
            $res['AddressInfo'] = $this->addressInfo;
        }
        if (null !== $this->ispName) {
            $res['IspName'] = $this->ispName;
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
     * @return resultObject
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddressInfo'])) {
            $model->addressInfo = $map['AddressInfo'];
        }
        if (isset($map['IspName'])) {
            $model->ispName = $map['IspName'];
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
