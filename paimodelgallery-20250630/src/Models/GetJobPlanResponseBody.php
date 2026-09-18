<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIModelGallery\V20250630\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PAIModelGallery\V20250630\Models\GetJobPlanResponseBody\jobPlanSteps;
use AlibabaCloud\SDK\PAIModelGallery\V20250630\Models\GetJobPlanResponseBody\tags;

class GetJobPlanResponseBody extends Model
{
    /**
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @var string
     */
    public $jobPlanCurrentStep;

    /**
     * @var string
     */
    public $jobPlanId;

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
     * @var string
     */
    public $ownerId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'gmtCreateTime' => 'GmtCreateTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'jobPlanCurrentStep' => 'JobPlanCurrentStep',
        'jobPlanId' => 'JobPlanId',
        'jobPlanName' => 'JobPlanName',
        'jobPlanSteps' => 'JobPlanSteps',
        'jobPlanType' => 'JobPlanType',
        'ownerId' => 'OwnerId',
        'requestId' => 'RequestId',
        'tags' => 'Tags',
        'templateId' => 'TemplateId',
        'templateName' => 'TemplateName',
        'userId' => 'UserId',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->jobPlanSteps)) {
            Model::validateArray($this->jobPlanSteps);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }

        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }

        if (null !== $this->jobPlanCurrentStep) {
            $res['JobPlanCurrentStep'] = $this->jobPlanCurrentStep;
        }

        if (null !== $this->jobPlanId) {
            $res['JobPlanId'] = $this->jobPlanId;
        }

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

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }

        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }

        if (isset($map['JobPlanCurrentStep'])) {
            $model->jobPlanCurrentStep = $map['JobPlanCurrentStep'];
        }

        if (isset($map['JobPlanId'])) {
            $model->jobPlanId = $map['JobPlanId'];
        }

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

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
