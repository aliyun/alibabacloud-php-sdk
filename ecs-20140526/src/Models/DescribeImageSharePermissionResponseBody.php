<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImageSharePermissionResponseBody\accounts;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImageSharePermissionResponseBody\shareGroups;
use AlibabaCloud\Tea\Model;

class DescribeImageSharePermissionResponseBody extends Model
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
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var shareGroups[]
     */
    public $shareGroups;

    /**
     * @var accounts[]
     */
    public $accounts;
    protected $_name = [
        'totalCount'  => 'TotalCount',
        'requestId'   => 'RequestId',
        'pageSize'    => 'PageSize',
        'pageNumber'  => 'PageNumber',
        'imageId'     => 'ImageId',
        'regionId'    => 'RegionId',
        'shareGroups' => 'ShareGroups',
        'accounts'    => 'Accounts',
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
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->shareGroups) {
            $res['ShareGroups'] = [];
            if (null !== $this->shareGroups && \is_array($this->shareGroups)) {
                $n = 0;
                foreach ($this->shareGroups as $item) {
                    $res['ShareGroups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->accounts) {
            $res['Accounts'] = [];
            if (null !== $this->accounts && \is_array($this->accounts)) {
                $n = 0;
                foreach ($this->accounts as $item) {
                    $res['Accounts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeImageSharePermissionResponseBody
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
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ShareGroups'])) {
            if (!empty($map['ShareGroups'])) {
                $model->shareGroups = [];
                $n                  = 0;
                foreach ($map['ShareGroups'] as $item) {
                    $model->shareGroups[$n++] = null !== $item ? shareGroups::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Accounts'])) {
            if (!empty($map['Accounts'])) {
                $model->accounts = [];
                $n               = 0;
                foreach ($map['Accounts'] as $item) {
                    $model->accounts[$n++] = null !== $item ? accounts::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
