<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20251111\Models;

use AlibabaCloud\Dara\Model;

class UpdateVoiceAccessProfileShrinkRequest extends Model
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
     * @var string
     */
    public $profileShrink;
    protected $_name = [
        'accessProfileId' => 'AccessProfileId',
        'instanceId' => 'InstanceId',
        'nlsEngine' => 'NlsEngine',
        'profileShrink' => 'Profile',
    ];

    public function validate()
    {
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

        if (null !== $this->profileShrink) {
            $res['Profile'] = $this->profileShrink;
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
            $model->profileShrink = $map['Profile'];
        }

        return $model;
    }
}
