<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeAutoSnapshotPoliciesResponseBody\autoSnapshotPolicies;
use AlibabaCloud\Tea\Model;

class DescribeAutoSnapshotPoliciesResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var autoSnapshotPolicies
     */
    public $autoSnapshotPolicies;
    protected $_name = [
        'totalCount'           => 'TotalCount',
        'requestId'            => 'RequestId',
        'pageSize'             => 'PageSize',
        'pageNumber'           => 'PageNumber',
        'autoSnapshotPolicies' => 'AutoSnapshotPolicies',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->autoSnapshotPolicies) {
            $res['AutoSnapshotPolicies'] = null !== $this->autoSnapshotPolicies ? $this->autoSnapshotPolicies->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAutoSnapshotPoliciesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['AutoSnapshotPolicies'])) {
            $model->autoSnapshotPolicies = autoSnapshotPolicies::fromMap($map['AutoSnapshotPolicies']);
        }

        return $model;
    }
}
