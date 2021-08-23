<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\SDK\Chatbot\V20171011\Models\DescribeEntitiesResponseBody\members;
use AlibabaCloud\Tea\Model;

class DescribeEntitiesResponseBody extends Model
{
    /**
     * @var int
     */
    public $entityId;

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
    public $requestId;

    /**
     * @var string
     */
    public $regex;

    /**
     * @var string
     */
    public $entityName;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $modifyUserName;

    /**
     * @var string
     */
    public $createUserId;

    /**
     * @var string
     */
    public $createUserName;

    /**
     * @var members[]
     */
    public $members;
    protected $_name = [
        'entityId'       => 'EntityId',
        'entityType'     => 'EntityType',
        'modifyTime'     => 'ModifyTime',
        'modifyUserId'   => 'ModifyUserId',
        'requestId'      => 'RequestId',
        'regex'          => 'Regex',
        'entityName'     => 'EntityName',
        'createTime'     => 'CreateTime',
        'modifyUserName' => 'ModifyUserName',
        'createUserId'   => 'CreateUserId',
        'createUserName' => 'CreateUserName',
        'members'        => 'Members',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->regex) {
            $res['Regex'] = $this->regex;
        }
        if (null !== $this->entityName) {
            $res['EntityName'] = $this->entityName;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->modifyUserName) {
            $res['ModifyUserName'] = $this->modifyUserName;
        }
        if (null !== $this->createUserId) {
            $res['CreateUserId'] = $this->createUserId;
        }
        if (null !== $this->createUserName) {
            $res['CreateUserName'] = $this->createUserName;
        }
        if (null !== $this->members) {
            $res['Members'] = [];
            if (null !== $this->members && \is_array($this->members)) {
                $n = 0;
                foreach ($this->members as $item) {
                    $res['Members'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEntitiesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Regex'])) {
            $model->regex = $map['Regex'];
        }
        if (isset($map['EntityName'])) {
            $model->entityName = $map['EntityName'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ModifyUserName'])) {
            $model->modifyUserName = $map['ModifyUserName'];
        }
        if (isset($map['CreateUserId'])) {
            $model->createUserId = $map['CreateUserId'];
        }
        if (isset($map['CreateUserName'])) {
            $model->createUserName = $map['CreateUserName'];
        }
        if (isset($map['Members'])) {
            if (!empty($map['Members'])) {
                $model->members = [];
                $n              = 0;
                foreach ($map['Members'] as $item) {
                    $model->members[$n++] = null !== $item ? members::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
