<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\VerifyDeviceResponse;

use AlibabaCloud\Tea\Model;

class resultObject extends Model
{
    /**
     * @var string
     */
    public $validationRetCode;

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
    public $hasNext;

    /**
     * @var string
     */
    public $extParams;
    protected $_name = [
        'validationRetCode' => 'ValidationRetCode',
        'productRetCode'    => 'ProductRetCode',
        'retCodeSub'        => 'RetCodeSub',
        'retMessageSub'     => 'RetMessageSub',
        'hasNext'           => 'HasNext',
        'extParams'         => 'ExtParams',
    ];

    public function validate()
    {
        Model::validateRequired('validationRetCode', $this->validationRetCode, true);
        Model::validateRequired('productRetCode', $this->productRetCode, true);
        Model::validateRequired('retCodeSub', $this->retCodeSub, true);
        Model::validateRequired('retMessageSub', $this->retMessageSub, true);
        Model::validateRequired('hasNext', $this->hasNext, true);
        Model::validateRequired('extParams', $this->extParams, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->validationRetCode) {
            $res['ValidationRetCode'] = $this->validationRetCode;
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
        if (null !== $this->hasNext) {
            $res['HasNext'] = $this->hasNext;
        }
        if (null !== $this->extParams) {
            $res['ExtParams'] = $this->extParams;
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
        if (isset($map['ValidationRetCode'])) {
            $model->validationRetCode = $map['ValidationRetCode'];
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
        if (isset($map['HasNext'])) {
            $model->hasNext = $map['HasNext'];
        }
        if (isset($map['ExtParams'])) {
            $model->extParams = $map['ExtParams'];
        }

        return $model;
    }
}
