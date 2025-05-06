<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FaRui\V20240628\Models\RunContractResultGenerationRequest\assistant;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\FaRui\V20240628\Models\RunContractResultGenerationRequest\assistant\metaData\customRuleConfig;
use AlibabaCloud\SDK\FaRui\V20240628\Models\RunContractResultGenerationRequest\assistant\metaData\rules;

class metaData extends Model
{
    /**
     * @var customRuleConfig
     */
    public $customRuleConfig;

    /**
     * @var string
     */
    public $fileId;

    /**
     * @var string
     */
    public $position;

    /**
     * @var string
     */
    public $ruleTaskId;

    /**
     * @var rules[]
     */
    public $rules;
    protected $_name = [
        'customRuleConfig' => 'customRuleConfig',
        'fileId' => 'fileId',
        'position' => 'position',
        'ruleTaskId' => 'ruleTaskId',
        'rules' => 'rules',
    ];

    public function validate()
    {
        if (null !== $this->customRuleConfig) {
            $this->customRuleConfig->validate();
        }
        if (\is_array($this->rules)) {
            Model::validateArray($this->rules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customRuleConfig) {
            $res['customRuleConfig'] = null !== $this->customRuleConfig ? $this->customRuleConfig->toArray($noStream) : $this->customRuleConfig;
        }

        if (null !== $this->fileId) {
            $res['fileId'] = $this->fileId;
        }

        if (null !== $this->position) {
            $res['position'] = $this->position;
        }

        if (null !== $this->ruleTaskId) {
            $res['ruleTaskId'] = $this->ruleTaskId;
        }

        if (null !== $this->rules) {
            if (\is_array($this->rules)) {
                $res['rules'] = [];
                $n1 = 0;
                foreach ($this->rules as $item1) {
                    $res['rules'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['customRuleConfig'])) {
            $model->customRuleConfig = customRuleConfig::fromMap($map['customRuleConfig']);
        }

        if (isset($map['fileId'])) {
            $model->fileId = $map['fileId'];
        }

        if (isset($map['position'])) {
            $model->position = $map['position'];
        }

        if (isset($map['ruleTaskId'])) {
            $model->ruleTaskId = $map['ruleTaskId'];
        }

        if (isset($map['rules'])) {
            if (!empty($map['rules'])) {
                $model->rules = [];
                $n1 = 0;
                foreach ($map['rules'] as $item1) {
                    $model->rules[$n1++] = rules::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
