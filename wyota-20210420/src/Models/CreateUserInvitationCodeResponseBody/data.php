<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models\CreateUserInvitationCodeResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $bindTime;

    /**
     * @var string
     */
    public $endUserId;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var bool
     */
    public $expired;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $invitationCode;

    /**
     * @var string
     */
    public $platform;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $terminalGroupId;

    /**
     * @var string
     */
    public $terminalGroupName;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var string
     */
    public $uuid;

    /**
     * @var int
     */
    public $validityMinutes;
    protected $_name = [
        'bindTime' => 'BindTime',
        'endUserId' => 'EndUserId',
        'expireTime' => 'ExpireTime',
        'expired' => 'Expired',
        'gmtCreate' => 'GmtCreate',
        'invitationCode' => 'InvitationCode',
        'platform' => 'Platform',
        'status' => 'Status',
        'terminalGroupId' => 'TerminalGroupId',
        'terminalGroupName' => 'TerminalGroupName',
        'userName' => 'UserName',
        'uuid' => 'Uuid',
        'validityMinutes' => 'ValidityMinutes',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bindTime) {
            $res['BindTime'] = $this->bindTime;
        }

        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }

        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }

        if (null !== $this->expired) {
            $res['Expired'] = $this->expired;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->invitationCode) {
            $res['InvitationCode'] = $this->invitationCode;
        }

        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->terminalGroupId) {
            $res['TerminalGroupId'] = $this->terminalGroupId;
        }

        if (null !== $this->terminalGroupName) {
            $res['TerminalGroupName'] = $this->terminalGroupName;
        }

        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        if (null !== $this->validityMinutes) {
            $res['ValidityMinutes'] = $this->validityMinutes;
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
        if (isset($map['BindTime'])) {
            $model->bindTime = $map['BindTime'];
        }

        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }

        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        if (isset($map['Expired'])) {
            $model->expired = $map['Expired'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['InvitationCode'])) {
            $model->invitationCode = $map['InvitationCode'];
        }

        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TerminalGroupId'])) {
            $model->terminalGroupId = $map['TerminalGroupId'];
        }

        if (isset($map['TerminalGroupName'])) {
            $model->terminalGroupName = $map['TerminalGroupName'];
        }

        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        if (isset($map['ValidityMinutes'])) {
            $model->validityMinutes = $map['ValidityMinutes'];
        }

        return $model;
    }
}
