<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\CreateApplicationVersionRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\CreateApplicationVersionRequest\scriptProfile\agentProfile;

class scriptProfile extends Model
{
    /**
     * @var agentProfile
     */
    public $agentProfile;

    /**
     * @var string
     */
    public $model;
    protected $_name = [
        'agentProfile' => 'AgentProfile',
        'model' => 'Model',
    ];

    public function validate()
    {
        if (null !== $this->agentProfile) {
            $this->agentProfile->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentProfile) {
            $res['AgentProfile'] = null !== $this->agentProfile ? $this->agentProfile->toArray($noStream) : $this->agentProfile;
        }

        if (null !== $this->model) {
            $res['Model'] = $this->model;
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
        if (isset($map['AgentProfile'])) {
            $model->agentProfile = agentProfile::fromMap($map['AgentProfile']);
        }

        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }

        return $model;
    }
}
