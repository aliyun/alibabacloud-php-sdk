<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypls\V20170830\Models\ApplyArInvoiceWithSourceResponseBody;

use AlibabaCloud\Tea\Model;

class returnValue extends Model
{
    /**
     * @var string[]
     */
    public $encryptProps;

    /**
     * @var string
     */
    public $outerSystemEncryptStr;

    /**
     * @var string
     */
    public $outerSystemSignStr;

    /**
     * @var string
     */
    public $sign;
    protected $_name = [
        'encryptProps'          => 'EncryptProps',
        'outerSystemEncryptStr' => 'OuterSystemEncryptStr',
        'outerSystemSignStr'    => 'OuterSystemSignStr',
        'sign'                  => 'Sign',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->encryptProps) {
            $res['EncryptProps'] = $this->encryptProps;
        }
        if (null !== $this->outerSystemEncryptStr) {
            $res['OuterSystemEncryptStr'] = $this->outerSystemEncryptStr;
        }
        if (null !== $this->outerSystemSignStr) {
            $res['OuterSystemSignStr'] = $this->outerSystemSignStr;
        }
        if (null !== $this->sign) {
            $res['Sign'] = $this->sign;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return returnValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EncryptProps'])) {
            $model->encryptProps = $map['EncryptProps'];
        }
        if (isset($map['OuterSystemEncryptStr'])) {
            $model->outerSystemEncryptStr = $map['OuterSystemEncryptStr'];
        }
        if (isset($map['OuterSystemSignStr'])) {
            $model->outerSystemSignStr = $map['OuterSystemSignStr'];
        }
        if (isset($map['Sign'])) {
            $model->sign = $map['Sign'];
        }

        return $model;
    }
}
