<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengfinplus\V20220913\Models;

use AlibabaCloud\Dara\Model;

class EncryptInvokeRequest extends Model
{
    /**
     * @var int
     */
    public $clientId;

    /**
     * @var string
     */
    public $data;

    /**
     * @var string
     */
    public $encryptKey;

    /**
     * @var string
     */
    public $methodName;

    /**
     * @var string
     */
    public $sign;
    protected $_name = [
        'clientId' => 'clientId',
        'data' => 'data',
        'encryptKey' => 'encryptKey',
        'methodName' => 'methodName',
        'sign' => 'sign',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientId) {
            $res['clientId'] = $this->clientId;
        }

        if (null !== $this->data) {
            $res['data'] = $this->data;
        }

        if (null !== $this->encryptKey) {
            $res['encryptKey'] = $this->encryptKey;
        }

        if (null !== $this->methodName) {
            $res['methodName'] = $this->methodName;
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
        if (isset($map['clientId'])) {
            $model->clientId = $map['clientId'];
        }

        if (isset($map['data'])) {
            $model->data = $map['data'];
        }

        if (isset($map['encryptKey'])) {
            $model->encryptKey = $map['encryptKey'];
        }

        if (isset($map['methodName'])) {
            $model->methodName = $map['methodName'];
        }

        if (isset($map['sign'])) {
            $model->sign = $map['sign'];
        }

        return $model;
    }
}
