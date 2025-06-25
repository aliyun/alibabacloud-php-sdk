<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListUserPublicKeysResponseBody;

use AlibabaCloud\Dara\Model;

class publicKeys extends Model
{
    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $fingerPrint;

    /**
     * @var string
     */
    public $publicKeyId;

    /**
     * @var string
     */
    public $publicKeyName;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'comment' => 'Comment',
        'fingerPrint' => 'FingerPrint',
        'publicKeyId' => 'PublicKeyId',
        'publicKeyName' => 'PublicKeyName',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
