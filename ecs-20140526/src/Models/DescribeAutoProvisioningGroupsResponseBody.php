<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupsResponseBody\autoProvisioningGroups;
use AlibabaCloud\Tea\Model;

class DescribeAutoProvisioningGroupsResponseBody extends Model
{
    /**
     * @description Details about the auto provisioning groups.
     *
     * @var autoProvisioningGroups
     */
    public $autoProvisioningGroups;

    /**
     * @description The number of the page returned.
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
     * @example 745CEC9F-0DD7-4451-9FE7-8B752F39****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The number of queried auto provisioning groups.
     *
     * @example 10
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'autoProvisioningGroups' => 'AutoProvisioningGroups',
        'pageNumber'             => 'PageNumber',
        'pageSize'               => 'PageSize',
        'requestId'              => 'RequestId',
        'totalCount'             => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoProvisioningGroups) {
            $res['AutoProvisioningGroups'] = null !== $this->autoProvisioningGroups ? $this->autoProvisioningGroups->toMap() : null;
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
     * @return DescribeAutoProvisioningGroupsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoProvisioningGroups'])) {
            $model->autoProvisioningGroups = autoProvisioningGroups::fromMap($map['AutoProvisioningGroups']);
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
