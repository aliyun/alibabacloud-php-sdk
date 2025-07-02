<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models;

use AlibabaCloud\Dara\Model;

class DescribeUsersShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $bizType;

    /**
     * @var string[]
     */
    public $endUserIds;

    /**
     * @var string[]
     */
    public $excludeEndUserIds;

    /**
     * @var string
     */
    public $filter;

    /**
     * @var string
     */
    public $filterWithAssignedResourceShrink;

    /**
     * @var string
     */
    public $filterWithAssignedResourcesShrink;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var bool
     */
    public $isQueryAllSubOrgs;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $orgId;

    /**
     * @var string
     */
    public $showExtrasShrink;

    /**
     * @var string
     */
    public $solutionId;

    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'bizType' => 'BizType',
        'endUserIds' => 'EndUserIds',
        'excludeEndUserIds' => 'ExcludeEndUserIds',
        'filter' => 'Filter',
        'filterWithAssignedResourceShrink' => 'FilterWithAssignedResource',
        'filterWithAssignedResourcesShrink' => 'FilterWithAssignedResources',
        'groupId' => 'GroupId',
        'isQueryAllSubOrgs' => 'IsQueryAllSubOrgs',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'orgId' => 'OrgId',
        'showExtrasShrink' => 'ShowExtras',
        'solutionId' => 'SolutionId',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->endUserIds)) {
            Model::validateArray($this->endUserIds);
        }
        if (\is_array($this->excludeEndUserIds)) {
            Model::validateArray($this->excludeEndUserIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }

        if (null !== $this->endUserIds) {
            if (\is_array($this->endUserIds)) {
                $res['EndUserIds'] = [];
                $n1 = 0;
                foreach ($this->endUserIds as $item1) {
                    $res['EndUserIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->excludeEndUserIds) {
            if (\is_array($this->excludeEndUserIds)) {
                $res['ExcludeEndUserIds'] = [];
                $n1 = 0;
                foreach ($this->excludeEndUserIds as $item1) {
                    $res['ExcludeEndUserIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->filter) {
            $res['Filter'] = $this->filter;
        }

        if (null !== $this->filterWithAssignedResourceShrink) {
            $res['FilterWithAssignedResource'] = $this->filterWithAssignedResourceShrink;
        }

        if (null !== $this->filterWithAssignedResourcesShrink) {
            $res['FilterWithAssignedResources'] = $this->filterWithAssignedResourcesShrink;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->isQueryAllSubOrgs) {
            $res['IsQueryAllSubOrgs'] = $this->isQueryAllSubOrgs;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->orgId) {
            $res['OrgId'] = $this->orgId;
        }

        if (null !== $this->showExtrasShrink) {
            $res['ShowExtras'] = $this->showExtrasShrink;
        }

        if (null !== $this->solutionId) {
            $res['SolutionId'] = $this->solutionId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }

        if (isset($map['EndUserIds'])) {
            if (!empty($map['EndUserIds'])) {
                $model->endUserIds = [];
                $n1 = 0;
                foreach ($map['EndUserIds'] as $item1) {
                    $model->endUserIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ExcludeEndUserIds'])) {
            if (!empty($map['ExcludeEndUserIds'])) {
                $model->excludeEndUserIds = [];
                $n1 = 0;
                foreach ($map['ExcludeEndUserIds'] as $item1) {
                    $model->excludeEndUserIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Filter'])) {
            $model->filter = $map['Filter'];
        }

        if (isset($map['FilterWithAssignedResource'])) {
            $model->filterWithAssignedResourceShrink = $map['FilterWithAssignedResource'];
        }

        if (isset($map['FilterWithAssignedResources'])) {
            $model->filterWithAssignedResourcesShrink = $map['FilterWithAssignedResources'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['IsQueryAllSubOrgs'])) {
            $model->isQueryAllSubOrgs = $map['IsQueryAllSubOrgs'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['OrgId'])) {
            $model->orgId = $map['OrgId'];
        }

        if (isset($map['ShowExtras'])) {
            $model->showExtrasShrink = $map['ShowExtras'];
        }

        if (isset($map['SolutionId'])) {
            $model->solutionId = $map['SolutionId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
