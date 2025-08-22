<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201002\Models;

use AlibabaCloud\Dara\Model;

class SetFingerPrintTemplateResponseBody extends Model
{
    /**
     * @var string
     */
    public $encryptedPassword;

    /**
     * @var int
     */
    public $index;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'encryptedPassword' => 'EncryptedPassword',
        'index' => 'Index',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
