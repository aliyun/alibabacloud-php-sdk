<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alinlp\V20200629\Models;

use AlibabaCloud\Tea\Model;

class GetEmbeddingRequest extends Model
{
    /**
     * @var string
     */
    public $serviceCode;

    /**
     * @var string
     */
    public $text;

    /**
     * @var string
     */
    public $textType;
    protected $_name = [
        'serviceCode' => 'ServiceCode',
        'text'        => 'Text',
        'textType'    => 'TextType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serviceCode) {
            $res['ServiceCode'] = $this->serviceCode;
        }
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }
        if (null !== $this->textType) {
            $res['TextType'] = $this->textType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetEmbeddingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ServiceCode'])) {
            $model->serviceCode = $map['ServiceCode'];
        }
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }
        if (isset($map['TextType'])) {
            $model->textType = $map['TextType'];
        }

        return $model;
    }
}
