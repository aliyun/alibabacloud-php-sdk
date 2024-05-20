<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alinlp\V20200629\Models;

use AlibabaCloud\Tea\Model;

class GetWeChEntertainmentRequest extends Model
{
    /**
     * @var string
     */
    public $operation;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $serviceCode;

    /**
     * @var string
     */
    public $size;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $text;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $tokenizerId;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'operation'   => 'Operation',
        'serviceCode' => 'ServiceCode',
        'size'        => 'Size',
        'text'        => 'Text',
        'tokenizerId' => 'TokenizerId',
        'type'        => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->operation) {
            $res['Operation'] = $this->operation;
        }
        if (null !== $this->serviceCode) {
            $res['ServiceCode'] = $this->serviceCode;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }
        if (null !== $this->tokenizerId) {
            $res['TokenizerId'] = $this->tokenizerId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetWeChEntertainmentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Operation'])) {
            $model->operation = $map['Operation'];
        }
        if (isset($map['ServiceCode'])) {
            $model->serviceCode = $map['ServiceCode'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }
        if (isset($map['TokenizerId'])) {
            $model->tokenizerId = $map['TokenizerId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
