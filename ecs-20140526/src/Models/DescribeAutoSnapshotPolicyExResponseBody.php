<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoSnapshotPolicyExResponseBody\autoSnapshotPolicies;
use AlibabaCloud\Tea\Model;

class DescribeAutoSnapshotPolicyExResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

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
    public $pageNumber;

    /**
     * @var autoSnapshotPolicies[]
     */
    public $autoSnapshotPolicies;
    protected $_name = [
        'totalCount'           => 'TotalCount',
        'pageSize'             => 'PageSize',
        'requestId'            => 'RequestId',
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
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->autoSnapshotPolicies) {
            $res['AutoSnapshotPolicies'] = [];
            if (null !== $this->autoSnapshotPolicies && \is_array($this->autoSnapshotPolicies)) {
                $n = 0;
                foreach ($this->autoSnapshotPolicies as $item) {
                    $res['AutoSnapshotPolicies'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAutoSnapshotPolicyExResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['AutoSnapshotPolicies'])) {
            if (!empty($map['AutoSnapshotPolicies'])) {
                $model->autoSnapshotPolicies = [];
                $n                           = 0;
                foreach ($map['AutoSnapshotPolicies'] as $item) {
                    $model->autoSnapshotPolicies[$n++] = null !== $item ? autoSnapshotPolicies::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
