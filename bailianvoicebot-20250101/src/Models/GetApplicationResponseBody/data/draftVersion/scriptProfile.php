<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\GetApplicationResponseBody\data\draftVersion;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\GetApplicationResponseBody\data\draftVersion\scriptProfile\agentProfile;

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

    /**
     * @var string
     */
    public $temperature;

    /**
     * @var string
     */
    public $topP;
    protected $_name = [
        'agentProfile' => 'AgentProfile',
        'model' => 'Model',
        'temperature' => 'Temperature',
        'topP' => 'TopP',
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

        if (null !== $this->temperature) {
            $res['Temperature'] = $this->temperature;
        }

        if (null !== $this->topP) {
            $res['TopP'] = $this->topP;
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

        if (isset($map['Temperature'])) {
            $model->temperature = $map['Temperature'];
        }

        if (isset($map['TopP'])) {
            $model->topP = $map['TopP'];
        }

        return $model;
    }
}
