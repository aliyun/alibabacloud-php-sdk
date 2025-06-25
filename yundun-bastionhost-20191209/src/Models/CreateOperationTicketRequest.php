<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Dara\Model;

class CreateOperationTicketRequest extends Model
{
    /**
     * @var string
     */
    public $approveComment;

    /**
     * @var string
     */
    public $assetAccountName;

    /**
     * @var string
     */
    public $assetId;

    /**
     * @var int
     */
    public $effectEndTime;

    /**
     * @var int
     */
    public $effectStartTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var bool
     */
    public $isOneTimeEffect;

    /**
     * @var string
     */
    public $protocolName;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'approveComment' => 'ApproveComment',
        'assetAccountName' => 'AssetAccountName',
        'assetId' => 'AssetId',
        'effectEndTime' => 'EffectEndTime',
        'effectStartTime' => 'EffectStartTime',
        'instanceId' => 'InstanceId',
        'isOneTimeEffect' => 'IsOneTimeEffect',
        'protocolName' => 'ProtocolName',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
