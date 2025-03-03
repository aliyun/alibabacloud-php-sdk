<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\InviteAccountToResourceDirectoryResponseBody;

use AlibabaCloud\Dara\Model;

class handshake extends Model
{
    /**
     * @var string
     */
    public $createTime;
    /**
     * @var string
     */
    public $expireTime;
    /**
     * @var string
     */
    public $handshakeId;
    /**
     * @var string
     */
    public $masterAccountId;
    /**
     * @var string
     */
    public $masterAccountName;
    /**
     * @var string
     */
    public $modifyTime;
    /**
     * @var string
     */
    public $note;
    /**
     * @var string
     */
    public $resourceDirectoryId;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $targetEntity;
    /**
     * @var string
     */
    public $targetType;
    protected $_name = [
        'createTime'          => 'CreateTime',
        'expireTime'          => 'ExpireTime',
        'handshakeId'         => 'HandshakeId',
        'masterAccountId'     => 'MasterAccountId',
        'masterAccountName'   => 'MasterAccountName',
        'modifyTime'          => 'ModifyTime',
        'note'                => 'Note',
        'resourceDirectoryId' => 'ResourceDirectoryId',
        'status'              => 'Status',
        'targetEntity'        => 'TargetEntity',
        'targetType'          => 'TargetType',
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

        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }

        if (null !== $this->handshakeId) {
            $res['HandshakeId'] = $this->handshakeId;
        }

        if (null !== $this->masterAccountId) {
            $res['MasterAccountId'] = $this->masterAccountId;
        }

        if (null !== $this->masterAccountName) {
            $res['MasterAccountName'] = $this->masterAccountName;
        }

        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }

        if (null !== $this->note) {
            $res['Note'] = $this->note;
        }

        if (null !== $this->resourceDirectoryId) {
            $res['ResourceDirectoryId'] = $this->resourceDirectoryId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->targetEntity) {
            $res['TargetEntity'] = $this->targetEntity;
        }

        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
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

        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        if (isset($map['HandshakeId'])) {
            $model->handshakeId = $map['HandshakeId'];
        }

        if (isset($map['MasterAccountId'])) {
            $model->masterAccountId = $map['MasterAccountId'];
        }

        if (isset($map['MasterAccountName'])) {
            $model->masterAccountName = $map['MasterAccountName'];
        }

        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        if (isset($map['Note'])) {
            $model->note = $map['Note'];
        }

        if (isset($map['ResourceDirectoryId'])) {
            $model->resourceDirectoryId = $map['ResourceDirectoryId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TargetEntity'])) {
            $model->targetEntity = $map['TargetEntity'];
        }

        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }

        return $model;
    }
}
