<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocnp\V20230828\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\CreateExperimentPlanRequest\tag;

class CreateExperimentPlanRequest extends Model
{
    /**
     * @var mixed[]
     */
    public $externalParams;

    /**
     * @var string
     */
    public $planTemplateName;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var int
     */
    public $resourceId;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @var int
     */
    public $templateId;
    protected $_name = [
        'externalParams' => 'ExternalParams',
        'planTemplateName' => 'PlanTemplateName',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceId' => 'ResourceId',
        'tag' => 'Tag',
        'templateId' => 'TemplateId',
    ];

    public function validate()
    {
        if (\is_array($this->externalParams)) {
            Model::validateArray($this->externalParams);
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->externalParams) {
            if (\is_array($this->externalParams)) {
                $res['ExternalParams'] = [];
                foreach ($this->externalParams as $key1 => $value1) {
                    $res['ExternalParams'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->planTemplateName) {
            $res['PlanTemplateName'] = $this->planTemplateName;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
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
        if (isset($map['ExternalParams'])) {
            if (!empty($map['ExternalParams'])) {
                $model->externalParams = [];
                foreach ($map['ExternalParams'] as $key1 => $value1) {
                    $model->externalParams[$key1] = $value1;
                }
            }
        }

        if (isset($map['PlanTemplateName'])) {
            $model->planTemplateName = $map['PlanTemplateName'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n1 = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1++] = tag::fromMap($item1);
                }
            }
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
