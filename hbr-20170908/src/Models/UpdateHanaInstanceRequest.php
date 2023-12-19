<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Tea\Model;

class UpdateHanaInstanceRequest extends Model
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
     * @description The ID of the SAP HANA instance.
     *
     * @example cl-000axjt******c6j8
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The name of the SAP HANA instance.
     *
     * @example SAP-HANA-DEV
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
     * @example **********
     *
     * @var string
     */
    public $password;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-aekzvx7d3c4kpny
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description Specifies whether to connect with the SAP HANA database over Secure Sockets Layer (SSL). Valid values:
     *
     *   true: The SAP HANA database is connected over SSL.
     *   false: The SAP HANA database is not connected over SSL.
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
     * @description Specifies whether to verify the SSL certificate of the SAP HANA database. Valid values:
     *
     *   true: The SSL certificate of the SAP HANA instance is verified.
     *   false: The SSL certificate of the SAP HANA instance is not verified.
     *
     * @example false
     *
     * @var bool
     */
    public $validateCertificate;

    /**
     * @description The ID of the backup vault.
     *
     * @example v-0003v4ah******9xp
     *
     * @var string
     */
    public $vaultId;
    protected $_name = [
        'alertSetting'        => 'AlertSetting',
        'clusterId'           => 'ClusterId',
        'hanaName'            => 'HanaName',
        'host'                => 'Host',
        'instanceNumber'      => 'InstanceNumber',
        'password'            => 'Password',
        'resourceGroupId'     => 'ResourceGroupId',
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
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
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
     * @return UpdateHanaInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertSetting'])) {
            $model->alertSetting = $map['AlertSetting'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
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
