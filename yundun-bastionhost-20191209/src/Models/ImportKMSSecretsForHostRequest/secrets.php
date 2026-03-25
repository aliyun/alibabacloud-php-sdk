<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ImportKMSSecretsForHostRequest;

use AlibabaCloud\Dara\Model;

class secrets extends Model
{
    /**
     * @var string
     */
    public $secretName;

    /**
     * @var string
     */
    public $secretType;
    protected $_name = [
        'secretName' => 'SecretName',
        'secretType' => 'SecretType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->secretName) {
            $res['SecretName'] = $this->secretName;
        }

        if (null !== $this->secretType) {
            $res['SecretType'] = $this->secretType;
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
        if (isset($map['SecretName'])) {
            $model->secretName = $map['SecretName'];
        }

        if (isset($map['SecretType'])) {
            $model->secretType = $map['SecretType'];
        }

        return $model;
    }
}
