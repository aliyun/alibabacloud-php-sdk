<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mseap\V20210118\Models;

use AlibabaCloud\Tea\Model;

class GetPlatformUserInfoForPartnerResponseBody extends Model
{
    /**
     * @example djisdpfOjofjifojfajaspsdkasdada
     *
     * @var string
     */
    public $encryptedOpenId;

    /**
     * @example djisdpfOjofjifojfajaspsdkasdada
     *
     * @var string
     */
    public $encryptedUnionId;

    /**
     * @example 11111111111111111111111
     *
     * @var string
     */
    public $errorMsg;

    /**
     * @description Id of the request
     *
     * @example 0320C9F4-5EDC-5355-9D7E-DF4CF6C2B3BB
     *
     * @var string
     */
    public $requestId;

    /**
     * @description success
     *
     * @example True
     *
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

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return GetPlatformUserInfoForPartnerResponseBody
     */
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
