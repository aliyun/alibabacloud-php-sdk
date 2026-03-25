<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListImportableKMSSecretsForHostResponseBody;

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

    /**
     * @var string
     */
    public $tags;
    protected $_name = [
        'secretName' => 'SecretName',
        'secretType' => 'SecretType',
        'tags' => 'Tags',
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

        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
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

        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }

        return $model;
    }
}
