<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trustedserver\V20200613\Models\GenerateNonceResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $credentialBlob;
    protected $_name = [
        'credentialBlob' => 'CredentialBlob',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->credentialBlob) {
            $res['CredentialBlob'] = $this->credentialBlob;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CredentialBlob'])) {
            $model->credentialBlob = $map['CredentialBlob'];
        }

        return $model;
    }
}
