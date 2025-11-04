<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class EntityMediaBasicInfo extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $biz;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $entityId;

    /**
     * @var string
     */
    public $entityMediaId;

    /**
     * @var string
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'appId' => 'AppId',
        'biz' => 'Biz',
        'createTime' => 'CreateTime',
        'entityId' => 'EntityId',
        'entityMediaId' => 'EntityMediaId',
        'modifiedTime' => 'ModifiedTime',
        'status' => 'Status',
        'userData' => 'UserData',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->biz) {
            $res['Biz'] = $this->biz;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }

        if (null !== $this->entityMediaId) {
            $res['EntityMediaId'] = $this->entityMediaId;
        }

        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['Biz'])) {
            $model->biz = $map['Biz'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }

        if (isset($map['EntityMediaId'])) {
            $model->entityMediaId = $map['EntityMediaId'];
        }

        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
