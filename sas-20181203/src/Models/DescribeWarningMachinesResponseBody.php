<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeWarningMachinesResponseBody\warningMachines;
use AlibabaCloud\Tea\Model;

class DescribeWarningMachinesResponseBody extends Model
{
    /**
     * @description The verification status of the risk item after the risk item is fixed. Valid values:
     *
     *   **1**: complete
     *   **2**: verifying
     *
     * @example 10
     *
     * @var int
     */
    public $count;

    /**
     * @description The name of the server on which the baseline check is performed.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The number of entries to return on each page. Default value: **10**.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description An array that consists of the servers.
     *
     * @example 6E4CBE87-E887-5AF1-86D2-78EB4AA3E771
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The value of the field that is used to search for the container.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description The ID of the container cluster.
     *
     * >  You can call the [DescribeGroupedContainerInstances](~~DescribeGroupedContainerInstances~~) operation to query the IDs of container clusters.
     * @var warningMachines[]
     */
    public $warningMachines;
    protected $_name = [
        'count'           => 'Count',
        'currentPage'     => 'CurrentPage',
        'pageSize'        => 'PageSize',
        'requestId'       => 'RequestId',
        'totalCount'      => 'TotalCount',
        'warningMachines' => 'WarningMachines',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
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
        if (null !== $this->warningMachines) {
            $res['WarningMachines'] = [];
            if (null !== $this->warningMachines && \is_array($this->warningMachines)) {
                $n = 0;
                foreach ($this->warningMachines as $item) {
                    $res['WarningMachines'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeWarningMachinesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
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
        if (isset($map['WarningMachines'])) {
            if (!empty($map['WarningMachines'])) {
                $model->warningMachines = [];
                $n                      = 0;
                foreach ($map['WarningMachines'] as $item) {
                    $model->warningMachines[$n++] = null !== $item ? warningMachines::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
