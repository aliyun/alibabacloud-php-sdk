<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Dara\Model;

class GenerateAssetOperationTokenRequest extends Model
{
    /**
     * @var string
     */
    public $assetAccountId;

    /**
     * @var string
     */
    public $assetAccountName;

    /**
     * @var string
     */
    public $assetAccountPassword;

    /**
     * @var string
     */
    public $assetAccountProtocolName;

    /**
     * @var string
     */
    public $assetId;

    /**
     * @var string
     */
    public $assetType;

    /**
     * @var string
     */
    public $databaseSchema;

    /**
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
     * @var string
     */
    public $operationNote;

    /**
     * @var string
     */
    public $regionId;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
