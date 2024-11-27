<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Tea\Model;

class CreateOperationTicketRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $approveComment;

    /**
     * @description This parameter is required.
     *
     * @example root
     *
     * @var string
     */
    public $assetAccountName;

    /**
     * @description This parameter is required.
     *
     * @example 2
     *
     * @var string
     */
    public $assetId;

    /**
     * @example 1679393152
     *
     * @var int
     */
    public $effectEndTime;

    /**
     * @example 1685600242
     *
     * @var int
     */
    public $effectStartTime;

    /**
     * @description This parameter is required.
     *
     * @example bastionhost-cn-st220aw****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example false
     *
     * @var bool
     */
    public $isOneTimeEffect;

    /**
     * @description This parameter is required.
     *
     * @example SSH
     *
     * @var string
     */
    public $protocolName;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'approveComment'   => 'ApproveComment',
        'assetAccountName' => 'AssetAccountName',
        'assetId'          => 'AssetId',
        'effectEndTime'    => 'EffectEndTime',
        'effectStartTime'  => 'EffectStartTime',
        'instanceId'       => 'InstanceId',
        'isOneTimeEffect'  => 'IsOneTimeEffect',
        'protocolName'     => 'ProtocolName',
        'regionId'         => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->approveComment) {
            $res['ApproveComment'] = $this->approveComment;
        }
        if (null !== $this->assetAccountName) {
            $res['AssetAccountName'] = $this->assetAccountName;
        }
        if (null !== $this->assetId) {
            $res['AssetId'] = $this->assetId;
        }
        if (null !== $this->effectEndTime) {
            $res['EffectEndTime'] = $this->effectEndTime;
        }
        if (null !== $this->effectStartTime) {
            $res['EffectStartTime'] = $this->effectStartTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->isOneTimeEffect) {
            $res['IsOneTimeEffect'] = $this->isOneTimeEffect;
        }
        if (null !== $this->protocolName) {
            $res['ProtocolName'] = $this->protocolName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateOperationTicketRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApproveComment'])) {
            $model->approveComment = $map['ApproveComment'];
        }
        if (isset($map['AssetAccountName'])) {
            $model->assetAccountName = $map['AssetAccountName'];
        }
        if (isset($map['AssetId'])) {
            $model->assetId = $map['AssetId'];
        }
        if (isset($map['EffectEndTime'])) {
            $model->effectEndTime = $map['EffectEndTime'];
        }
        if (isset($map['EffectStartTime'])) {
            $model->effectStartTime = $map['EffectStartTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['IsOneTimeEffect'])) {
            $model->isOneTimeEffect = $map['IsOneTimeEffect'];
        }
        if (isset($map['ProtocolName'])) {
            $model->protocolName = $map['ProtocolName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
