<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ADBAI\V20250812\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ADBAI\V20250812\Models\CreateAgentPlatformRequest\aiPlatformConfig;

class CreateAgentPlatformRequest extends Model
{
    /**
     * @var aiPlatformConfig
     */
    public $aiPlatformConfig;

    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'aiPlatformConfig' => 'AiPlatformConfig',
        'DBClusterId' => 'DBClusterId',
        'name' => 'Name',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (null !== $this->aiPlatformConfig) {
            $this->aiPlatformConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aiPlatformConfig) {
            $res['AiPlatformConfig'] = null !== $this->aiPlatformConfig ? $this->aiPlatformConfig->toArray($noStream) : $this->aiPlatformConfig;
        }

        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['AiPlatformConfig'])) {
            $model->aiPlatformConfig = aiPlatformConfig::fromMap($map['AiPlatformConfig']);
        }

        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
