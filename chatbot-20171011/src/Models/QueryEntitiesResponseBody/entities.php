<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models\QueryEntitiesResponseBody;

use AlibabaCloud\SDK\Chatbot\V20171011\Models\QueryEntitiesResponseBody\entities\members;
use AlibabaCloud\Tea\Model;

class entities extends Model
{
    /**
     * @var members[]
     */
    public $members;

    /**
     * @var string
     */
    public $modifyUserId;

    /**
     * @var string
     */
    public $modifyUserName;

    /**
     * @var int
     */
    public $entityId;

    /**
     * @var string
     */
    public $createUserName;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $regex;

    /**
     * @var string
     */
    public $entityType;

    /**
     * @var string
     */
    public $createUserId;

    /**
     * @var string
     */
    public $entityName;

    /**
     * @var string
     */
    public $modifyTime;
    protected $_name = [
        'members'        => 'Members',
        'modifyUserId'   => 'ModifyUserId',
        'modifyUserName' => 'ModifyUserName',
        'entityId'       => 'EntityId',
        'createUserName' => 'CreateUserName',
        'createTime'     => 'CreateTime',
        'regex'          => 'Regex',
        'entityType'     => 'EntityType',
        'createUserId'   => 'CreateUserId',
        'entityName'     => 'EntityName',
        'modifyTime'     => 'ModifyTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->members) {
            $res['Members'] = [];
            if (null !== $this->members && \is_array($this->members)) {
                $n = 0;
                foreach ($this->members as $item) {
                    $res['Members'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->modifyUserId) {
            $res['ModifyUserId'] = $this->modifyUserId;
        }
        if (null !== $this->modifyUserName) {
            $res['ModifyUserName'] = $this->modifyUserName;
        }
        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }
        if (null !== $this->createUserName) {
            $res['CreateUserName'] = $this->createUserName;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->regex) {
            $res['Regex'] = $this->regex;
        }
        if (null !== $this->entityType) {
            $res['EntityType'] = $this->entityType;
        }
        if (null !== $this->createUserId) {
            $res['CreateUserId'] = $this->createUserId;
        }
        if (null !== $this->entityName) {
            $res['EntityName'] = $this->entityName;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return entities
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Members'])) {
            if (!empty($map['Members'])) {
                $model->members = [];
                $n              = 0;
                foreach ($map['Members'] as $item) {
                    $model->members[$n++] = null !== $item ? members::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ModifyUserId'])) {
            $model->modifyUserId = $map['ModifyUserId'];
        }
        if (isset($map['ModifyUserName'])) {
            $model->modifyUserName = $map['ModifyUserName'];
        }
        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }
        if (isset($map['CreateUserName'])) {
            $model->createUserName = $map['CreateUserName'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Regex'])) {
            $model->regex = $map['Regex'];
        }
        if (isset($map['EntityType'])) {
            $model->entityType = $map['EntityType'];
        }
        if (isset($map['CreateUserId'])) {
            $model->createUserId = $map['CreateUserId'];
        }
        if (isset($map['EntityName'])) {
            $model->entityName = $map['EntityName'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        return $model;
    }
}
