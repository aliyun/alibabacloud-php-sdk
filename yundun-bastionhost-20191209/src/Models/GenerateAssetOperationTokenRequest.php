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
     * @example 2
     *
     * @var string
     */
    public $assetAccountId;

    /**
     * @description The name of the host account. If you use a custom account, enter a real account name.
     *
     * >  When both AssetAccountId and AssetAccountName are specified, AssetAccountId takes precedence.
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
     * @example Host
     *
     * @var string
     */
    public $assetType;

    /**
     * @var string
     */
    public $databaseSchema;

    /**
     * @description The ID of the bastion host for which you want to apply an O\\&M token.
     *
     * This parameter is required.
     * @example bastionhost-cn-st220aw****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $loginAttribute;

    /**
     * @var string
     */
    public $operationMode;

    /**
     * @description The region ID of the bastion host.
     *
     * >  For more information about the mapping between region IDs and region names, see [Regions and zones](https://help.aliyun.com/document_detail/40654.html).
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $ssoClient;
    protected $_name = [
        'assetAccountId'           => 'AssetAccountId',
        'assetAccountName'         => 'AssetAccountName',
        'assetAccountPassword'     => 'AssetAccountPassword',
        'assetAccountProtocolName' => 'AssetAccountProtocolName',
        'assetId'                  => 'AssetId',
        'assetType'                => 'AssetType',
        'databaseSchema'           => 'DatabaseSchema',
        'instanceId'               => 'InstanceId',
        'loginAttribute'           => 'LoginAttribute',
        'operationMode'            => 'OperationMode',
        'regionId'                 => 'RegionId',
        'ssoClient'                => 'SsoClient',
    ];

    public function validate()
    {
    }

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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SsoClient'])) {
            $model->ssoClient = $map['SsoClient'];
        }

        return $model;
    }
}
