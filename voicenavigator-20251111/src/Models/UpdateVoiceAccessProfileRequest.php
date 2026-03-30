<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20251111\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\UpdateVoiceAccessProfileRequest\profile;

class UpdateVoiceAccessProfileRequest extends Model
{
    /**
     * @var string
     */
    public $accessProfileId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $nlsEngine;

    /**
     * @var profile
     */
    public $profile;
    protected $_name = [
        'accessProfileId' => 'AccessProfileId',
        'instanceId' => 'InstanceId',
        'nlsEngine' => 'NlsEngine',
        'profile' => 'Profile',
    ];

    public function validate()
    {
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

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->nlsEngine) {
            $res['NlsEngine'] = $this->nlsEngine;
        }

        if (null !== $this->profile) {
            $res['Profile'] = null !== $this->profile ? $this->profile->toArray($noStream) : $this->profile;
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

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['NlsEngine'])) {
            $model->nlsEngine = $map['NlsEngine'];
        }

        if (isset($map['Profile'])) {
            $model->profile = profile::fromMap($map['Profile']);
        }

        return $model;
    }
}
