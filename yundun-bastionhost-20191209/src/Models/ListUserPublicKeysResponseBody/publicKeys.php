<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListUserPublicKeysResponseBody;

use AlibabaCloud\Tea\Model;

class publicKeys extends Model
{
    /**
     * @description The description of the public key.
     *
     * @example comment
     *
     * @var string
     */
    public $comment;

    /**
     * @description The fingerprint of the public key.
     *
     * @example d8:7d:b6:27:70:2d:07:fb:c6:b6:66:0a:86:7b:0f:9a
     *
     * @var string
     */
    public $fingerPrint;

    /**
     * @description The ID of the public key.
     *
     * @example 1
     *
     * @var string
     */
    public $publicKeyId;

    /**
     * @description The name of the public key.
     *
     * @example Keyname
     *
     * @var string
     */
    public $publicKeyName;

    /**
     * @description The ID of the user to which the public key belongs.
     *
     * @example 1
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'comment'       => 'Comment',
        'fingerPrint'   => 'FingerPrint',
        'publicKeyId'   => 'PublicKeyId',
        'publicKeyName' => 'PublicKeyName',
        'userId'        => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->fingerPrint) {
            $res['FingerPrint'] = $this->fingerPrint;
        }
        if (null !== $this->publicKeyId) {
            $res['PublicKeyId'] = $this->publicKeyId;
        }
        if (null !== $this->publicKeyName) {
            $res['PublicKeyName'] = $this->publicKeyName;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return publicKeys
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['FingerPrint'])) {
            $model->fingerPrint = $map['FingerPrint'];
        }
        if (isset($map['PublicKeyId'])) {
            $model->publicKeyId = $map['PublicKeyId'];
        }
        if (isset($map['PublicKeyName'])) {
            $model->publicKeyName = $map['PublicKeyName'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
