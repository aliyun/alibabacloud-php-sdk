<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeLocalDiskRepairActivitiesResponseBody\localDiskRepairActivities;
use AlibabaCloud\Tea\Model;

class DescribeLocalDiskRepairActivitiesResponseBody extends Model
{
    /**
     * @var localDiskRepairActivities
     */
    public $localDiskRepairActivities;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'localDiskRepairActivities' => 'LocalDiskRepairActivities',
        'pageNumber'                => 'PageNumber',
        'pageSize'                  => 'PageSize',
        'requestId'                 => 'RequestId',
        'totalCount'                => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->localDiskRepairActivities) {
            $res['LocalDiskRepairActivities'] = null !== $this->localDiskRepairActivities ? $this->localDiskRepairActivities->toMap() : null;
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
     * @return DescribeLocalDiskRepairActivitiesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LocalDiskRepairActivities'])) {
            $model->localDiskRepairActivities = localDiskRepairActivities::fromMap($map['LocalDiskRepairActivities']);
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
