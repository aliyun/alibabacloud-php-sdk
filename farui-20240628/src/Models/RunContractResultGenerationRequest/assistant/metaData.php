<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FaRui\V20240628\Models\RunContractResultGenerationRequest\assistant;

use AlibabaCloud\SDK\FaRui\V20240628\Models\RunContractResultGenerationRequest\assistant\metaData\customRuleConfig;
use AlibabaCloud\SDK\FaRui\V20240628\Models\RunContractResultGenerationRequest\assistant\metaData\rules;
use AlibabaCloud\Tea\Model;

class metaData extends Model
{
    /**
     * @var customRuleConfig
     */
    public $customRuleConfig;

    /**
     * @example 9a6b1ba60d9944249363ec3cc1529b7b
     *
     * @var string
     */
    public $fileId;

    /**
     * @example 1
     *
     * @var string
     */
    public $position;

    /**
     * @example b265b416-ca1f-425d-9340-c968f39624e1
     *
     * @var string
     */
    public $ruleTaskId;

    /**
     * @var rules[]
     */
    public $rules;
    protected $_name = [
        'customRuleConfig' => 'customRuleConfig',
        'fileId'           => 'fileId',
        'position'         => 'position',
        'ruleTaskId'       => 'ruleTaskId',
        'rules'            => 'rules',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customRuleConfig) {
            $res['customRuleConfig'] = null !== $this->customRuleConfig ? $this->customRuleConfig->toMap() : null;
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
            $res['rules'] = [];
            if (null !== $this->rules && \is_array($this->rules)) {
                $n = 0;
                foreach ($this->rules as $item) {
                    $res['rules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return metaData
     */
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
                $n            = 0;
                foreach ($map['rules'] as $item) {
                    $model->rules[$n++] = null !== $item ? rules::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
