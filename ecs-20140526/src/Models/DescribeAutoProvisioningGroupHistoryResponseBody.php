<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupHistoryResponseBody\autoProvisioningGroupHistories;
use AlibabaCloud\Tea\Model;

class DescribeAutoProvisioningGroupHistoryResponseBody extends Model
{
    /**
     * @description An array consisting of AutoProvisioningGroupHistory data.
     *
     * @var autoProvisioningGroupHistories
     */
    public $autoProvisioningGroupHistories;

    /**
     * @description The page number of the returned page.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries returned per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the request.
     *
     * @example B48A12CD-1295-4A38-A8F0-0E92C937****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The number of queried scheduling tasks in the auto provisioning group.
     *
     * @example 10
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'autoProvisioningGroupHistories' => 'AutoProvisioningGroupHistories',
        'pageNumber'                     => 'PageNumber',
        'pageSize'                       => 'PageSize',
        'requestId'                      => 'RequestId',
        'totalCount'                     => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoProvisioningGroupHistories) {
            $res['AutoProvisioningGroupHistories'] = null !== $this->autoProvisioningGroupHistories ? $this->autoProvisioningGroupHistories->toMap() : null;
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
     * @return DescribeAutoProvisioningGroupHistoryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoProvisioningGroupHistories'])) {
            $model->autoProvisioningGroupHistories = autoProvisioningGroupHistories::fromMap($map['AutoProvisioningGroupHistories']);
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
