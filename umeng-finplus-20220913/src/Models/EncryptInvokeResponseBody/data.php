<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengfinplus\V20220913\Models\EncryptInvokeResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $encryptData;

    /**
     * @var string
     */
    public $encryptKey;

    /**
     * @var string
     */
    public $sign;
    protected $_name = [
        'encryptData' => 'encryptData',
        'encryptKey' => 'encryptKey',
        'sign' => 'sign',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->encryptData) {
            $res['encryptData'] = $this->encryptData;
        }

        if (null !== $this->encryptKey) {
            $res['encryptKey'] = $this->encryptKey;
        }

        if (null !== $this->sign) {
            $res['sign'] = $this->sign;
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
        if (isset($map['encryptData'])) {
            $model->encryptData = $map['encryptData'];
        }

        if (isset($map['encryptKey'])) {
            $model->encryptKey = $map['encryptKey'];
        }

        if (isset($map['sign'])) {
            $model->sign = $map['sign'];
        }

        return $model;
    }
}
