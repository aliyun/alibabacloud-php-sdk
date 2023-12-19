<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeBackupJobs2Request\filters;
use AlibabaCloud\Tea\Model;

class DescribeBackupJobs2Request extends Model
{
    /**
     * @description The keys in the filter.
     *
     * @var filters[]
     */
    public $filters;

    /**
     * @description The number of the page to return. Pages start from page 1. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Valid values: 1 to 99. Default value: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The order in which you want to sort the results. Valid values:
     *
     *   **ASCEND**: sorts the results in ascending order
     *   **DESCEND** (default value): sorts the results in descending order
     *
     * @example DESCEND
     *
     * @var string
     */
    public $sortDirection;

    /**
     * @description The type of the data source. Valid values:
     *
     *   **ECS_FILE**: Elastic Compute Service (ECS) files
     *   **OSS**: Object Storage Service (OSS) buckets
     *   **NAS**: Apsara File Storage NAS file systems
     *   **OTS**: Tablestore instances
     *   **UDM_ECS**: ECS instances
     *   **UDM_ECS_DISK**: ECS disks
     *
     * @example ECS_FILE
     *
     * @var string
     */
    public $sourceType;
    protected $_name = [
        'filters'       => 'Filters',
        'pageNumber'    => 'PageNumber',
        'pageSize'      => 'PageSize',
        'sortDirection' => 'SortDirection',
        'sourceType'    => 'SourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->filters) {
            $res['Filters'] = [];
            if (null !== $this->filters && \is_array($this->filters)) {
                $n = 0;
                foreach ($this->filters as $item) {
                    $res['Filters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->sortDirection) {
            $res['SortDirection'] = $this->sortDirection;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBackupJobs2Request
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Filters'])) {
            if (!empty($map['Filters'])) {
                $model->filters = [];
                $n              = 0;
                foreach ($map['Filters'] as $item) {
                    $model->filters[$n++] = null !== $item ? filters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SortDirection'])) {
            $model->sortDirection = $map['SortDirection'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        return $model;
    }
}
