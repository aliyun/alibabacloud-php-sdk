<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\Tea\Model;

class DescribeDSEntityResponseBody extends Model
{
    /**
     * @example 2021-08-12T16:00:01Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 123231
     *
     * @var string
     */
    public $createUserId;

    /**
     * @example test
     *
     * @var string
     */
    public $createUserName;

    /**
     * @example 123
     *
     * @var int
     */
    public $entityId;

    /**
     * @var string
     */
    public $entityName;

    /**
     * @example synonyms
     *
     * @var string
     */
    public $entityType;

    /**
     * @example 2021-08-12T16:00:01Z
     *
     * @var string
     */
    public $modifyTime;

    /**
     * @example 123231
     *
     * @var string
     */
    public $modifyUserId;

    /**
     * @example test
     *
     * @var string
     */
    public $modifyUserName;

    /**
     * @example ad23234dsf234fga
     *
     * @var string
     */
    public $requestId;

    /**
     * @example @sys.date
     *
     * @var string
     */
    public $sysEntityCode;
    protected $_name = [
        'createTime'     => 'CreateTime',
        'createUserId'   => 'CreateUserId',
        'createUserName' => 'CreateUserName',
        'entityId'       => 'EntityId',
        'entityName'     => 'EntityName',
        'entityType'     => 'EntityType',
        'modifyTime'     => 'ModifyTime',
        'modifyUserId'   => 'ModifyUserId',
        'modifyUserName' => 'ModifyUserName',
        'requestId'      => 'RequestId',
        'sysEntityCode'  => 'SysEntityCode',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->sysEntityCode) {
            $res['SysEntityCode'] = $this->sysEntityCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDSEntityResponseBody
     */
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SysEntityCode'])) {
            $model->sysEntityCode = $map['SysEntityCode'];
        }

        return $model;
    }
}
