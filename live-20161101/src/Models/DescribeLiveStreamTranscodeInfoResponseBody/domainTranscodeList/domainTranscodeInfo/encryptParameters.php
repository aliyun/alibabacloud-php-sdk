<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamTranscodeInfoResponseBody\domainTranscodeList\domainTranscodeInfo;

use AlibabaCloud\Tea\Model;

class encryptParameters extends Model
{
    /**
     * @description The type of encryption. Fixed value: **aliyun**.
     *
     * @example aliyun
     *
     * @var string
     */
    public $encryptType;

    /**
     * @description The rotation period of the CMK. Valid values: **60 to 3600**. Unit: seconds.
     *
     * @example 3600
     *
     * @var string
     */
    public $kmsKeyExpireInterval;

    /**
     * @description The ID of the customer master key (CMK) in Key Management Service (KMS).
     *
     * @example afce5722-81d2-43c3-9930-7601da11****
     *
     * @var string
     */
    public $kmsKeyID;
    protected $_name = [
        'encryptType' => 'EncryptType',
        'kmsKeyExpireInterval' => 'KmsKeyExpireInterval',
        'kmsKeyID' => 'KmsKeyID',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->encryptType) {
            $res['EncryptType'] = $this->encryptType;
        }
        if (null !== $this->kmsKeyExpireInterval) {
            $res['KmsKeyExpireInterval'] = $this->kmsKeyExpireInterval;
        }
        if (null !== $this->kmsKeyID) {
            $res['KmsKeyID'] = $this->kmsKeyID;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return encryptParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EncryptType'])) {
            $model->encryptType = $map['EncryptType'];
        }
        if (isset($map['KmsKeyExpireInterval'])) {
            $model->kmsKeyExpireInterval = $map['KmsKeyExpireInterval'];
        }
        if (isset($map['KmsKeyID'])) {
            $model->kmsKeyID = $map['KmsKeyID'];
        }

        return $model;
    }
}
