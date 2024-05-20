<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alinlp\V20200629\Models;

use AlibabaCloud\Tea\Model;

class GetWsCustomizedChEcomContentRequest extends Model
{
    /**
     * @var string
     */
    public $outType;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $serviceCode;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $text;

    /**
     * @var string
     */
    public $tokenizerId;
    protected $_name = [
        'outType'     => 'OutType',
        'serviceCode' => 'ServiceCode',
        'text'        => 'Text',
        'tokenizerId' => 'TokenizerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->outType) {
            $res['OutType'] = $this->outType;
        }
        if (null !== $this->serviceCode) {
            $res['ServiceCode'] = $this->serviceCode;
        }
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }
        if (null !== $this->tokenizerId) {
            $res['TokenizerId'] = $this->tokenizerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetWsCustomizedChEcomContentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OutType'])) {
            $model->outType = $map['OutType'];
        }
        if (isset($map['ServiceCode'])) {
            $model->serviceCode = $map['ServiceCode'];
        }
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }
        if (isset($map['TokenizerId'])) {
            $model->tokenizerId = $map['TokenizerId'];
        }

        return $model;
    }
}
