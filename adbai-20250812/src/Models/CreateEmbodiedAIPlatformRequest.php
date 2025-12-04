<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ADBAI\V20250812\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ADBAI\V20250812\Models\CreateEmbodiedAIPlatformRequest\rayConfig;

class CreateEmbodiedAIPlatformRequest extends Model
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
     * @var rayConfig
     */
    public $rayConfig;

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
        'rayConfig' => 'RayConfig',
        'regionId' => 'RegionId',
        'webserverSpecName' => 'WebserverSpecName',
    ];

    public function validate()
    {
        if (null !== $this->rayConfig) {
            $this->rayConfig->validate();
        }
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

        if (null !== $this->rayConfig) {
            $res['RayConfig'] = null !== $this->rayConfig ? $this->rayConfig->toArray($noStream) : $this->rayConfig;
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
            $model->rayConfig = rayConfig::fromMap($map['RayConfig']);
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
