<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstanceSDGStatusResponseBody\deploymentStatus;
use AlibabaCloud\Tea\Model;

class DescribeInstanceSDGStatusResponseBody extends Model
{
    /**
     * @description The deployment information of the SDGs.
     *
     * @var deploymentStatus[]
     */
    public $deploymentStatus;

    /**
     * @description The number of the page to return. Pages start from page 1. Default value: 1
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Default value: **10**.
     *
     * @example 10
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description The request ID.
     *
     * @example C0003E8B-B930-4F59-ADC0-0E209A9012A8
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of queried deployment records.
     *
     * @example 1
     *
     * @var string
     */
    public $totalCount;
    protected $_name = [
        'deploymentStatus' => 'DeploymentStatus',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->deploymentStatus) {
            $res['DeploymentStatus'] = [];
            if (null !== $this->deploymentStatus && \is_array($this->deploymentStatus)) {
                $n = 0;
                foreach ($this->deploymentStatus as $item) {
                    $res['DeploymentStatus'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeInstanceSDGStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeploymentStatus'])) {
            if (!empty($map['DeploymentStatus'])) {
                $model->deploymentStatus = [];
                $n = 0;
                foreach ($map['DeploymentStatus'] as $item) {
                    $model->deploymentStatus[$n++] = null !== $item ? deploymentStatus::fromMap($item) : $item;
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
