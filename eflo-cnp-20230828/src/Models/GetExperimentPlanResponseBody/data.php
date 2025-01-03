<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocnp\V20230828\Models\GetExperimentPlanResponseBody;

use AlibabaCloud\SDK\Eflocnp\V20230828\Models\GetExperimentPlanResponseBody\data\planPipeline;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Creation time
     *
     * @example 2024-07-07 02:08:54
     *
     * @var string
     */
    public $createTime;

    /**
     * @description Plan ID
     *
     * @example 189
     *
     * @var int
     */
    public $planId;

    /**
     * @description Test plan pipeline
     *
     * @var planPipeline[]
     */
    public $planPipeline;

    /**
     * @description Resource group ID
     *
     * @example rg-acfmvmpzi7lmxhq
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description Associated resource ID
     *
     * @example 260860230684
     *
     * @var int
     */
    public $resourceId;

    /**
     * @description Associated test plan template ID
     *
     * @example 2162
     *
     * @var int
     */
    public $templateId;

    /**
     * @description Associated test plan template name
     *
     * @example MM
     *
     * @var string
     */
    public $templateName;

    /**
     * @description Update time
     *
     * @example 2024-07-07 02:08:54
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'createTime'      => 'CreateTime',
        'planId'          => 'PlanId',
        'planPipeline'    => 'PlanPipeline',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceId'      => 'ResourceId',
        'templateId'      => 'TemplateId',
        'templateName'    => 'TemplateName',
        'updateTime'      => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->planId) {
            $res['PlanId'] = $this->planId;
        }
        if (null !== $this->planPipeline) {
            $res['PlanPipeline'] = [];
            if (null !== $this->planPipeline && \is_array($this->planPipeline)) {
                $n = 0;
                foreach ($this->planPipeline as $item) {
                    $res['PlanPipeline'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['PlanId'])) {
            $model->planId = $map['PlanId'];
        }
        if (isset($map['PlanPipeline'])) {
            if (!empty($map['PlanPipeline'])) {
                $model->planPipeline = [];
                $n                   = 0;
                foreach ($map['PlanPipeline'] as $item) {
                    $model->planPipeline[$n++] = null !== $item ? planPipeline::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
