<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListHandshakesForAccountResponse\handshakes;

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
    public $modifyTime;

    /**
     * @var string
     */
    public $resourceDirectoryId;

    /**
     * @var string
     */
    public $handshakeId;

    /**
     * @var string
     */
    public $masterAccountName;

    /**
     * @var string
     */
    public $note;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $targetType;

    /**
     * @var string
     */
    public $masterAccountId;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $targetEntity;
    protected $_name = [
        'status'              => 'Status',
        'modifyTime'          => 'ModifyTime',
        'resourceDirectoryId' => 'ResourceDirectoryId',
        'handshakeId'         => 'HandshakeId',
        'masterAccountName'   => 'MasterAccountName',
        'note'                => 'Note',
        'createTime'          => 'CreateTime',
        'targetType'          => 'TargetType',
        'masterAccountId'     => 'MasterAccountId',
        'expireTime'          => 'ExpireTime',
        'targetEntity'        => 'TargetEntity',
    ];

    public function validate()
    {
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('modifyTime', $this->modifyTime, true);
        Model::validateRequired('resourceDirectoryId', $this->resourceDirectoryId, true);
        Model::validateRequired('handshakeId', $this->handshakeId, true);
        Model::validateRequired('masterAccountName', $this->masterAccountName, true);
        Model::validateRequired('note', $this->note, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('targetType', $this->targetType, true);
        Model::validateRequired('masterAccountId', $this->masterAccountId, true);
        Model::validateRequired('expireTime', $this->expireTime, true);
        Model::validateRequired('targetEntity', $this->targetEntity, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->resourceDirectoryId) {
            $res['ResourceDirectoryId'] = $this->resourceDirectoryId;
        }
        if (null !== $this->handshakeId) {
            $res['HandshakeId'] = $this->handshakeId;
        }
        if (null !== $this->masterAccountName) {
            $res['MasterAccountName'] = $this->masterAccountName;
        }
        if (null !== $this->note) {
            $res['Note'] = $this->note;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }
        if (null !== $this->masterAccountId) {
            $res['MasterAccountId'] = $this->masterAccountId;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->targetEntity) {
            $res['TargetEntity'] = $this->targetEntity;
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
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['ResourceDirectoryId'])) {
            $model->resourceDirectoryId = $map['ResourceDirectoryId'];
        }
        if (isset($map['HandshakeId'])) {
            $model->handshakeId = $map['HandshakeId'];
        }
        if (isset($map['MasterAccountName'])) {
            $model->masterAccountName = $map['MasterAccountName'];
        }
        if (isset($map['Note'])) {
            $model->note = $map['Note'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }
        if (isset($map['MasterAccountId'])) {
            $model->masterAccountId = $map['MasterAccountId'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['TargetEntity'])) {
            $model->targetEntity = $map['TargetEntity'];
        }

        return $model;
    }
}
