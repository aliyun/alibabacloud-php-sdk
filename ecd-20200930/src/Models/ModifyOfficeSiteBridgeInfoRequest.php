<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class ModifyOfficeSiteBridgeInfoRequest extends Model
{
    /**
     * @var string
     */
    public $bridgeId;

    /**
     * @var string
     */
    public $bridgeLevel;

    /**
     * @var string
     */
    public $bridgeType;

    /**
     * @var bool
     */
    public $enableBridge;

    /**
     * @var string
     */
    public $license;

    /**
     * @var string
     */
    public $officeSiteId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'bridgeId' => 'BridgeId',
        'bridgeLevel' => 'BridgeLevel',
        'bridgeType' => 'BridgeType',
        'enableBridge' => 'EnableBridge',
        'license' => 'License',
        'officeSiteId' => 'OfficeSiteId',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bridgeId) {
            $res['BridgeId'] = $this->bridgeId;
        }

        if (null !== $this->bridgeLevel) {
            $res['BridgeLevel'] = $this->bridgeLevel;
        }

        if (null !== $this->bridgeType) {
            $res['BridgeType'] = $this->bridgeType;
        }

        if (null !== $this->enableBridge) {
            $res['EnableBridge'] = $this->enableBridge;
        }

        if (null !== $this->license) {
            $res['License'] = $this->license;
        }

        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
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
        if (isset($map['BridgeId'])) {
            $model->bridgeId = $map['BridgeId'];
        }

        if (isset($map['BridgeLevel'])) {
            $model->bridgeLevel = $map['BridgeLevel'];
        }

        if (isset($map['BridgeType'])) {
            $model->bridgeType = $map['BridgeType'];
        }

        if (isset($map['EnableBridge'])) {
            $model->enableBridge = $map['EnableBridge'];
        }

        if (isset($map['License'])) {
            $model->license = $map['License'];
        }

        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
