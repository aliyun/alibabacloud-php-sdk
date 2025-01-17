<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetTranscodeJobResponseBody\transcodeParentJob\transcodeJobList\processConfig;

use AlibabaCloud\Dara\Model;

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
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
