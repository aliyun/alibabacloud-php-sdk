<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamTranscodeInfoResponseBody\domainTranscodeList\domainTranscodeInfo;

use AlibabaCloud\Tea\Model;

class encryptParameters extends Model
{
    /**
     * @var string
     */
    public $encryptType;

    /**
     * @var string
     */
    public $kmsKeyExpireInterval;

    /**
     * @var string
     */
    public $kmsKeyID;
    protected $_name = [
        'encryptType'          => 'EncryptType',
        'kmsKeyExpireInterval' => 'KmsKeyExpireInterval',
        'kmsKeyID'             => 'KmsKeyID',
    ];

    public function validate()
    {
    }

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
