<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Dara\Model;

class DeleteSCIMServerCredentialRequest extends Model
{
    /**
     * @var string
     */
    public $credentialId;

    /**
     * @var string
     */
    public $directoryId;
    protected $_name = [
        'credentialId' => 'CredentialId',
        'directoryId' => 'DirectoryId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->credentialId) {
            $res['CredentialId'] = $this->credentialId;
        }

        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
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
        if (isset($map['CredentialId'])) {
            $model->credentialId = $map['CredentialId'];
        }

        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }

        return $model;
    }
}
