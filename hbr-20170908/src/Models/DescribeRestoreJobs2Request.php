<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeRestoreJobs2Request\filters;
use AlibabaCloud\Tea\Model;

class DescribeRestoreJobs2Request extends Model
{
    /**
     * @description The keys in the filter.
     *
     * @var filters[]
     */
    public $filters;

    /**
     * @description The page number. Pages start from page 1. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Valid values: 1 to 99. Default value: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The type of the data source. Valid values:
     *
     *   **ECS_FILE**: Elastic Compute Service (ECS) files
     *   **OSS**: Object Storage Service (OSS) buckets
     *   **NAS**: Apsara File Storage NAS file systems
     *   **OTS_TABLE**: Tablestore instances
     *   **UDM_ECS_ROLLBACK**: ECS instances
     *
     * @example ECS_FILE
     *
     * @var string
     */
    public $restoreType;
    protected $_name = [
        'filters'     => 'Filters',
        'pageNumber'  => 'PageNumber',
        'pageSize'    => 'PageSize',
        'restoreType' => 'RestoreType',
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
        if (null !== $this->restoreType) {
            $res['RestoreType'] = $this->restoreType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRestoreJobs2Request
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
        if (isset($map['RestoreType'])) {
            $model->restoreType = $map['RestoreType'];
        }

        return $model;
    }
}
