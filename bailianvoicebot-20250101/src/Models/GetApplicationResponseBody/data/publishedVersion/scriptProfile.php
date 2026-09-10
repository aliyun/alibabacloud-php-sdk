<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\GetApplicationResponseBody\data\publishedVersion;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\GetApplicationResponseBody\data\publishedVersion\scriptProfile\agentProfile;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\GetApplicationResponseBody\data\publishedVersion\scriptProfile\functionMeta;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\GetApplicationResponseBody\data\publishedVersion\scriptProfile\nluAccessProfile;

class scriptProfile extends Model
{
    /**
     * @var string
     */
    public $agentKey;

    /**
     * @var agentProfile
     */
    public $agentProfile;

    /**
     * @var string
     */
    public $chatbotId;

    /**
     * @var functionMeta
     */
    public $functionMeta;

    /**
     * @var string
     */
    public $model;

    /**
     * @var nluAccessProfile
     */
    public $nluAccessProfile;

    /**
     * @var string
     */
    public $nluAccessType;

    /**
     * @var string
     */
    public $nluEngine;

    /**
     * @var bool
     */
    public $omniModel;

    /**
     * @var string
     */
    public $temperature;

    /**
     * @var string
     */
    public $topP;
    protected $_name = [
        'agentKey' => 'AgentKey',
        'agentProfile' => 'AgentProfile',
        'chatbotId' => 'ChatbotId',
        'functionMeta' => 'FunctionMeta',
        'model' => 'Model',
        'nluAccessProfile' => 'NluAccessProfile',
        'nluAccessType' => 'NluAccessType',
        'nluEngine' => 'NluEngine',
        'omniModel' => 'OmniModel',
        'temperature' => 'Temperature',
        'topP' => 'TopP',
    ];

    public function validate()
    {
        if (null !== $this->agentProfile) {
            $this->agentProfile->validate();
        }
        if (null !== $this->functionMeta) {
            $this->functionMeta->validate();
        }
        if (null !== $this->nluAccessProfile) {
            $this->nluAccessProfile->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentKey) {
            $res['AgentKey'] = $this->agentKey;
        }

        if (null !== $this->agentProfile) {
            $res['AgentProfile'] = null !== $this->agentProfile ? $this->agentProfile->toArray($noStream) : $this->agentProfile;
        }

        if (null !== $this->chatbotId) {
            $res['ChatbotId'] = $this->chatbotId;
        }

        if (null !== $this->functionMeta) {
            $res['FunctionMeta'] = null !== $this->functionMeta ? $this->functionMeta->toArray($noStream) : $this->functionMeta;
        }

        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }

        if (null !== $this->nluAccessProfile) {
            $res['NluAccessProfile'] = null !== $this->nluAccessProfile ? $this->nluAccessProfile->toArray($noStream) : $this->nluAccessProfile;
        }

        if (null !== $this->nluAccessType) {
            $res['NluAccessType'] = $this->nluAccessType;
        }

        if (null !== $this->nluEngine) {
            $res['NluEngine'] = $this->nluEngine;
        }

        if (null !== $this->omniModel) {
            $res['OmniModel'] = $this->omniModel;
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
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }

        if (isset($map['AgentProfile'])) {
            $model->agentProfile = agentProfile::fromMap($map['AgentProfile']);
        }

        if (isset($map['ChatbotId'])) {
            $model->chatbotId = $map['ChatbotId'];
        }

        if (isset($map['FunctionMeta'])) {
            $model->functionMeta = functionMeta::fromMap($map['FunctionMeta']);
        }

        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }

        if (isset($map['NluAccessProfile'])) {
            $model->nluAccessProfile = nluAccessProfile::fromMap($map['NluAccessProfile']);
        }

        if (isset($map['NluAccessType'])) {
            $model->nluAccessType = $map['NluAccessType'];
        }

        if (isset($map['NluEngine'])) {
            $model->nluEngine = $map['NluEngine'];
        }

        if (isset($map['OmniModel'])) {
            $model->omniModel = $map['OmniModel'];
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
