<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Tea\Model;

class CreateHanaInstanceRequest extends Model
{
    /**
     * @description The alert settings. Valid value: INHERITED, which indicates that the backup client sends alert notifications in the same way as the backup vault.
     *
     * @example INHERITED
     *
     * @var string
     */
    public $alertSetting;

    /**
     * @description The IDs of ECS instances that host the SAP HANA instance to be registered. HBR installs backup clients on the specified ECS instances.
     *
     * @example [\"i-uf6ir9y******hvisj\"]
     *
     * @var string
     */
    public $ecsInstanceId;

    /**
     * @description The name of the SAP HANA instance.
     *
     * @example HANA-DEV
     *
     * @var string
     */
    public $hanaName;

    /**
     * @description The private or internal IP address of the host where the primary node of the SAP HANA instance resides.
     *
     * @example 47.100.XX.XX
     *
     * @var string
     */
    public $host;

    /**
     * @description The instance number of the SAP HANA system.
     *
     * @example 00
     *
     * @var int
     */
    public $instanceNumber;

    /**
     * @description The password that is used to connect with the SAP HANA database.
     *
     * @example ************
     *
     * @var string
     */
    public $password;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfm4ebtpkzx7zy
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The security identifier (SID) of the SAP HANA database.
     *
     * For more information, see [How to find sid user and instance number of HANA db?](https://answers.sap.com/questions/555192/how-to-find-sid-user-and-instance-number-of-hana-d.html?spm=a2c4g.11186623.0.0.55c34b4ftZeXNK)
     * @example HXE
     *
     * @var string
     */
    public $sid;

    /**
     * @description Specifies whether to connect with the SAP HANA database over Secure Sockets Layer (SSL).
     *
     * @example true
     *
     * @var bool
     */
    public $useSsl;

    /**
     * @description The username of the SYSTEMDB database.
     *
     * @example admin
     *
     * @var string
     */
    public $userName;

    /**
     * @description Specifies whether to verify the SSL certificate of the SAP HANA database.
     *
     * @example false
     *
     * @var bool
     */
    public $validateCertificate;

    /**
     * @description The ID of the backup vault.
     *
     * @example v-0003v4a******gfv2
     *
     * @var string
     */
    public $vaultId;
    protected $_name = [
        'alertSetting'        => 'AlertSetting',
        'ecsInstanceId'       => 'EcsInstanceId',
        'hanaName'            => 'HanaName',
        'host'                => 'Host',
        'instanceNumber'      => 'InstanceNumber',
        'password'            => 'Password',
        'resourceGroupId'     => 'ResourceGroupId',
        'sid'                 => 'Sid',
        'useSsl'              => 'UseSsl',
        'userName'            => 'UserName',
        'validateCertificate' => 'ValidateCertificate',
        'vaultId'             => 'VaultId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertSetting) {
            $res['AlertSetting'] = $this->alertSetting;
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

    /**
     * @param array $map
     *
     * @return CreateHanaInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertSetting'])) {
            $model->alertSetting = $map['AlertSetting'];
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
