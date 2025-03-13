<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetFileLastCommitResponseBody\result;

use AlibabaCloud\Tea\Model;

class signature extends Model
{
    /**
     * @description GPG密钥ID
     *
     * @example 34d2c47c7ce46a5c4639c5ffe208
     *
     * @var string
     */
    public $gpgKeyId;

    /**
     * @example verified
     *
     * @var string
     */
    public $verificationStatus;
    protected $_name = [
        'gpgKeyId'           => 'gpgKeyId',
        'verificationStatus' => 'verificationStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gpgKeyId) {
            $res['gpgKeyId'] = $this->gpgKeyId;
        }
        if (null !== $this->verificationStatus) {
            $res['verificationStatus'] = $this->verificationStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return signature
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['gpgKeyId'])) {
            $model->gpgKeyId = $map['gpgKeyId'];
        }
        if (isset($map['verificationStatus'])) {
            $model->verificationStatus = $map['verificationStatus'];
        }

        return $model;
    }
}
