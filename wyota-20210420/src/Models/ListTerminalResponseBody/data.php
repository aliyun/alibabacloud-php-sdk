<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models\ListTerminalResponseBody;

use AlibabaCloud\Tea\Model;

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
    public $bindUserId;

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
    public $desktopId;

    /**
     * @var bool
     */
    public $inManage;

    /**
     * @var string
     */
    public $ipv4;

    /**
     * @deprecated
     *
     * @var string
     */
    public $lastLoginUser;

    /**
     * @var string
     */
    public $locationInfo;

    /**
     * @var bool
     */
    public $lockSettings;

    /**
     * @var string
     */
    public $loginUser;

    /**
     * @var string
     */
    public $model;

    /**
     * @var bool
     */
    public $onlineStatus;

    /**
     * @var string
     */
    public $serialNumber;

    /**
     * @var string
     */
    public $terminalGroupId;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'alias'           => 'Alias',
        'bindUserCount'   => 'BindUserCount',
        'bindUserId'      => 'BindUserId',
        'buildId'         => 'BuildId',
        'clientType'      => 'ClientType',
        'desktopId'       => 'DesktopId',
        'inManage'        => 'InManage',
        'ipv4'            => 'Ipv4',
        'lastLoginUser'   => 'LastLoginUser',
        'locationInfo'    => 'LocationInfo',
        'lockSettings'    => 'LockSettings',
        'loginUser'       => 'LoginUser',
        'model'           => 'Model',
        'onlineStatus'    => 'OnlineStatus',
        'serialNumber'    => 'SerialNumber',
        'terminalGroupId' => 'TerminalGroupId',
        'uuid'            => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alias) {
            $res['Alias'] = $this->alias;
        }
        if (null !== $this->bindUserCount) {
            $res['BindUserCount'] = $this->bindUserCount;
        }
        if (null !== $this->bindUserId) {
            $res['BindUserId'] = $this->bindUserId;
        }
        if (null !== $this->buildId) {
            $res['BuildId'] = $this->buildId;
        }
        if (null !== $this->clientType) {
            $res['ClientType'] = $this->clientType;
        }
        if (null !== $this->desktopId) {
            $res['DesktopId'] = $this->desktopId;
        }
        if (null !== $this->inManage) {
            $res['InManage'] = $this->inManage;
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
        if (null !== $this->lockSettings) {
            $res['LockSettings'] = $this->lockSettings;
        }
        if (null !== $this->loginUser) {
            $res['LoginUser'] = $this->loginUser;
        }
        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }
        if (null !== $this->onlineStatus) {
            $res['OnlineStatus'] = $this->onlineStatus;
        }
        if (null !== $this->serialNumber) {
            $res['SerialNumber'] = $this->serialNumber;
        }
        if (null !== $this->terminalGroupId) {
            $res['TerminalGroupId'] = $this->terminalGroupId;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Alias'])) {
            $model->alias = $map['Alias'];
        }
        if (isset($map['BindUserCount'])) {
            $model->bindUserCount = $map['BindUserCount'];
        }
        if (isset($map['BindUserId'])) {
            $model->bindUserId = $map['BindUserId'];
        }
        if (isset($map['BuildId'])) {
            $model->buildId = $map['BuildId'];
        }
        if (isset($map['ClientType'])) {
            $model->clientType = $map['ClientType'];
        }
        if (isset($map['DesktopId'])) {
            $model->desktopId = $map['DesktopId'];
        }
        if (isset($map['InManage'])) {
            $model->inManage = $map['InManage'];
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
        if (isset($map['LockSettings'])) {
            $model->lockSettings = $map['LockSettings'];
        }
        if (isset($map['LoginUser'])) {
            $model->loginUser = $map['LoginUser'];
        }
        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }
        if (isset($map['OnlineStatus'])) {
            $model->onlineStatus = $map['OnlineStatus'];
        }
        if (isset($map['SerialNumber'])) {
            $model->serialNumber = $map['SerialNumber'];
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
