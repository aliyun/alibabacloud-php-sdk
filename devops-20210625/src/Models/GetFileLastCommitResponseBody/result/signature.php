<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetFileLastCommitResponseBody\result;

use AlibabaCloud\Tea\Model;

class signature extends Model
{
    /**
     * @description GPG密钥ID
     *
     * @var string
     */
    public $gpgKeyId;

    /**
     * @description 验证状态
     *
     * @var string
     */
    public $verificationStatus;
    protected $_name = [
        'gpgKeyId'           => 'GpgKeyId',
        'verificationStatus' => 'VerificationStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gpgKeyId) {
            $res['GpgKeyId'] = $this->gpgKeyId;
        }
        if (null !== $this->verificationStatus) {
            $res['VerificationStatus'] = $this->verificationStatus;
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
        if (isset($map['GpgKeyId'])) {
            $model->gpgKeyId = $map['GpgKeyId'];
        }
        if (isset($map['VerificationStatus'])) {
            $model->verificationStatus = $map['VerificationStatus'];
        }

        return $model;
    }
}
