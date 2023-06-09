<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceCenter\V20221201\Models;

use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\SearchMultiAccountResourcesRequest\filter;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\SearchMultiAccountResourcesRequest\sortCriterion;
use AlibabaCloud\Tea\Model;

class SearchMultiAccountResourcesRequest extends Model
{
    /**
     * @description The filter conditions.
     *
     * @var filter[]
     */
    public $filter;

    /**
     * @description The maximum number of entries to return on each page.
     *
     * Default value: 20.
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results.
     *
     * If the total number of entries returned for the current request exceeds the value of the `MaxResults` parameter, the entries are truncated. In this case, you can use the token to initiate another request and obtain the remaining entries.``
     * @example eyJzZWFyY2hBZnRlcnMiOlsiMTAwMTU2Nzk4MTU1OSJd****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The search scope. You can set the value to one of the following items:
     *
     *   ID of a resource directory: Resources within the management account and all members of the resource directory are searched. You can call the [GetResourceDirectory](~~159995~~) operation to obtain the ID.
     *   ID of the Root folder: Resources within all members in the Root folder and the subfolders of the Root folder are searched. You can call the [ListFoldersForParent](~~159997~~) operation to obtain the ID.
     *   ID of a folder: Resources within all members in the folder are searched. You can call the [ListFoldersForParent](~~159997~~) operation to obtain the ID.
     *   ID of a member: Resources within the member are searched. You can call the [ListAccounts](~~160016~~) operation to obtain the ID.
     *
     * @example rd-r4****
     *
     * @var string
     */
    public $scope;

    /**
     * @description The method that is used to sort the entries returned.
     *
     * @var sortCriterion
     */
    public $sortCriterion;
    protected $_name = [
        'filter'        => 'Filter',
        'maxResults'    => 'MaxResults',
        'nextToken'     => 'NextToken',
        'scope'         => 'Scope',
        'sortCriterion' => 'SortCriterion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->filter) {
            $res['Filter'] = [];
            if (null !== $this->filter && \is_array($this->filter)) {
                $n = 0;
                foreach ($this->filter as $item) {
                    $res['Filter'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }
        if (null !== $this->sortCriterion) {
            $res['SortCriterion'] = null !== $this->sortCriterion ? $this->sortCriterion->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchMultiAccountResourcesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Filter'])) {
            if (!empty($map['Filter'])) {
                $model->filter = [];
                $n             = 0;
                foreach ($map['Filter'] as $item) {
                    $model->filter[$n++] = null !== $item ? filter::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }
        if (isset($map['SortCriterion'])) {
            $model->sortCriterion = sortCriterion::fromMap($map['SortCriterion']);
        }

        return $model;
    }
}
