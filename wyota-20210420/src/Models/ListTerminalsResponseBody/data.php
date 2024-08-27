<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models\ListTerminalsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example DemoDevice
     *
     * @var string
     */
    public $alias;

    /**
     * @example 7.0.2-RS-20240805.044924
     *
     * @var string
     */
    public $buildId;

    /**
     * @example 1
     *
     * @var int
     */
    public $clientType;

    /**
     * @example ecd-drqmaogzbmbdf****
     *
     * @var string
     */
    public $currentConnectDesktop;

    /**
     * @example alice
     *
     * @var string
     */
    public $currentLoginUser;

    /**
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $ipv4;

    /**
     * @var string
     */
    public $locationInfo;

    /**
     * @var string
     */
    public $manageTime;

    /**
     * @example US01
     *
     * @var string
     */
    public $model;

    /**
     * @example true
     *
     * @var bool
     */
    public $online;

    /**
     * @example alice
     *
     * @var string
     */
    public $passwordFreeLoginUser;

    /**
     * @example ODN49YQCPQYC****
     *
     * @var string
     */
    public $serialNumber;

    /**
     * @var string
     */
    public $setPasswordFreeLoginUserTime;

    /**
     * @example tg-default
     *
     * @var string
     */
    public $terminalGroupId;

    /**
     * @example 04873D3898B51A7DF2455C1E1DC9****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'alias'                        => 'Alias',
        'buildId'                      => 'BuildId',
        'clientType'                   => 'ClientType',
        'currentConnectDesktop'        => 'CurrentConnectDesktop',
        'currentLoginUser'             => 'CurrentLoginUser',
        'ipv4'                         => 'Ipv4',
        'locationInfo'                 => 'LocationInfo',
        'manageTime'                   => 'ManageTime',
        'model'                        => 'Model',
        'online'                       => 'Online',
        'passwordFreeLoginUser'        => 'PasswordFreeLoginUser',
        'serialNumber'                 => 'SerialNumber',
        'setPasswordFreeLoginUserTime' => 'SetPasswordFreeLoginUserTime',
        'terminalGroupId'              => 'TerminalGroupId',
        'uuid'                         => 'Uuid',
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
