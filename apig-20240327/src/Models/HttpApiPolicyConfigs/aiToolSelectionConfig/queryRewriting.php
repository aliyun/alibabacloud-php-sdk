<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiPolicyConfigs\aiToolSelectionConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiPolicyConfigs\aiToolSelectionConfig\queryRewriting\contextSelection;
use AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiPolicyConfigs\aiToolSelectionConfig\queryRewriting\modelService;
use AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiPolicyConfigs\aiToolSelectionConfig\queryRewriting\promptConfig;
use AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiPolicyConfigs\aiToolSelectionConfig\queryRewriting\triggerConditions;

class queryRewriting extends Model
{
    /**
     * @var contextSelection
     */
    public $contextSelection;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string
     */
    public $fallbackStrategy;

    /**
     * @var int
     */
    public $maxOutputTokens;

    /**
     * @var modelService
     */
    public $modelService;

    /**
     * @var promptConfig
     */
    public $promptConfig;

    /**
     * @var triggerConditions
     */
    public $triggerConditions;
    protected $_name = [
        'contextSelection' => 'contextSelection',
        'enabled' => 'enabled',
        'fallbackStrategy' => 'fallbackStrategy',
        'maxOutputTokens' => 'maxOutputTokens',
        'modelService' => 'modelService',
        'promptConfig' => 'promptConfig',
        'triggerConditions' => 'triggerConditions',
    ];

    public function validate()
    {
        if (null !== $this->contextSelection) {
            $this->contextSelection->validate();
        }
        if (null !== $this->modelService) {
            $this->modelService->validate();
        }
        if (null !== $this->promptConfig) {
            $this->promptConfig->validate();
        }
        if (null !== $this->triggerConditions) {
            $this->triggerConditions->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contextSelection) {
            $res['contextSelection'] = null !== $this->contextSelection ? $this->contextSelection->toArray($noStream) : $this->contextSelection;
        }

        if (null !== $this->enabled) {
            $res['enabled'] = $this->enabled;
        }

        if (null !== $this->fallbackStrategy) {
            $res['fallbackStrategy'] = $this->fallbackStrategy;
        }

        if (null !== $this->maxOutputTokens) {
            $res['maxOutputTokens'] = $this->maxOutputTokens;
        }

        if (null !== $this->modelService) {
            $res['modelService'] = null !== $this->modelService ? $this->modelService->toArray($noStream) : $this->modelService;
        }

        if (null !== $this->promptConfig) {
            $res['promptConfig'] = null !== $this->promptConfig ? $this->promptConfig->toArray($noStream) : $this->promptConfig;
        }

        if (null !== $this->triggerConditions) {
            $res['triggerConditions'] = null !== $this->triggerConditions ? $this->triggerConditions->toArray($noStream) : $this->triggerConditions;
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
        if (isset($map['contextSelection'])) {
            $model->contextSelection = contextSelection::fromMap($map['contextSelection']);
        }

        if (isset($map['enabled'])) {
            $model->enabled = $map['enabled'];
        }

        if (isset($map['fallbackStrategy'])) {
            $model->fallbackStrategy = $map['fallbackStrategy'];
        }

        if (isset($map['maxOutputTokens'])) {
            $model->maxOutputTokens = $map['maxOutputTokens'];
        }

        if (isset($map['modelService'])) {
            $model->modelService = modelService::fromMap($map['modelService']);
        }

        if (isset($map['promptConfig'])) {
            $model->promptConfig = promptConfig::fromMap($map['promptConfig']);
        }

        if (isset($map['triggerConditions'])) {
            $model->triggerConditions = triggerConditions::fromMap($map['triggerConditions']);
        }

        return $model;
    }
}
