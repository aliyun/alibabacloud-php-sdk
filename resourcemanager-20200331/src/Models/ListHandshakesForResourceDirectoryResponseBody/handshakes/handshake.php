<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListHandshakesForResourceDirectoryResponseBody\handshakes;

use AlibabaCloud\Tea\Model;

class handshake extends Model
{
    /**
     * @example 2018-08-10T09:55:41Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 2018-08-24T09:55:41Z
     *
     * @var string
     */
    public $expireTime;

    /**
     * @example h-ycm4rp****
     *
     * @var string
     */
    public $handshakeId;

    /**
     * @example 172841235500****
     *
     * @var string
     */
    public $masterAccountId;

    /**
     * @example Alice
     *
     * @var string
     */
    public $masterAccountName;

    /**
     * @example 2018-08-10T09:55:41Z
     *
     * @var string
     */
    public $modifyTime;

    /**
     * @var string
     */
    public $note;

    /**
     * @example rd-abcdef****
     *
     * @var string
     */
    public $resourceDirectoryId;

    /**
     * @example Pending
     *
     * @var string
     */
    public $status;

    /**
     * @example someone@example.com
     *
     * @var string
     */
    public $targetEntity;

    /**
     * @example Email
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return handshake
     */
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
