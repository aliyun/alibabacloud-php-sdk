<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocnp\V20230828\Models;

use AlibabaCloud\Dara\Model;

class ListExperimentPlansShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $creatTimeOrder;

    /**
     * @var string
     */
    public $endTimeOrder;

    /**
     * @var int
     */
    public $page;

    /**
     * @var string
     */
    public $planTaskStatusShrink;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var int
     */
    public $resourceId;

    /**
     * @var string
     */
    public $resourceNameShrink;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $startTimeOrder;

    /**
     * @var string
     */
    public $tagShrink;

    /**
     * @var int
     */
    public $templateId;
    protected $_name = [
        'creatTimeOrder' => 'CreatTimeOrder',
        'endTimeOrder' => 'EndTimeOrder',
        'page' => 'Page',
        'planTaskStatusShrink' => 'PlanTaskStatus',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceId' => 'ResourceId',
        'resourceNameShrink' => 'ResourceName',
        'size' => 'Size',
        'startTimeOrder' => 'StartTimeOrder',
        'tagShrink' => 'Tag',
        'templateId' => 'TemplateId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->creatTimeOrder) {
            $res['CreatTimeOrder'] = $this->creatTimeOrder;
        }

        if (null !== $this->endTimeOrder) {
            $res['EndTimeOrder'] = $this->endTimeOrder;
        }

        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }

        if (null !== $this->planTaskStatusShrink) {
            $res['PlanTaskStatus'] = $this->planTaskStatusShrink;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        if (null !== $this->resourceNameShrink) {
            $res['ResourceName'] = $this->resourceNameShrink;
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        if (null !== $this->startTimeOrder) {
            $res['StartTimeOrder'] = $this->startTimeOrder;
        }

        if (null !== $this->tagShrink) {
            $res['Tag'] = $this->tagShrink;
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
        if (isset($map['CreatTimeOrder'])) {
            $model->creatTimeOrder = $map['CreatTimeOrder'];
        }

        if (isset($map['EndTimeOrder'])) {
            $model->endTimeOrder = $map['EndTimeOrder'];
        }

        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }

        if (isset($map['PlanTaskStatus'])) {
            $model->planTaskStatusShrink = $map['PlanTaskStatus'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        if (isset($map['ResourceName'])) {
            $model->resourceNameShrink = $map['ResourceName'];
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        if (isset($map['StartTimeOrder'])) {
            $model->startTimeOrder = $map['StartTimeOrder'];
        }

        if (isset($map['Tag'])) {
            $model->tagShrink = $map['Tag'];
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
