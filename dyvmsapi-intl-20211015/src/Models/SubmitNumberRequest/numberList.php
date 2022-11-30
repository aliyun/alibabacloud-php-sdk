<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\SubmitNumberRequest;

use AlibabaCloud\Tea\Model;

class numberList extends Model
{
    /**
     * @var int
     */
    public $amount;

    /**
     * @var int
     */
    public $inboundConcurrency;

    /**
     * @var int
     */
    public $outboundConcurrency;

    /**
     * @var int
     */
    public $phoneType;

    /**
     * @var int
     */
    public $support;
    protected $_name = [
        'amount'              => 'Amount',
        'inboundConcurrency'  => 'InboundConcurrency',
        'outboundConcurrency' => 'OutboundConcurrency',
        'phoneType'           => 'PhoneType',
        'support'             => 'Support',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }
        if (null !== $this->inboundConcurrency) {
            $res['InboundConcurrency'] = $this->inboundConcurrency;
        }
        if (null !== $this->outboundConcurrency) {
            $res['OutboundConcurrency'] = $this->outboundConcurrency;
        }
        if (null !== $this->phoneType) {
            $res['PhoneType'] = $this->phoneType;
        }
        if (null !== $this->support) {
            $res['Support'] = $this->support;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return numberList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }
        if (isset($map['InboundConcurrency'])) {
            $model->inboundConcurrency = $map['InboundConcurrency'];
        }
        if (isset($map['OutboundConcurrency'])) {
            $model->outboundConcurrency = $map['OutboundConcurrency'];
        }
        if (isset($map['PhoneType'])) {
            $model->phoneType = $map['PhoneType'];
        }
        if (isset($map['Support'])) {
            $model->support = $map['Support'];
        }

        return $model;
    }
}
