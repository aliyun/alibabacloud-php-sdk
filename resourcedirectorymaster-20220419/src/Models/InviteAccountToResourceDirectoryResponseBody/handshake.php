<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\InviteAccountToResourceDirectoryResponseBody;

use AlibabaCloud\Tea\Model;

class handshake extends Model
{
    /**
     * @description The time when the invitation was created. The time is displayed in UTC.
     *
     * @example 2018-08-10T09:55:41Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The time when the invitation expires. The time is displayed in UTC.
     *
     * @example 2018-08-24T09:55:41Z
     *
     * @var string
     */
    public $expireTime;

    /**
     * @description The ID of the invitation.
     *
     * @example h-ycm4rp****
     *
     * @var string
     */
    public $handshakeId;

    /**
     * @description The ID of the management account of the resource directory.
     *
     * @example 172841235500****
     *
     * @var string
     */
    public $masterAccountId;

    /**
     * @description The name of the management account of the resource directory.
     *
     * @example Alice
     *
     * @var string
     */
    public $masterAccountName;

    /**
     * @description The time when the invitation was modified. The time is displayed in UTC.
     *
     * @example 2018-08-10T09:55:41Z
     *
     * @var string
     */
    public $modifyTime;

    /**
     * @description The description of the invitation.
     *
     * @example Welcome
     *
     * @var string
     */
    public $note;

    /**
     * @description The ID of the resource directory.
     *
     * @example rd-abcdef****
     *
     * @var string
     */
    public $resourceDirectoryId;

    /**
     * @description The status of the invitation. Valid values:
     *
     *   Pending
     *   Accepted
     *   Cancelled
     *   Declined
     *   Expired
     *
     * @example Pending
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID or logon email address of the invited account.
     *
     * @example someone@example.com
     *
     * @var string
     */
    public $targetEntity;

    /**
     * @description The type of the invited account. Valid values:
     *
     *   Account: indicates the ID of the account.
     *   Email: indicates the logon email address of the account.
     *
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
