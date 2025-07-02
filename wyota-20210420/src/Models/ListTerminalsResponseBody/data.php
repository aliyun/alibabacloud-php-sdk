<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models\ListTerminalsResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $alias;

    /**
     * @var int
     */
    public $bindUserCount;

    /**
     * @var string
     */
    public $buildId;

    /**
     * @var int
     */
    public $clientType;

    /**
     * @var string
     */
    public $currentConnectDesktop;

    /**
     * @var string
     */
    public $currentLoginUser;

    /**
     * @var string
     */
    public $ipv4;

    /**
     * @var string
     */
    public $lastLoginUser;

    /**
     * @var string
     */
    public $locationInfo;

    /**
     * @var string
     */
    public $manageTime;

    /**
     * @var string
     */
    public $model;

    /**
     * @var bool
     */
    public $online;

    /**
     * @var string
     */
    public $passwordFreeLoginUser;

    /**
     * @var string
     */
    public $publicIpv4;

    /**
     * @var string
     */
    public $serialNumber;

    /**
     * @var string
     */
    public $setPasswordFreeLoginUserTime;

    /**
     * @var string
     */
    public $terminalGroupId;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'alias' => 'Alias',
        'bindUserCount' => 'BindUserCount',
        'buildId' => 'BuildId',
        'clientType' => 'ClientType',
        'currentConnectDesktop' => 'CurrentConnectDesktop',
        'currentLoginUser' => 'CurrentLoginUser',
        'ipv4' => 'Ipv4',
        'lastLoginUser' => 'LastLoginUser',
        'locationInfo' => 'LocationInfo',
        'manageTime' => 'ManageTime',
        'model' => 'Model',
        'online' => 'Online',
        'passwordFreeLoginUser' => 'PasswordFreeLoginUser',
        'publicIpv4' => 'PublicIpv4',
        'serialNumber' => 'SerialNumber',
        'setPasswordFreeLoginUserTime' => 'SetPasswordFreeLoginUserTime',
        'terminalGroupId' => 'TerminalGroupId',
        'uuid' => 'Uuid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alias) {
            $res['Alias'] = $this->alias;
        }

        if (null !== $this->bindUserCount) {
            $res['BindUserCount'] = $this->bindUserCount;
        }

        if (null !== $this->buildId) {
            $res['BuildId'] = $this->buildId;
        }

        if (null !== $this->clientType) {
            $res['ClientType'] = $this->clientType;
        }

        if (null !== $this->currentConnectDesktop) {
            $res['CurrentConnectDesktop'] = $this->currentConnectDesktop;
        }

        if (null !== $this->currentLoginUser) {
            $res['CurrentLoginUser'] = $this->currentLoginUser;
        }

        if (null !== $this->ipv4) {
            $res['Ipv4'] = $this->ipv4;
        }

        if (null !== $this->lastLoginUser) {
            $res['LastLoginUser'] = $this->lastLoginUser;
        }

        if (null !== $this->locationInfo) {
            $res['LocationInfo'] = $this->locationInfo;
        }

        if (null !== $this->manageTime) {
            $res['ManageTime'] = $this->manageTime;
        }

        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }

        if (null !== $this->online) {
            $res['Online'] = $this->online;
        }

        if (null !== $this->passwordFreeLoginUser) {
            $res['PasswordFreeLoginUser'] = $this->passwordFreeLoginUser;
        }

        if (null !== $this->publicIpv4) {
            $res['PublicIpv4'] = $this->publicIpv4;
        }

        if (null !== $this->serialNumber) {
            $res['SerialNumber'] = $this->serialNumber;
        }

        if (null !== $this->setPasswordFreeLoginUserTime) {
            $res['SetPasswordFreeLoginUserTime'] = $this->setPasswordFreeLoginUserTime;
        }

        if (null !== $this->terminalGroupId) {
            $res['TerminalGroupId'] = $this->terminalGroupId;
        }

        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
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
        if (isset($map['Alias'])) {
            $model->alias = $map['Alias'];
        }

        if (isset($map['BindUserCount'])) {
            $model->bindUserCount = $map['BindUserCount'];
        }

        if (isset($map['BuildId'])) {
            $model->buildId = $map['BuildId'];
        }

        if (isset($map['ClientType'])) {
            $model->clientType = $map['ClientType'];
        }

        if (isset($map['CurrentConnectDesktop'])) {
            $model->currentConnectDesktop = $map['CurrentConnectDesktop'];
        }

        if (isset($map['CurrentLoginUser'])) {
            $model->currentLoginUser = $map['CurrentLoginUser'];
        }

        if (isset($map['Ipv4'])) {
            $model->ipv4 = $map['Ipv4'];
        }

        if (isset($map['LastLoginUser'])) {
            $model->lastLoginUser = $map['LastLoginUser'];
        }

        if (isset($map['LocationInfo'])) {
            $model->locationInfo = $map['LocationInfo'];
        }

        if (isset($map['ManageTime'])) {
            $model->manageTime = $map['ManageTime'];
        }

        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }

        if (isset($map['Online'])) {
            $model->online = $map['Online'];
        }

        if (isset($map['PasswordFreeLoginUser'])) {
            $model->passwordFreeLoginUser = $map['PasswordFreeLoginUser'];
        }

        if (isset($map['PublicIpv4'])) {
            $model->publicIpv4 = $map['PublicIpv4'];
        }

        if (isset($map['SerialNumber'])) {
            $model->serialNumber = $map['SerialNumber'];
        }

        if (isset($map['SetPasswordFreeLoginUserTime'])) {
            $model->setPasswordFreeLoginUserTime = $map['SetPasswordFreeLoginUserTime'];
        }

        if (isset($map['TerminalGroupId'])) {
            $model->terminalGroupId = $map['TerminalGroupId'];
        }

        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
