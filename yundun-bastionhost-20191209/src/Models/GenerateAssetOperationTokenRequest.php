<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Tea\Model;

class GenerateAssetOperationTokenRequest extends Model
{
    /**
     * @example 2
     *
     * @var string
     */
    public $assetAccountId;

    /**
     * @example root
     *
     * @var string
     */
    public $assetAccountName;

    /**
     * @example dGVzdHBhc3N3b3Jk
     *
     * @var string
     */
    public $assetAccountPassword;

    /**
     * @example SSH
     *
     * @var string
     */
    public $assetAccountProtocolName;

    /**
     * @example 11
     *
     * @var string
     */
    public $assetId;

    /**
     * @example Host
     *
     * @var string
     */
    public $assetType;

    /**
     * @example bastionhost-cn-st220aw****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'assetAccountId'           => 'AssetAccountId',
        'assetAccountName'         => 'AssetAccountName',
        'assetAccountPassword'     => 'AssetAccountPassword',
        'assetAccountProtocolName' => 'AssetAccountProtocolName',
        'assetId'                  => 'AssetId',
        'assetType'                => 'AssetType',
        'instanceId'               => 'InstanceId',
        'regionId'                 => 'RegionId',
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
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
