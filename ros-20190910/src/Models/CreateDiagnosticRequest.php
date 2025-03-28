<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Dara\Model;

class CreateDiagnosticRequest extends Model
{
    /**
     * @var string
     */
    public $diagnosticKey;

    /**
     * @var string
     */
    public $diagnosticType;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $product;
    protected $_name = [
        'diagnosticKey' => 'DiagnosticKey',
        'diagnosticType' => 'DiagnosticType',
        'lang' => 'Lang',
        'product' => 'Product',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->diagnosticKey) {
            $res['DiagnosticKey'] = $this->diagnosticKey;
        }

        if (null !== $this->diagnosticType) {
            $res['DiagnosticType'] = $this->diagnosticType;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->product) {
            $res['Product'] = $this->product;
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
        if (isset($map['DiagnosticKey'])) {
            $model->diagnosticKey = $map['DiagnosticKey'];
        }

        if (isset($map['DiagnosticType'])) {
            $model->diagnosticType = $map['DiagnosticType'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }

        return $model;
    }
}
