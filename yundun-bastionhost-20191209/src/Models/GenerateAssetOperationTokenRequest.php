<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Tea\Model;

class GenerateAssetOperationTokenRequest extends Model
{
    /**
     * @description The ID of the account whose assets the O\\&M token takes effect.
     *
     * >  You must specify at least one of the following parameters: AssetAccountId and AssetAccountName. If you specify both parameters, AssetAccountId takes precedence.
     *
     * @example 2
     *
     * @var string
     */
    public $assetAccountId;

    /**
     * @description The name of the host account. If you use a custom account, enter a real account name.
     *
     * >  When both AssetAccountId and AssetAccountName are specified, AssetAccountId takes precedence.
     *
     * @example root
     *
     * @var string
     */
    public $assetAccountName;

    /**
     * @description The Base64-encoded password. This parameter is required if you want to apply for an O\\&M token for a custom account.
     *
     * @example dGVzdHBhc3N3b3Jk
     *
     * @var string
     */
    public $assetAccountPassword;

    /**
     * @description The name of the protocol. Valid values:
     *
     *   SSH
     *   RDP
     *   Oracle
     *   PostgreSQL
     *   MySQL
     *   SQLServer
     *
     * @example SSH
     *
     * @var string
     */
    public $assetAccountProtocolName;

    /**
     * @description The ID of the asset for which you want to apply for an O\\&M token.
     *
     * This parameter is required.
     *
     * @example 11
     *
     * @var string
     */
    public $assetId;

    /**
     * @description The type of the asset for which you want to apply for an O\\&M token. Valid values:
     *
     *   **Host**
     *   **Database**
     *
     * This parameter is required.
     *
     * @example Host
     *
     * @var string
     */
    public $assetType;

    /**
     * @description The name of the database. If you set OperationMode to Sso and AssetAccountProtocolName to PostgreSQL or Oracle and you select Custom Account for the Database Account parameter, you must specify this parameter.
     *
     * >This parameter is available only for bastion hosts that run V3.2.44 or later.
     *
     * @example orcl
     *
     * @var string
     */
    public $databaseSchema;

    /**
     * @description The ID of the bastion host for which you want to apply an O\\&M token.
     *
     * >  You can call the [DescribeInstances](https://help.aliyun.com/document_detail/153281.html) operation to query the ID of the bastion host.
     *
     * This parameter is required.
     *
     * @example bastionhost-cn-st220aw****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The logon attribute. If you set OperationMode to Sso and AssetAccountProtocolName to Oracle, you must specify this parameter. Valid values:
     *
     *   **SERVICENAME**
     *   **SID**
     *
     * >  This parameter is available only for bastion hosts that run V3.2.44 or later.
     *
     * @example SID
     *
     * @var string
     */
    public $loginAttribute;

    /**
     * @description The O\\&M logon method. Valid values:
     *
     *   **WebToken**: O\\&M token-based logon.
     *   **Sso**: Local client-based logon.
     *
     * >  This parameter is available only for bastion hosts that run V3.2.44 or later. If you do not specify this parameter, the default value WebToken is used.
     *
     * @example Sso
     *
     * @var string
     */
    public $operationMode;

    /**
     * @var string
     */
    public $operationNote;

    /**
     * @description The region ID of the bastion host.
     *
     * >  For more information about the mapping between region IDs and region names, see [Regions and zones](https://help.aliyun.com/document_detail/40654.html).
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The type of the local client that you want to perform O\\&M operations on Linux assets. If you set OperationMode to Sso and AssetAccountProtocolName to SSH, you must specify this parameter. Valid values:
     *
     *   **ssh**: Perform O\\&M operations on Linux assets by connecting to a bastion host from an SSH client.
     *   **sftp**: Perform O\\&M operations on Linux assets by connecting to a bastion host from a Secure File Transfer Protocol (SFTP) client.
     *
     * >  This parameter is available only for bastion hosts that run V3.2.44 or later.
     *
     * @example ssh
     *
     * @var string
     */
    public $ssoClient;
    protected $_name = [
        'assetAccountId' => 'AssetAccountId',
        'assetAccountName' => 'AssetAccountName',
        'assetAccountPassword' => 'AssetAccountPassword',
        'assetAccountProtocolName' => 'AssetAccountProtocolName',
        'assetId' => 'AssetId',
        'assetType' => 'AssetType',
        'databaseSchema' => 'DatabaseSchema',
        'instanceId' => 'InstanceId',
        'loginAttribute' => 'LoginAttribute',
        'operationMode' => 'OperationMode',
        'operationNote' => 'OperationNote',
        'regionId' => 'RegionId',
        'ssoClient' => 'SsoClient',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->assetAccountId) {
            $res['AssetAccountId'] = $this->assetAccountId;
        }
        if (null !== $this->assetAccountName) {
            $res['AssetAccountName'] = $this->assetAccountName;
        }
        if (null !== $this->assetAccountPassword) {
            $res['AssetAccountPassword'] = $this->assetAccountPassword;
        }
        if (null !== $this->assetAccountProtocolName) {
            $res['AssetAccountProtocolName'] = $this->assetAccountProtocolName;
        }
        if (null !== $this->assetId) {
            $res['AssetId'] = $this->assetId;
        }
        if (null !== $this->assetType) {
            $res['AssetType'] = $this->assetType;
        }
        if (null !== $this->databaseSchema) {
            $res['DatabaseSchema'] = $this->databaseSchema;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->loginAttribute) {
            $res['LoginAttribute'] = $this->loginAttribute;
        }
        if (null !== $this->operationMode) {
            $res['OperationMode'] = $this->operationMode;
        }
        if (null !== $this->operationNote) {
            $res['OperationNote'] = $this->operationNote;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->ssoClient) {
            $res['SsoClient'] = $this->ssoClient;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateAssetOperationTokenRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssetAccountId'])) {
            $model->assetAccountId = $map['AssetAccountId'];
        }
        if (isset($map['AssetAccountName'])) {
            $model->assetAccountName = $map['AssetAccountName'];
        }
        if (isset($map['AssetAccountPassword'])) {
            $model->assetAccountPassword = $map['AssetAccountPassword'];
        }
        if (isset($map['AssetAccountProtocolName'])) {
            $model->assetAccountProtocolName = $map['AssetAccountProtocolName'];
        }
        if (isset($map['AssetId'])) {
            $model->assetId = $map['AssetId'];
        }
        if (isset($map['AssetType'])) {
            $model->assetType = $map['AssetType'];
        }
        if (isset($map['DatabaseSchema'])) {
            $model->databaseSchema = $map['DatabaseSchema'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['LoginAttribute'])) {
            $model->loginAttribute = $map['LoginAttribute'];
        }
        if (isset($map['OperationMode'])) {
            $model->operationMode = $map['OperationMode'];
        }
        if (isset($map['OperationNote'])) {
            $model->operationNote = $map['OperationNote'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SsoClient'])) {
            $model->ssoClient = $map['SsoClient'];
        }

        return $model;
    }
}
