<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models;

use AlibabaCloud\SDK\Edsuser\V20210308\Models\FilterUsersRequest\orderParam;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\FilterUsersRequest\propertyFilterParam;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\FilterUsersRequest\propertyKeyValueFilterParam;
use AlibabaCloud\Tea\Model;

class FilterUsersRequest extends Model
{
    /**
     * @description The IDs of excluded users.
     *
     * @var string[]
     */
    public $excludeEndUserIds;

    /**
     * @description The string that you enter for a fuzzy search. You can enter a string to match the username or email address.
     *
     * @example test
     *
     * @var string
     */
    public $filter;

    /**
     * @description Specifies whether to return information about cloud desktops that are assigned to the convenience user.
     *
     * @example true
     *
     * @var bool
     */
    public $includeDesktopCount;

    /**
     * @description Specifies whether to return the number of desktop groups that are assigned to the user.
     *
     * @example false
     *
     * @var bool
     */
    public $includeDesktopGroupCount;

    /**
     * @description The number of entries to return on each page. If you set this parameter to a value greater than 100, the system resets the value to 100.
     *
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The token that determines the start point of the query. You do not need to configure this parameter if you call this operation for the first time. If not all results are returned in a query, a value is returned for the NextToken parameter. In this case, you can use the returned NextToken value to perform the next query.
     *
     * @example caeba0bbb2be03f84eb48b699f0a4883
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The parameter that is supported to sort query results.
     *
     * @var orderParam
     */
    public $orderParam;

    /**
     * @description The ID of the organization.
     *
     * @example org-aliyun-wy-org-id
     *
     * @var string
     */
    public $orgId;

    /**
     * @description The type of the account ownership.
     *
     * @example Normal
     *
     * @var string
     */
    public $ownerType;

    /**
     * @description Details of the user property that you want to perform fuzzy search.
     *
     * @var propertyFilterParam[]
     */
    public $propertyFilterParam;

    /**
     * @description Details of the properties and property values.
     *
     * @var propertyKeyValueFilterParam[]
     */
    public $propertyKeyValueFilterParam;
    protected $_name = [
        'excludeEndUserIds'           => 'ExcludeEndUserIds',
        'filter'                      => 'Filter',
        'includeDesktopCount'         => 'IncludeDesktopCount',
        'includeDesktopGroupCount'    => 'IncludeDesktopGroupCount',
        'maxResults'                  => 'MaxResults',
        'nextToken'                   => 'NextToken',
        'orderParam'                  => 'OrderParam',
        'orgId'                       => 'OrgId',
        'ownerType'                   => 'OwnerType',
        'propertyFilterParam'         => 'PropertyFilterParam',
        'propertyKeyValueFilterParam' => 'PropertyKeyValueFilterParam',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->excludeEndUserIds) {
            $res['ExcludeEndUserIds'] = $this->excludeEndUserIds;
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
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->orderParam) {
            $res['OrderParam'] = null !== $this->orderParam ? $this->orderParam->toMap() : null;
        }
        if (null !== $this->orgId) {
            $res['OrgId'] = $this->orgId;
        }
        if (null !== $this->ownerType) {
            $res['OwnerType'] = $this->ownerType;
        }
        if (null !== $this->propertyFilterParam) {
            $res['PropertyFilterParam'] = [];
            if (null !== $this->propertyFilterParam && \is_array($this->propertyFilterParam)) {
                $n = 0;
                foreach ($this->propertyFilterParam as $item) {
                    $res['PropertyFilterParam'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->propertyKeyValueFilterParam) {
            $res['PropertyKeyValueFilterParam'] = [];
            if (null !== $this->propertyKeyValueFilterParam && \is_array($this->propertyKeyValueFilterParam)) {
                $n = 0;
                foreach ($this->propertyKeyValueFilterParam as $item) {
                    $res['PropertyKeyValueFilterParam'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FilterUsersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExcludeEndUserIds'])) {
            if (!empty($map['ExcludeEndUserIds'])) {
                $model->excludeEndUserIds = $map['ExcludeEndUserIds'];
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
                $n                          = 0;
                foreach ($map['PropertyFilterParam'] as $item) {
                    $model->propertyFilterParam[$n++] = null !== $item ? propertyFilterParam::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PropertyKeyValueFilterParam'])) {
            if (!empty($map['PropertyKeyValueFilterParam'])) {
                $model->propertyKeyValueFilterParam = [];
                $n                                  = 0;
                foreach ($map['PropertyKeyValueFilterParam'] as $item) {
                    $model->propertyKeyValueFilterParam[$n++] = null !== $item ? propertyKeyValueFilterParam::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
