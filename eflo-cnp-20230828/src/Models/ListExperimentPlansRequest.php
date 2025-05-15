<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocnp\V20230828\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\ListExperimentPlansRequest\tag;

class ListExperimentPlansRequest extends Model
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
     * @var string[]
     */
    public $planTaskStatus;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var int
     */
    public $resourceId;

    /**
     * @var string[]
     */
    public $resourceName;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $startTimeOrder;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @var int
     */
    public $templateId;
    protected $_name = [
        'creatTimeOrder' => 'CreatTimeOrder',
        'endTimeOrder' => 'EndTimeOrder',
        'page' => 'Page',
        'planTaskStatus' => 'PlanTaskStatus',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceId' => 'ResourceId',
        'resourceName' => 'ResourceName',
        'size' => 'Size',
        'startTimeOrder' => 'StartTimeOrder',
        'tag' => 'Tag',
        'templateId' => 'TemplateId',
    ];

    public function validate()
    {
        if (\is_array($this->planTaskStatus)) {
            Model::validateArray($this->planTaskStatus);
        }
        if (\is_array($this->resourceName)) {
            Model::validateArray($this->resourceName);
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
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

        if (null !== $this->planTaskStatus) {
            if (\is_array($this->planTaskStatus)) {
                $res['PlanTaskStatus'] = [];
                $n1 = 0;
                foreach ($this->planTaskStatus as $item1) {
                    $res['PlanTaskStatus'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        if (null !== $this->resourceName) {
            if (\is_array($this->resourceName)) {
                $res['ResourceName'] = [];
                $n1 = 0;
                foreach ($this->resourceName as $item1) {
                    $res['ResourceName'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        if (null !== $this->startTimeOrder) {
            $res['StartTimeOrder'] = $this->startTimeOrder;
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
            if (!empty($map['PlanTaskStatus'])) {
                $model->planTaskStatus = [];
                $n1 = 0;
                foreach ($map['PlanTaskStatus'] as $item1) {
                    $model->planTaskStatus[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        if (isset($map['ResourceName'])) {
            if (!empty($map['ResourceName'])) {
                $model->resourceName = [];
                $n1 = 0;
                foreach ($map['ResourceName'] as $item1) {
                    $model->resourceName[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        if (isset($map['StartTimeOrder'])) {
            $model->startTimeOrder = $map['StartTimeOrder'];
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
