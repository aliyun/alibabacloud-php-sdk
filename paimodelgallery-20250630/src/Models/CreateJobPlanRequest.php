<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIModelGallery\V20250630\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PAIModelGallery\V20250630\Models\CreateJobPlanRequest\jobPlanSteps;
use AlibabaCloud\SDK\PAIModelGallery\V20250630\Models\CreateJobPlanRequest\tag;

class CreateJobPlanRequest extends Model
{
    /**
     * @var string
     */
    public $jobPlanName;

    /**
     * @var jobPlanSteps[]
     */
    public $jobPlanSteps;

    /**
     * @var string
     */
    public $jobPlanType;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'jobPlanName' => 'JobPlanName',
        'jobPlanSteps' => 'JobPlanSteps',
        'jobPlanType' => 'JobPlanType',
        'tag' => 'Tag',
        'templateId' => 'TemplateId',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->jobPlanSteps)) {
            Model::validateArray($this->jobPlanSteps);
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->jobPlanName) {
            $res['JobPlanName'] = $this->jobPlanName;
        }

        if (null !== $this->jobPlanSteps) {
            if (\is_array($this->jobPlanSteps)) {
                $res['JobPlanSteps'] = [];
                $n1 = 0;
                foreach ($this->jobPlanSteps as $item1) {
                    $res['JobPlanSteps'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->jobPlanType) {
            $res['JobPlanType'] = $this->jobPlanType;
        }

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['JobPlanName'])) {
            $model->jobPlanName = $map['JobPlanName'];
        }

        if (isset($map['JobPlanSteps'])) {
            if (!empty($map['JobPlanSteps'])) {
                $model->jobPlanSteps = [];
                $n1 = 0;
                foreach ($map['JobPlanSteps'] as $item1) {
                    $model->jobPlanSteps[$n1] = jobPlanSteps::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['JobPlanType'])) {
            $model->jobPlanType = $map['JobPlanType'];
        }

        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n1 = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1] = tag::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
