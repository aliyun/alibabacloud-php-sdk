<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListTranscodeJobsResponseBody\jobs\outputGroup\processConfig;

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
    protected $_name = [
        'cipherText'    => 'CipherText',
        'decryptKeyUri' => 'DecryptKeyUri',
        'encryptType'   => 'EncryptType',
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

        return $model;
    }
}
