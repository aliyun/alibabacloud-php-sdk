<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mseap\V20210118\Models;

use AlibabaCloud\Dara\Model;

class GetPlatformUserInfoForPartnerResponseBody extends Model
{
    /**
     * @var string
     */
    public $encryptedOpenId;

    /**
     * @var string
     */
    public $encryptedUnionId;

    /**
     * @var string
     */
    public $errorMsg;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'encryptedOpenId' => 'EncryptedOpenId',
        'encryptedUnionId' => 'EncryptedUnionId',
        'errorMsg' => 'ErrorMsg',
        'requestId' => 'RequestId',
        'success' => 'Success',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->encryptedOpenId) {
            $res['EncryptedOpenId'] = $this->encryptedOpenId;
        }

        if (null !== $this->encryptedUnionId) {
            $res['EncryptedUnionId'] = $this->encryptedUnionId;
        }

        if (null !== $this->errorMsg) {
            $res['ErrorMsg'] = $this->errorMsg;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['EncryptedOpenId'])) {
            $model->encryptedOpenId = $map['EncryptedOpenId'];
        }

        if (isset($map['EncryptedUnionId'])) {
            $model->encryptedUnionId = $map['EncryptedUnionId'];
        }

        if (isset($map['ErrorMsg'])) {
            $model->errorMsg = $map['ErrorMsg'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
