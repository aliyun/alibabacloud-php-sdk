<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListUserKeysResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $createdAt;
    /**
     * @var string
     */
    public $expireTime;
    /**
     * @var string
     */
    public $fingerPrint;
    /**
     * @var int
     */
    public $id;
    /**
     * @var string
     */
    public $keyScope;
    /**
     * @var string
     */
    public $lastUsedTime;
    /**
     * @var string
     */
    public $publicKey;
    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'createdAt'    => 'createdAt',
        'expireTime'   => 'expireTime',
        'fingerPrint'  => 'fingerPrint',
        'id'           => 'id',
        'keyScope'     => 'keyScope',
        'lastUsedTime' => 'lastUsedTime',
        'publicKey'    => 'publicKey',
        'title'        => 'title',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->expireTime) {
            $res['expireTime'] = $this->expireTime;
        }

        if (null !== $this->fingerPrint) {
            $res['fingerPrint'] = $this->fingerPrint;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->keyScope) {
            $res['keyScope'] = $this->keyScope;
        }

        if (null !== $this->lastUsedTime) {
            $res['lastUsedTime'] = $this->lastUsedTime;
        }

        if (null !== $this->publicKey) {
            $res['publicKey'] = $this->publicKey;
        }

        if (null !== $this->title) {
            $res['title'] = $this->title;
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
        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['expireTime'])) {
            $model->expireTime = $map['expireTime'];
        }

        if (isset($map['fingerPrint'])) {
            $model->fingerPrint = $map['fingerPrint'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['keyScope'])) {
            $model->keyScope = $map['keyScope'];
        }

        if (isset($map['lastUsedTime'])) {
            $model->lastUsedTime = $map['lastUsedTime'];
        }

        if (isset($map['publicKey'])) {
            $model->publicKey = $map['publicKey'];
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        return $model;
    }
}
