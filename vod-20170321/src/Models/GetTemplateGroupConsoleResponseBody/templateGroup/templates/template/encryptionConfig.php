<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetTemplateGroupConsoleResponseBody\templateGroup\templates\template;

use AlibabaCloud\Dara\Model;

class encryptionConfig extends Model
{
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
    public $keyEncryptMethod;
    protected $_name = [
        'decryptKeyUri' => 'DecryptKeyUri',
        'encryptType' => 'EncryptType',
        'keyEncryptMethod' => 'KeyEncryptMethod',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->decryptKeyUri) {
            $res['DecryptKeyUri'] = $this->decryptKeyUri;
        }

        if (null !== $this->encryptType) {
            $res['EncryptType'] = $this->encryptType;
        }

        if (null !== $this->keyEncryptMethod) {
            $res['KeyEncryptMethod'] = $this->keyEncryptMethod;
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
        if (isset($map['DecryptKeyUri'])) {
            $model->decryptKeyUri = $map['DecryptKeyUri'];
        }

        if (isset($map['EncryptType'])) {
            $model->encryptType = $map['EncryptType'];
        }

        if (isset($map['KeyEncryptMethod'])) {
            $model->keyEncryptMethod = $map['KeyEncryptMethod'];
        }

        return $model;
    }
}
