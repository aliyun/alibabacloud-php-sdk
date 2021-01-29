<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeBankCardResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $cardNumber;

    /**
     * @var string
     */
    public $validDate;

    /**
     * @var string
     */
    public $bankName;
    protected $_name = [
        'cardNumber' => 'CardNumber',
        'validDate'  => 'ValidDate',
        'bankName'   => 'BankName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cardNumber) {
            $res['CardNumber'] = $this->cardNumber;
        }
        if (null !== $this->validDate) {
            $res['ValidDate'] = $this->validDate;
        }
        if (null !== $this->bankName) {
            $res['BankName'] = $this->bankName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CardNumber'])) {
            $model->cardNumber = $map['CardNumber'];
        }
        if (isset($map['ValidDate'])) {
            $model->validDate = $map['ValidDate'];
        }
        if (isset($map['BankName'])) {
            $model->bankName = $map['BankName'];
        }

        return $model;
    }
}
