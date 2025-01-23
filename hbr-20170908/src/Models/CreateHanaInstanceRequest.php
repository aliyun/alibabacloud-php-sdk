<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Dara\Model;

class CreateHanaInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $alertSetting;
    /**
     * @var string
     */
    public $crossAccountRoleName;
    /**
     * @var string
     */
    public $crossAccountType;
    /**
     * @var int
     */
    public $crossAccountUserId;
    /**
     * @var string
     */
    public $ecsInstanceId;
    /**
     * @var string
     */
    public $hanaName;
    /**
     * @var string
     */
    public $host;
    /**
     * @var int
     */
    public $instanceNumber;
    /**
     * @var string
     */
    public $password;
    /**
     * @var string
     */
    public $resourceGroupId;
    /**
     * @var string
     */
    public $sid;
    /**
     * @var bool
     */
    public $useSsl;
    /**
     * @var string
     */
    public $userName;
    /**
     * @var bool
     */
    public $validateCertificate;
    /**
     * @var string
     */
    public $vaultId;
    protected $_name = [
        'alertSetting'         => 'AlertSetting',
        'crossAccountRoleName' => 'CrossAccountRoleName',
        'crossAccountType'     => 'CrossAccountType',
        'crossAccountUserId'   => 'CrossAccountUserId',
        'ecsInstanceId'        => 'EcsInstanceId',
        'hanaName'             => 'HanaName',
        'host'                 => 'Host',
        'instanceNumber'       => 'InstanceNumber',
        'password'             => 'Password',
        'resourceGroupId'      => 'ResourceGroupId',
        'sid'                  => 'Sid',
        'useSsl'               => 'UseSsl',
        'userName'             => 'UserName',
        'validateCertificate'  => 'ValidateCertificate',
        'vaultId'              => 'VaultId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertSetting) {
            $res['AlertSetting'] = $this->alertSetting;
        }

        if (null !== $this->crossAccountRoleName) {
            $res['CrossAccountRoleName'] = $this->crossAccountRoleName;
        }

        if (null !== $this->crossAccountType) {
            $res['CrossAccountType'] = $this->crossAccountType;
        }

        if (null !== $this->crossAccountUserId) {
            $res['CrossAccountUserId'] = $this->crossAccountUserId;
        }

        if (null !== $this->ecsInstanceId) {
            $res['EcsInstanceId'] = $this->ecsInstanceId;
        }

        if (null !== $this->hanaName) {
            $res['HanaName'] = $this->hanaName;
        }

        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }

        if (null !== $this->instanceNumber) {
            $res['InstanceNumber'] = $this->instanceNumber;
        }

        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->sid) {
            $res['Sid'] = $this->sid;
        }

        if (null !== $this->useSsl) {
            $res['UseSsl'] = $this->useSsl;
        }

        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        if (null !== $this->validateCertificate) {
            $res['ValidateCertificate'] = $this->validateCertificate;
        }

        if (null !== $this->vaultId) {
            $res['VaultId'] = $this->vaultId;
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
        if (isset($map['AlertSetting'])) {
            $model->alertSetting = $map['AlertSetting'];
        }

        if (isset($map['CrossAccountRoleName'])) {
            $model->crossAccountRoleName = $map['CrossAccountRoleName'];
        }

        if (isset($map['CrossAccountType'])) {
            $model->crossAccountType = $map['CrossAccountType'];
        }

        if (isset($map['CrossAccountUserId'])) {
            $model->crossAccountUserId = $map['CrossAccountUserId'];
        }

        if (isset($map['EcsInstanceId'])) {
            $model->ecsInstanceId = $map['EcsInstanceId'];
        }

        if (isset($map['HanaName'])) {
            $model->hanaName = $map['HanaName'];
        }

        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }

        if (isset($map['InstanceNumber'])) {
            $model->instanceNumber = $map['InstanceNumber'];
        }

        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['Sid'])) {
            $model->sid = $map['Sid'];
        }

        if (isset($map['UseSsl'])) {
            $model->useSsl = $map['UseSsl'];
        }

        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        if (isset($map['ValidateCertificate'])) {
            $model->validateCertificate = $map['ValidateCertificate'];
        }

        if (isset($map['VaultId'])) {
            $model->vaultId = $map['VaultId'];
        }

        return $model;
    }
}
