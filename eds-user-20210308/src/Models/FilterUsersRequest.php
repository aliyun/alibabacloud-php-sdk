<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\FilterUsersRequest\orderParam;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\FilterUsersRequest\propertyFilterParam;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\FilterUsersRequest\propertyKeyValueFilterParam;

class FilterUsersRequest extends Model
{
    /**
     * @var string[]
     */
    public $excludeEndUserIds;

    /**
     * @var string
     */
    public $filter;

    /**
     * @var bool
     */
    public $includeDesktopCount;

    /**
     * @var bool
     */
    public $includeDesktopGroupCount;

    /**
     * @var bool
     */
    public $includeOrgInfo;

    /**
     * @var bool
     */
    public $includeSupportIdps;

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
     * @var orderParam
     */
    public $orderParam;

    /**
     * @var string
     */
    public $orgId;

    /**
     * @var string
     */
    public $ownerType;

    /**
     * @var propertyFilterParam[]
     */
    public $propertyFilterParam;

    /**
     * @var propertyKeyValueFilterParam[]
     */
    public $propertyKeyValueFilterParam;

    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'excludeEndUserIds' => 'ExcludeEndUserIds',
        'filter' => 'Filter',
        'includeDesktopCount' => 'IncludeDesktopCount',
        'includeDesktopGroupCount' => 'IncludeDesktopGroupCount',
        'includeOrgInfo' => 'IncludeOrgInfo',
        'includeSupportIdps' => 'IncludeSupportIdps',
        'isQueryAllSubOrgs' => 'IsQueryAllSubOrgs',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'orderParam' => 'OrderParam',
        'orgId' => 'OrgId',
        'ownerType' => 'OwnerType',
        'propertyFilterParam' => 'PropertyFilterParam',
        'propertyKeyValueFilterParam' => 'PropertyKeyValueFilterParam',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->excludeEndUserIds)) {
            Model::validateArray($this->excludeEndUserIds);
        }
        if (null !== $this->orderParam) {
            $this->orderParam->validate();
        }
        if (\is_array($this->propertyFilterParam)) {
            Model::validateArray($this->propertyFilterParam);
        }
        if (\is_array($this->propertyKeyValueFilterParam)) {
            Model::validateArray($this->propertyKeyValueFilterParam);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->excludeEndUserIds) {
            if (\is_array($this->excludeEndUserIds)) {
                $res['ExcludeEndUserIds'] = [];
                $n1 = 0;
                foreach ($this->excludeEndUserIds as $item1) {
                    $res['ExcludeEndUserIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->filter) {
            $res['Filter'] = $this->filter;
        }

        if (null !== $this->includeDesktopCount) {
            $res['IncludeDesktopCount'] = $this->includeDesktopCount;
        }

        if (null !== $this->includeDesktopGroupCount) {
            $res['IncludeDesktopGroupCount'] = $this->includeDesktopGroupCount;
        }

        if (null !== $this->includeOrgInfo) {
            $res['IncludeOrgInfo'] = $this->includeOrgInfo;
        }

        if (null !== $this->includeSupportIdps) {
            $res['IncludeSupportIdps'] = $this->includeSupportIdps;
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

        if (null !== $this->orderParam) {
            $res['OrderParam'] = null !== $this->orderParam ? $this->orderParam->toArray($noStream) : $this->orderParam;
        }

        if (null !== $this->orgId) {
            $res['OrgId'] = $this->orgId;
        }

        if (null !== $this->ownerType) {
            $res['OwnerType'] = $this->ownerType;
        }

        if (null !== $this->propertyFilterParam) {
            if (\is_array($this->propertyFilterParam)) {
                $res['PropertyFilterParam'] = [];
                $n1 = 0;
                foreach ($this->propertyFilterParam as $item1) {
                    $res['PropertyFilterParam'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->propertyKeyValueFilterParam) {
            if (\is_array($this->propertyKeyValueFilterParam)) {
                $res['PropertyKeyValueFilterParam'] = [];
                $n1 = 0;
                foreach ($this->propertyKeyValueFilterParam as $item1) {
                    $res['PropertyKeyValueFilterParam'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['ExcludeEndUserIds'])) {
            if (!empty($map['ExcludeEndUserIds'])) {
                $model->excludeEndUserIds = [];
                $n1 = 0;
                foreach ($map['ExcludeEndUserIds'] as $item1) {
                    $model->excludeEndUserIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Filter'])) {
            $model->filter = $map['Filter'];
        }

        if (isset($map['IncludeDesktopCount'])) {
            $model->includeDesktopCount = $map['IncludeDesktopCount'];
        }

        if (isset($map['IncludeDesktopGroupCount'])) {
            $model->includeDesktopGroupCount = $map['IncludeDesktopGroupCount'];
        }

        if (isset($map['IncludeOrgInfo'])) {
            $model->includeOrgInfo = $map['IncludeOrgInfo'];
        }

        if (isset($map['IncludeSupportIdps'])) {
            $model->includeSupportIdps = $map['IncludeSupportIdps'];
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

        if (isset($map['OrderParam'])) {
            $model->orderParam = orderParam::fromMap($map['OrderParam']);
        }

        if (isset($map['OrgId'])) {
            $model->orgId = $map['OrgId'];
        }

        if (isset($map['OwnerType'])) {
            $model->ownerType = $map['OwnerType'];
        }

        if (isset($map['PropertyFilterParam'])) {
            if (!empty($map['PropertyFilterParam'])) {
                $model->propertyFilterParam = [];
                $n1 = 0;
                foreach ($map['PropertyFilterParam'] as $item1) {
                    $model->propertyFilterParam[$n1++] = propertyFilterParam::fromMap($item1);
                }
            }
        }

        if (isset($map['PropertyKeyValueFilterParam'])) {
            if (!empty($map['PropertyKeyValueFilterParam'])) {
                $model->propertyKeyValueFilterParam = [];
                $n1 = 0;
                foreach ($map['PropertyKeyValueFilterParam'] as $item1) {
                    $model->propertyKeyValueFilterParam[$n1++] = propertyKeyValueFilterParam::fromMap($item1);
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
