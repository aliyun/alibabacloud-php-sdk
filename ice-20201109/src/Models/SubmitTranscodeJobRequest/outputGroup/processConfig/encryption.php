<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTranscodeJobRequest\outputGroup\processConfig;

use AlibabaCloud\Tea\Model;

class encryption extends Model
{
    /**
     * @var string
     */
    public $cipherText;

    /**
     * @var string
     */
    public $decryptKeyUri;

    /**
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
