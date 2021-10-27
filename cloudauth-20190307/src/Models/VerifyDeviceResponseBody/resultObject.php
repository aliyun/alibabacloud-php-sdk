<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\VerifyDeviceResponseBody;

use AlibabaCloud\Tea\Model;

class resultObject extends Model
{
    /**
     * @var string
     */
    public $extParams;

    /**
     * @var string
     */
    public $hasNext;

    /**
     * @var string
     */
    public $productRetCode;

    /**
     * @var string
     */
    public $retCodeSub;

    /**
     * @var string
     */
    public $retMessageSub;

    /**
     * @var string
     */
    public $validationRetCode;
    protected $_name = [
        'extParams'         => 'ExtParams',
        'hasNext'           => 'HasNext',
        'productRetCode'    => 'ProductRetCode',
        'retCodeSub'        => 'RetCodeSub',
        'retMessageSub'     => 'RetMessageSub',
        'validationRetCode' => 'ValidationRetCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->extParams) {
            $res['ExtParams'] = $this->extParams;
        }
        if (null !== $this->hasNext) {
            $res['HasNext'] = $this->hasNext;
        }
        if (null !== $this->productRetCode) {
            $res['ProductRetCode'] = $this->productRetCode;
        }
        if (null !== $this->retCodeSub) {
            $res['RetCodeSub'] = $this->retCodeSub;
        }
        if (null !== $this->retMessageSub) {
            $res['RetMessageSub'] = $this->retMessageSub;
        }
        if (null !== $this->validationRetCode) {
            $res['ValidationRetCode'] = $this->validationRetCode;
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
        if (isset($map['ExtParams'])) {
            $model->extParams = $map['ExtParams'];
        }
        if (isset($map['HasNext'])) {
            $model->hasNext = $map['HasNext'];
        }
        if (isset($map['ProductRetCode'])) {
            $model->productRetCode = $map['ProductRetCode'];
        }
        if (isset($map['RetCodeSub'])) {
            $model->retCodeSub = $map['RetCodeSub'];
        }
        if (isset($map['RetMessageSub'])) {
            $model->retMessageSub = $map['RetMessageSub'];
        }
        if (isset($map['ValidationRetCode'])) {
            $model->validationRetCode = $map['ValidationRetCode'];
        }

        return $model;
    }
}
