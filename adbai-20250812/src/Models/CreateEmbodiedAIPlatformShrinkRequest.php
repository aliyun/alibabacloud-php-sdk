<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ADBAI\V20250812\Models;

use AlibabaCloud\Dara\Model;

class CreateEmbodiedAIPlatformShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $platformName;

    /**
     * @var string
     */
    public $rayConfigShrink;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $webserverSpecName;
    protected $_name = [
        'DBClusterId' => 'DBClusterId',
        'platformName' => 'PlatformName',
        'rayConfigShrink' => 'RayConfig',
        'regionId' => 'RegionId',
        'webserverSpecName' => 'WebserverSpecName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->platformName) {
            $res['PlatformName'] = $this->platformName;
        }

        if (null !== $this->rayConfigShrink) {
            $res['RayConfig'] = $this->rayConfigShrink;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->webserverSpecName) {
            $res['WebserverSpecName'] = $this->webserverSpecName;
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
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['PlatformName'])) {
            $model->platformName = $map['PlatformName'];
        }

        if (isset($map['RayConfig'])) {
            $model->rayConfigShrink = $map['RayConfig'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['WebserverSpecName'])) {
            $model->webserverSpecName = $map['WebserverSpecName'];
        }

        return $model;
    }
}
