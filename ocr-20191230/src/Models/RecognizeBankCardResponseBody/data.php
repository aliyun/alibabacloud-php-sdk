<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeBankCardResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $bankName;

    /**
     * @var string
     */
    public $cardNumber;

    /**
     * @var string
     */
    public $cardType;

    /**
     * @var string
     */
    public $validDate;
    protected $_name = [
        'bankName' => 'BankName',
        'cardNumber' => 'CardNumber',
        'cardType' => 'CardType',
        'validDate' => 'ValidDate',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bankName) {
            $res['BankName'] = $this->bankName;
        }

        if (null !== $this->cardNumber) {
            $res['CardNumber'] = $this->cardNumber;
        }

        if (null !== $this->cardType) {
            $res['CardType'] = $this->cardType;
        }

        if (null !== $this->validDate) {
            $res['ValidDate'] = $this->validDate;
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
        if (isset($map['BankName'])) {
            $model->bankName = $map['BankName'];
        }

        if (isset($map['CardNumber'])) {
            $model->cardNumber = $map['CardNumber'];
        }

        if (isset($map['CardType'])) {
            $model->cardType = $map['CardType'];
        }

        if (isset($map['ValidDate'])) {
            $model->validDate = $map['ValidDate'];
        }

        return $model;
    }
}
