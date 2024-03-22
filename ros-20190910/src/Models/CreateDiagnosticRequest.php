<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class CreateDiagnosticRequest extends Model
{
    /**
     * @description The keyword in the diagnosis.
     *
     * @example 37A5679B-8488-5A5D-8D5C-90E66A577A5D
     *
     * @var string
     */
    public $diagnosticKey;

    /**
     * @description The type of the item that is diagnosed. Set the value to Stack, which specifies that the stack is diagnosed.
     *
     * @example Stack
     *
     * @var string
     */
    public $diagnosticType;

    /**
     * @example zh-cn
     *
     * @var string
     */
    public $lang;

    /**
     * @description The name of the product that is diagonosed.
     *
     * @example ros
     *
     * @var string
     */
    public $product;
    protected $_name = [
        'diagnosticKey'  => 'DiagnosticKey',
        'diagnosticType' => 'DiagnosticType',
        'lang'           => 'Lang',
        'product'        => 'Product',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return CreateDiagnosticRequest
     */
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
