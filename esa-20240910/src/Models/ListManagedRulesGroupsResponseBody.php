<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\SDK\ESA\V20240910\Models\ListManagedRulesGroupsResponseBody\managedRulesGroups;
use AlibabaCloud\Tea\Model;

class ListManagedRulesGroupsResponseBody extends Model
{
    /**
     * @description The information about the managed rule groups.
     *
     * @var managedRulesGroups[]
     */
    public $managedRulesGroups;

    /**
     * @description The page number returned.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The request ID.
     *
     * @example 36af3fcc-43d0-441c-86b1-428951dc8225
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of managed rule groups returned.
     *
     * @example 5
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'managedRulesGroups' => 'ManagedRulesGroups',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->managedRulesGroups) {
            $res['ManagedRulesGroups'] = [];
            if (null !== $this->managedRulesGroups && \is_array($this->managedRulesGroups)) {
                $n = 0;
                foreach ($this->managedRulesGroups as $item) {
                    $res['ManagedRulesGroups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListManagedRulesGroupsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ManagedRulesGroups'])) {
            if (!empty($map['ManagedRulesGroups'])) {
                $model->managedRulesGroups = [];
                $n = 0;
                foreach ($map['ManagedRulesGroups'] as $item) {
                    $model->managedRulesGroups[$n++] = null !== $item ? managedRulesGroups::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
