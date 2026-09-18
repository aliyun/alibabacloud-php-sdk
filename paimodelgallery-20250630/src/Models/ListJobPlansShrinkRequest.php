<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIModelGallery\V20250630\Models;

use AlibabaCloud\Dara\Model;

class ListJobPlansShrinkRequest extends Model
{
    /**
     * @var bool
     */
    public $hasTemplate;

    /**
     * @var string
     */
    public $jobPlanName;

    /**
     * @var string
     */
    public $jobPlanType;

    /**
     * @var string
     */
    public $order;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $sortBy;

    /**
     * @var string
     */
    public $tagShrink;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'hasTemplate' => 'HasTemplate',
        'jobPlanName' => 'JobPlanName',
        'jobPlanType' => 'JobPlanType',
        'order' => 'Order',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'sortBy' => 'SortBy',
        'tagShrink' => 'Tag',
        'templateId' => 'TemplateId',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hasTemplate) {
            $res['HasTemplate'] = $this->hasTemplate;
        }

        if (null !== $this->jobPlanName) {
            $res['JobPlanName'] = $this->jobPlanName;
        }

        if (null !== $this->jobPlanType) {
            $res['JobPlanType'] = $this->jobPlanType;
        }

        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }

        if (null !== $this->tagShrink) {
            $res['Tag'] = $this->tagShrink;
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
        if (isset($map['HasTemplate'])) {
            $model->hasTemplate = $map['HasTemplate'];
        }

        if (isset($map['JobPlanName'])) {
            $model->jobPlanName = $map['JobPlanName'];
        }

        if (isset($map['JobPlanType'])) {
            $model->jobPlanType = $map['JobPlanType'];
        }

        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }

        if (isset($map['Tag'])) {
            $model->tagShrink = $map['Tag'];
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
