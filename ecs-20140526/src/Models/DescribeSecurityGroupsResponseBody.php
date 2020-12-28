<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSecurityGroupsResponseBody\securityGroups;
use AlibabaCloud\Tea\Model;

class DescribeSecurityGroupsResponseBody extends Model
{
    /**
     * @var securityGroups[]
     */
    public $securityGroups;

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
     * @var string
     */
    public $regionId;
    protected $_name = [
        'securityGroups' => 'SecurityGroups',
        'totalCount'     => 'TotalCount',
        'pageSize'       => 'PageSize',
        'requestId'      => 'RequestId',
        'pageNumber'     => 'PageNumber',
        'regionId'       => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityGroups) {
            $res['SecurityGroups'] = [];
            if (null !== $this->securityGroups && \is_array($this->securityGroups)) {
                $n = 0;
                foreach ($this->securityGroups as $item) {
                    $res['SecurityGroups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSecurityGroupsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityGroups'])) {
            if (!empty($map['SecurityGroups'])) {
                $model->securityGroups = [];
                $n                     = 0;
                foreach ($map['SecurityGroups'] as $item) {
                    $model->securityGroups[$n++] = null !== $item ? securityGroups::fromMap($item) : $item;
                }
            }
        }
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
