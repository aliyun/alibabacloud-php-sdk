<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\UpdateMmAppAndBindingRequest\bindingConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\BindingConfigAgentsIntentFewShotConfigValue;

class agents extends Model
{
    /**
     * @var string
     */
    public $agentCode;

    /**
     * @var string
     */
    public $agentName;

    /**
     * @var string
     */
    public $agentType;

    /**
     * @var mixed[]
     */
    public $centralConfig;

    /**
     * @var string
     */
    public $description;

    /**
     * @var BindingConfigAgentsIntentFewShotConfigValue[][]
     */
    public $intentFewShotConfig;

    /**
     * @var mixed[]
     */
    public $ownConfig;
    protected $_name = [
        'agentCode' => 'AgentCode',
        'agentName' => 'AgentName',
        'agentType' => 'AgentType',
        'centralConfig' => 'CentralConfig',
        'description' => 'Description',
        'intentFewShotConfig' => 'IntentFewShotConfig',
        'ownConfig' => 'OwnConfig',
    ];

    public function validate()
    {
        if (\is_array($this->centralConfig)) {
            Model::validateArray($this->centralConfig);
        }
        if (\is_array($this->intentFewShotConfig)) {
            Model::validateArray($this->intentFewShotConfig);
        }
        if (\is_array($this->ownConfig)) {
            Model::validateArray($this->ownConfig);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentCode) {
            $res['AgentCode'] = $this->agentCode;
        }

        if (null !== $this->agentName) {
            $res['AgentName'] = $this->agentName;
        }

        if (null !== $this->agentType) {
            $res['AgentType'] = $this->agentType;
        }

        if (null !== $this->centralConfig) {
            if (\is_array($this->centralConfig)) {
                $res['CentralConfig'] = [];
                foreach ($this->centralConfig as $key1 => $value1) {
                    $res['CentralConfig'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->intentFewShotConfig) {
            if (\is_array($this->intentFewShotConfig)) {
                $res['IntentFewShotConfig'] = [];
                foreach ($this->intentFewShotConfig as $key1 => $value1) {
                    if (\is_array($value1)) {
                        $res['IntentFewShotConfig'][$key1] = [];
                        $n2 = 0;
                        foreach ($value1 as $item2) {
                            $res['IntentFewShotConfig'][$key1][$n2] = null !== $item2 ? $item2->toArray($noStream) : $item2;
                            ++$n2;
                        }
                    }
                }
            }
        }

        if (null !== $this->ownConfig) {
            if (\is_array($this->ownConfig)) {
                $res['OwnConfig'] = [];
                foreach ($this->ownConfig as $key1 => $value1) {
                    $res['OwnConfig'][$key1] = $value1;
                }
            }
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
        if (isset($map['AgentCode'])) {
            $model->agentCode = $map['AgentCode'];
        }

        if (isset($map['AgentName'])) {
            $model->agentName = $map['AgentName'];
        }

        if (isset($map['AgentType'])) {
            $model->agentType = $map['AgentType'];
        }

        if (isset($map['CentralConfig'])) {
            if (!empty($map['CentralConfig'])) {
                $model->centralConfig = [];
                foreach ($map['CentralConfig'] as $key1 => $value1) {
                    $model->centralConfig[$key1] = $value1;
                }
            }
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['IntentFewShotConfig'])) {
            if (!empty($map['IntentFewShotConfig'])) {
                $model->intentFewShotConfig = [];
                foreach ($map['IntentFewShotConfig'] as $key1 => $value1) {
                    if (!empty($value1)) {
                        $model->intentFewShotConfig[$key1] = [];
                        $n2 = 0;
                        foreach ($value1 as $item2) {
                            $model->intentFewShotConfig[$key1][$n2] = BindingConfigAgentsIntentFewShotConfigValue::fromMap($item2);
                            ++$n2;
                        }
                    }
                }
            }
        }

        if (isset($map['OwnConfig'])) {
            if (!empty($map['OwnConfig'])) {
                $model->ownConfig = [];
                foreach ($map['OwnConfig'] as $key1 => $value1) {
                    $model->ownConfig[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
