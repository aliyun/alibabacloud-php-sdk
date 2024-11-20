<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListTranscodeJobsResponseBody\jobs\outputGroup\processConfig;

use AlibabaCloud\Tea\Model;

class encryption extends Model
{
    /**
     * @description The ciphertext of HTTP Live Streaming (HLS) encryption.
     *
     * @example MTYi00NDU0LTg5O****
     *
     * @var string
     */
    public $cipherText;

    /**
     * @description The endpoint of the decryption service for HLS encryption.
     *
     * @example https://sample.com/path?CipherText=MTYi00NDU0LTg5O****
     *
     * @var string
     */
    public $decryptKeyUri;

    /**
     * @description The encryption type.
     *
     * @example PrivateEncryption
     *
     * @var string
     */
    public $encryptType;
    protected $_name = [
        'cipherText'    => 'CipherText',
        'decryptKeyUri' => 'DecryptKeyUri',
        'encryptType'   => 'EncryptType',
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

        return $model;
    }
}
