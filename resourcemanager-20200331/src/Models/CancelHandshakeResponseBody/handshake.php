<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\CancelHandshakeResponseBody;

use AlibabaCloud\Tea\Model;

class handshake extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $resourceDirectoryId;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $note;

    /**
     * @var string
     */
    public $targetEntity;

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
    public $targetType;

    /**
     * @var string
     */
    public $handshakeId;
    protected $_name = [
        'status'              => 'Status',
        'expireTime'          => 'ExpireTime',
        'resourceDirectoryId' => 'ResourceDirectoryId',
        'createTime'          => 'CreateTime',
        'note'                => 'Note',
        'targetEntity'        => 'TargetEntity',
        'masterAccountId'     => 'MasterAccountId',
        'masterAccountName'   => 'MasterAccountName',
        'modifyTime'          => 'ModifyTime',
        'targetType'          => 'TargetType',
        'handshakeId'         => 'HandshakeId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->resourceDirectoryId) {
            $res['ResourceDirectoryId'] = $this->resourceDirectoryId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->note) {
            $res['Note'] = $this->note;
        }
        if (null !== $this->targetEntity) {
            $res['TargetEntity'] = $this->targetEntity;
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
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }
        if (null !== $this->handshakeId) {
            $res['HandshakeId'] = $this->handshakeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return handshake
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['ResourceDirectoryId'])) {
            $model->resourceDirectoryId = $map['ResourceDirectoryId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Note'])) {
            $model->note = $map['Note'];
        }
        if (isset($map['TargetEntity'])) {
            $model->targetEntity = $map['TargetEntity'];
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
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }
        if (isset($map['HandshakeId'])) {
            $model->handshakeId = $map['HandshakeId'];
        }

        return $model;
    }
}
