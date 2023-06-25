<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\DeleteUserKeyResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example xxx
     *
     * @var string
     */
    public $context;

    /**
     * @example 2022-03-18 14:24:54
     *
     * @var string
     */
    public $createdAt;

    /**
     * @example 2022-03-18 14:24:54
     *
     * @var string
     */
    public $expireTime;

    /**
     * @example xxx
     *
     * @var string
     */
    public $fingerPrint;

    /**
     * @example 50998
     *
     * @var int
     */
    public $id;

    /**
     * @example ALL
     *
     * @var string
     */
    public $keyScope;

    /**
     * @example 2022-03-18 14:24:54
     *
     * @var string
     */
    public $lastUsedTime;

    /**
     * @example xxx
     *
     * @var string
     */
    public $publicKey;

    /**
     * @example xxx
     *
     * @var string
     */
    public $shaContext;

    /**
     * @var string
     */
    public $title;

    /**
     * @example 2022-03-18 14:24:54
     *
     * @var string
     */
    public $updatedAt;
    protected $_name = [
        'context'      => 'context',
        'createdAt'    => 'createdAt',
        'expireTime'   => 'expireTime',
        'fingerPrint'  => 'fingerPrint',
        'id'           => 'id',
        'keyScope'     => 'keyScope',
        'lastUsedTime' => 'lastUsedTime',
        'publicKey'    => 'publicKey',
        'shaContext'   => 'shaContext',
        'title'        => 'title',
        'updatedAt'    => 'updatedAt',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->context) {
            $res['context'] = $this->context;
        }
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
        if (null !== $this->shaContext) {
            $res['shaContext'] = $this->shaContext;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->updatedAt) {
            $res['updatedAt'] = $this->updatedAt;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['context'])) {
            $model->context = $map['context'];
        }
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
        if (isset($map['shaContext'])) {
            $model->shaContext = $map['shaContext'];
        }
        if (isset($map['title'])) {
            $model->title = $map['title'];
        }
        if (isset($map['updatedAt'])) {
            $model->updatedAt = $map['updatedAt'];
        }

        return $model;
    }
}
