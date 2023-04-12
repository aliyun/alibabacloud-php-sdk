<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\EvaluatePreConfigRulesRequest;

use AlibabaCloud\SDK\Config\V20200907\Models\EvaluatePreConfigRulesRequest\resourceEvaluateItems\rules;
use AlibabaCloud\Tea\Model;

class resourceEvaluateItems extends Model
{
    /**
     * @description The logical ID of the resource.
     *
     * @example ResourceLogicId-test
     *
     * @var string
     */
    public $resourceLogicalId;

    /**
     * @description The properties of the resource.
     *
     * @var string
     */
    public $resourceProperties;

    /**
     * @description The type of the resource.
     *
     * @example ACS::ECS::Instance
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The evaluation rules.
     *
     * @var rules[]
     */
    public $rules;
    protected $_name = [
        'resourceLogicalId'  => 'ResourceLogicalId',
        'resourceProperties' => 'ResourceProperties',
        'resourceType'       => 'ResourceType',
        'rules'              => 'Rules',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceLogicalId) {
            $res['ResourceLogicalId'] = $this->resourceLogicalId;
        }
        if (null !== $this->resourceProperties) {
            $res['ResourceProperties'] = $this->resourceProperties;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->rules) {
            $res['Rules'] = [];
            if (null !== $this->rules && \is_array($this->rules)) {
                $n = 0;
                foreach ($this->rules as $item) {
                    $res['Rules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceEvaluateItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceLogicalId'])) {
            $model->resourceLogicalId = $map['ResourceLogicalId'];
        }
        if (isset($map['ResourceProperties'])) {
            $model->resourceProperties = $map['ResourceProperties'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['Rules'])) {
            if (!empty($map['Rules'])) {
                $model->rules = [];
                $n            = 0;
                foreach ($map['Rules'] as $item) {
                    $model->rules[$n++] = null !== $item ? rules::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
