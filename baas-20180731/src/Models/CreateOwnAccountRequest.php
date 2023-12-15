<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models;

use AlibabaCloud\Tea\Model;

class CreateOwnAccountRequest extends Model
{
    /**
     * @var string
     */
    public $bizid;

    /**
     * @var string
     */
    public $identity;

    /**
     * @var string
     */
    public $publicKey;

    /**
     * @var string
     */
    public $recoveryKey;
    protected $_name = [
        'bizid'       => 'Bizid',
        'identity'    => 'Identity',
        'publicKey'   => 'PublicKey',
        'recoveryKey' => 'RecoveryKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizid) {
            $res['Bizid'] = $this->bizid;
        }
        if (null !== $this->identity) {
            $res['Identity'] = $this->identity;
        }
        if (null !== $this->publicKey) {
            $res['PublicKey'] = $this->publicKey;
        }
        if (null !== $this->recoveryKey) {
            $res['RecoveryKey'] = $this->recoveryKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateOwnAccountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bizid'])) {
            $model->bizid = $map['Bizid'];
        }
        if (isset($map['Identity'])) {
            $model->identity = $map['Identity'];
        }
        if (isset($map['PublicKey'])) {
            $model->publicKey = $map['PublicKey'];
        }
        if (isset($map['RecoveryKey'])) {
            $model->recoveryKey = $map['RecoveryKey'];
        }

        return $model;
    }
}
