<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\ListVoiceAccessProfileResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\ListVoiceAccessProfileResponseBody\data\voiceAccessProfiles\profile;

class voiceAccessProfiles extends Model
{
    /**
     * @var string
     */
    public $accessProfileId;

    /**
     * @var string[]
     */
    public $capabilities;

    /**
     * @var int
     */
    public $createdTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $nlsEngine;

    /**
     * @var string
     */
    public $nlsEngineName;

    /**
     * @var profile
     */
    public $profile;

    /**
     * @var int
     */
    public $updatedTime;
    protected $_name = [
        'accessProfileId' => 'AccessProfileId',
        'capabilities' => 'Capabilities',
        'createdTime' => 'CreatedTime',
        'instanceId' => 'InstanceId',
        'nlsEngine' => 'NlsEngine',
        'nlsEngineName' => 'NlsEngineName',
        'profile' => 'Profile',
        'updatedTime' => 'UpdatedTime',
    ];

    public function validate()
    {
        if (\is_array($this->capabilities)) {
            Model::validateArray($this->capabilities);
        }
        if (null !== $this->profile) {
            $this->profile->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessProfileId) {
            $res['AccessProfileId'] = $this->accessProfileId;
        }

        if (null !== $this->capabilities) {
            if (\is_array($this->capabilities)) {
                $res['Capabilities'] = [];
                $n1 = 0;
                foreach ($this->capabilities as $item1) {
                    $res['Capabilities'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->nlsEngine) {
            $res['NlsEngine'] = $this->nlsEngine;
        }

        if (null !== $this->nlsEngineName) {
            $res['NlsEngineName'] = $this->nlsEngineName;
        }

        if (null !== $this->profile) {
            $res['Profile'] = null !== $this->profile ? $this->profile->toArray($noStream) : $this->profile;
        }

        if (null !== $this->updatedTime) {
            $res['UpdatedTime'] = $this->updatedTime;
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
        if (isset($map['AccessProfileId'])) {
            $model->accessProfileId = $map['AccessProfileId'];
        }

        if (isset($map['Capabilities'])) {
            if (!empty($map['Capabilities'])) {
                $model->capabilities = [];
                $n1 = 0;
                foreach ($map['Capabilities'] as $item1) {
                    $model->capabilities[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['NlsEngine'])) {
            $model->nlsEngine = $map['NlsEngine'];
        }

        if (isset($map['NlsEngineName'])) {
            $model->nlsEngineName = $map['NlsEngineName'];
        }

        if (isset($map['Profile'])) {
            $model->profile = profile::fromMap($map['Profile']);
        }

        if (isset($map['UpdatedTime'])) {
            $model->updatedTime = $map['UpdatedTime'];
        }

        return $model;
    }
}
