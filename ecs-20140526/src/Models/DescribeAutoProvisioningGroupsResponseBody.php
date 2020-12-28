<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupsResponseBody\autoProvisioningGroups;
use AlibabaCloud\Tea\Model;

class DescribeAutoProvisioningGroupsResponseBody extends Model
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
     * @var autoProvisioningGroups[]
     */
    public $autoProvisioningGroups;
    protected $_name = [
        'totalCount'             => 'TotalCount',
        'pageSize'               => 'PageSize',
        'requestId'              => 'RequestId',
        'pageNumber'             => 'PageNumber',
        'autoProvisioningGroups' => 'AutoProvisioningGroups',
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
        if (null !== $this->autoProvisioningGroups) {
            $res['AutoProvisioningGroups'] = [];
            if (null !== $this->autoProvisioningGroups && \is_array($this->autoProvisioningGroups)) {
                $n = 0;
                foreach ($this->autoProvisioningGroups as $item) {
                    $res['AutoProvisioningGroups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['AutoProvisioningGroups'])) {
            if (!empty($map['AutoProvisioningGroups'])) {
                $model->autoProvisioningGroups = [];
                $n                             = 0;
                foreach ($map['AutoProvisioningGroups'] as $item) {
                    $model->autoProvisioningGroups[$n++] = null !== $item ? autoProvisioningGroups::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
