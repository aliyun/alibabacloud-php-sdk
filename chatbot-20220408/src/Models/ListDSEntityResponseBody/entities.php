<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models\ListDSEntityResponseBody;

use AlibabaCloud\Dara\Model;

class entities extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $createUserId;

    /**
     * @var string
     */
    public $createUserName;

    /**
     * @var int
     */
    public $entityId;

    /**
     * @var string
     */
    public $entityName;

    /**
     * @var string
     */
    public $entityType;

    /**
     * @var string
     */
    public $modifyTime;

    /**
     * @var string
     */
    public $modifyUserId;

    /**
     * @var string
     */
    public $modifyUserName;

    /**
     * @var string
     */
    public $sysEntityCode;
    protected $_name = [
        'createTime' => 'CreateTime',
        'createUserId' => 'CreateUserId',
        'createUserName' => 'CreateUserName',
        'entityId' => 'EntityId',
        'entityName' => 'EntityName',
        'entityType' => 'EntityType',
        'modifyTime' => 'ModifyTime',
        'modifyUserId' => 'ModifyUserId',
        'modifyUserName' => 'ModifyUserName',
        'sysEntityCode' => 'SysEntityCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->createUserId) {
            $res['CreateUserId'] = $this->createUserId;
        }

        if (null !== $this->createUserName) {
            $res['CreateUserName'] = $this->createUserName;
        }

        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }

        if (null !== $this->entityName) {
            $res['EntityName'] = $this->entityName;
        }

        if (null !== $this->entityType) {
            $res['EntityType'] = $this->entityType;
        }

        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }

        if (null !== $this->modifyUserId) {
            $res['ModifyUserId'] = $this->modifyUserId;
        }

        if (null !== $this->modifyUserName) {
            $res['ModifyUserName'] = $this->modifyUserName;
        }

        if (null !== $this->sysEntityCode) {
            $res['SysEntityCode'] = $this->sysEntityCode;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['CreateUserId'])) {
            $model->createUserId = $map['CreateUserId'];
        }

        if (isset($map['CreateUserName'])) {
            $model->createUserName = $map['CreateUserName'];
        }

        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }

        if (isset($map['EntityName'])) {
            $model->entityName = $map['EntityName'];
        }

        if (isset($map['EntityType'])) {
            $model->entityType = $map['EntityType'];
        }

        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        if (isset($map['ModifyUserId'])) {
            $model->modifyUserId = $map['ModifyUserId'];
        }

        if (isset($map['ModifyUserName'])) {
            $model->modifyUserName = $map['ModifyUserName'];
        }

        if (isset($map['SysEntityCode'])) {
            $model->sysEntityCode = $map['SysEntityCode'];
        }

        return $model;
    }
}
