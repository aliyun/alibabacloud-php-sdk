<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201002\Models;

use AlibabaCloud\Tea\Model;

class SetFingerPrintTemplateResponseBody extends Model
{
    /**
     * @example 0711abb9-4cf8-41b2-9d0e-b51209468631;da4VFPNxwY3CZegFjOrCNw==;iHp2l9/qGcfD4tWx7jZIZQ==
     *
     * @var string
     */
    public $encryptedPassword;

    /**
     * @example 1
     *
     * @var int
     */
    public $index;

    /**
     * @example CDE666EA-4FCD-5024-895C-8698E3D3****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'encryptedPassword' => 'EncryptedPassword',
        'index'             => 'Index',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->encryptedPassword) {
            $res['EncryptedPassword'] = $this->encryptedPassword;
        }
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetFingerPrintTemplateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EncryptedPassword'])) {
            $model->encryptedPassword = $map['EncryptedPassword'];
        }
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
