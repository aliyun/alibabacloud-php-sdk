<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alinlp\V20200629\Models;

use AlibabaCloud\Tea\Model;

class GetNerChEcomRequest extends Model
{
    /**
     * @var string
     */
    public $lexerId;

    /**
     * @var string
     */
    public $serviceCode;

    /**
     * @var string
     */
    public $text;
    protected $_name = [
        'lexerId'     => 'LexerId',
        'serviceCode' => 'ServiceCode',
        'text'        => 'Text',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lexerId) {
            $res['LexerId'] = $this->lexerId;
        }
        if (null !== $this->serviceCode) {
            $res['ServiceCode'] = $this->serviceCode;
        }
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetNerChEcomRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LexerId'])) {
            $model->lexerId = $map['LexerId'];
        }
        if (isset($map['ServiceCode'])) {
            $model->serviceCode = $map['ServiceCode'];
        }
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }

        return $model;
    }
}
