<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetRecallManagementServiceVersionResponseBody\configs\recallConfigs;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetRecallManagementServiceVersionResponseBody\configs\recallConfigs\operators\featureConfig;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetRecallManagementServiceVersionResponseBody\configs\recallConfigs\operators\filterConfig;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetRecallManagementServiceVersionResponseBody\configs\recallConfigs\operators\joinConfig;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetRecallManagementServiceVersionResponseBody\configs\recallConfigs\operators\triggerConfig;

class operators extends Model
{
    /**
     * @var featureConfig
     */
    public $featureConfig;

    /**
     * @var filterConfig
     */
    public $filterConfig;

    /**
     * @var joinConfig
     */
    public $joinConfig;

    /**
     * @var string
     */
    public $operatorType;

    /**
     * @var triggerConfig
     */
    public $triggerConfig;
    protected $_name = [
        'featureConfig' => 'FeatureConfig',
        'filterConfig' => 'FilterConfig',
        'joinConfig' => 'JoinConfig',
        'operatorType' => 'OperatorType',
        'triggerConfig' => 'TriggerConfig',
    ];

    public function validate()
    {
        if (null !== $this->featureConfig) {
            $this->featureConfig->validate();
        }
        if (null !== $this->filterConfig) {
            $this->filterConfig->validate();
        }
        if (null !== $this->joinConfig) {
            $this->joinConfig->validate();
        }
        if (null !== $this->triggerConfig) {
            $this->triggerConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->featureConfig) {
            $res['FeatureConfig'] = null !== $this->featureConfig ? $this->featureConfig->toArray($noStream) : $this->featureConfig;
        }

        if (null !== $this->filterConfig) {
            $res['FilterConfig'] = null !== $this->filterConfig ? $this->filterConfig->toArray($noStream) : $this->filterConfig;
        }

        if (null !== $this->joinConfig) {
            $res['JoinConfig'] = null !== $this->joinConfig ? $this->joinConfig->toArray($noStream) : $this->joinConfig;
        }

        if (null !== $this->operatorType) {
            $res['OperatorType'] = $this->operatorType;
        }

        if (null !== $this->triggerConfig) {
            $res['TriggerConfig'] = null !== $this->triggerConfig ? $this->triggerConfig->toArray($noStream) : $this->triggerConfig;
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
        if (isset($map['FeatureConfig'])) {
            $model->featureConfig = featureConfig::fromMap($map['FeatureConfig']);
        }

        if (isset($map['FilterConfig'])) {
            $model->filterConfig = filterConfig::fromMap($map['FilterConfig']);
        }

        if (isset($map['JoinConfig'])) {
            $model->joinConfig = joinConfig::fromMap($map['JoinConfig']);
        }

        if (isset($map['OperatorType'])) {
            $model->operatorType = $map['OperatorType'];
        }

        if (isset($map['TriggerConfig'])) {
            $model->triggerConfig = triggerConfig::fromMap($map['TriggerConfig']);
        }

        return $model;
    }
}
