<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTranscodeJobResponseBody\transcodeParentJob\transcodeJobList\processConfig;

use AlibabaCloud\Tea\Model;

class encryption extends Model
{
    /**
     * @example MTYi00NDU0LTg5O****
     *
     * @var string
     */
    public $cipherText;

    /**
     * @example https://sample.com/path?CipherText=MTYi00NDU0LTg5O****
     *
     * @var string
     */
    public $decryptKeyUri;

    /**
     * @example PrivateEncryption
     *
     * @var string
     */
    public $encryptType;

    /**
     * @example KMS
     *
     * @var string
     */
    public $keyServiceType;
    protected $_name = [
        'cipherText'     => 'CipherText',
        'decryptKeyUri'  => 'DecryptKeyUri',
        'encryptType'    => 'EncryptType',
        'keyServiceType' => 'KeyServiceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cipherText) {
            $res['CipherText'] = $this->cipherText;
        }
        if (null !== $this->decryptKeyUri) {
            $res['DecryptKeyUri'] = $this->decryptKeyUri;
        }
        if (null !== $this->encryptType) {
            $res['EncryptType'] = $this->encryptType;
        }
        if (null !== $this->keyServiceType) {
            $res['KeyServiceType'] = $this->keyServiceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return encryption
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CipherText'])) {
            $model->cipherText = $map['CipherText'];
        }
        if (isset($map['DecryptKeyUri'])) {
            $model->decryptKeyUri = $map['DecryptKeyUri'];
        }
        if (isset($map['EncryptType'])) {
            $model->encryptType = $map['EncryptType'];
        }
        if (isset($map['KeyServiceType'])) {
            $model->keyServiceType = $map['KeyServiceType'];
        }

        return $model;
    }
}
