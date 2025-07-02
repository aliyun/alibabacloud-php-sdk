<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models;

use AlibabaCloud\Dara\Model;

class DescribeUsersRequest extends Model
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
     * @var string[]
     */
    public $filterWithAssignedResource;

    /**
     * @var bool[]
     */
    public $filterWithAssignedResources;

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
     * @var mixed[]
     */
    public $showExtras;

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
        'filterWithAssignedResource' => 'FilterWithAssignedResource',
        'filterWithAssignedResources' => 'FilterWithAssignedResources',
        'groupId' => 'GroupId',
        'isQueryAllSubOrgs' => 'IsQueryAllSubOrgs',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'orgId' => 'OrgId',
        'showExtras' => 'ShowExtras',
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
        if (\is_array($this->filterWithAssignedResource)) {
            Model::validateArray($this->filterWithAssignedResource);
        }
        if (\is_array($this->filterWithAssignedResources)) {
            Model::validateArray($this->filterWithAssignedResources);
        }
        if (\is_array($this->showExtras)) {
            Model::validateArray($this->showExtras);
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

        if (null !== $this->filterWithAssignedResource) {
            if (\is_array($this->filterWithAssignedResource)) {
                $res['FilterWithAssignedResource'] = [];
                foreach ($this->filterWithAssignedResource as $key1 => $value1) {
                    $res['FilterWithAssignedResource'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->filterWithAssignedResources) {
            if (\is_array($this->filterWithAssignedResources)) {
                $res['FilterWithAssignedResources'] = [];
                foreach ($this->filterWithAssignedResources as $key1 => $value1) {
                    $res['FilterWithAssignedResources'][$key1] = $value1;
                }
            }
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

        if (null !== $this->showExtras) {
            if (\is_array($this->showExtras)) {
                $res['ShowExtras'] = [];
                foreach ($this->showExtras as $key1 => $value1) {
                    $res['ShowExtras'][$key1] = $value1;
                }
            }
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
            if (!empty($map['FilterWithAssignedResource'])) {
                $model->filterWithAssignedResource = [];
                foreach ($map['FilterWithAssignedResource'] as $key1 => $value1) {
                    $model->filterWithAssignedResource[$key1] = $value1;
                }
            }
        }

        if (isset($map['FilterWithAssignedResources'])) {
            if (!empty($map['FilterWithAssignedResources'])) {
                $model->filterWithAssignedResources = [];
                foreach ($map['FilterWithAssignedResources'] as $key1 => $value1) {
                    $model->filterWithAssignedResources[$key1] = $value1;
                }
            }
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
            if (!empty($map['ShowExtras'])) {
                $model->showExtras = [];
                foreach ($map['ShowExtras'] as $key1 => $value1) {
                    $model->showExtras[$key1] = $value1;
                }
            }
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
