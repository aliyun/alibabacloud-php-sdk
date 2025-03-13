<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DescribeConfigGroupRequest extends Model
{
    /**
     * @description The ID of the configuration group.
     *
     * @example cg-i1ruuudp92qpj****
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The IDs of the configuration groups.
     *
     * @var string[]
     */
    public $groupIds;

    /**
     * @description The name of the configuration group.
     *
     * @example ScheduledTask
     *
     * @var string
     */
    public $name;

    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The service type of the configuration group.
     *
     * Valid value:
     *
     *   CLOUD_DESKTOP: the cloud computer service.
     *
     * @example CLOUD_DESKTOP
     *
     * @var string
     */
    public $productType;

    /**
     * @description The ID of the region. Set the value to `cn-shanghai`.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The status of the configuration groups.
     *
     * @var string[]
     */
    public $statuses;

    /**
     * @description The type of the configuration group.
     *
     * Valid value:
     *
     *   Timer: the scheduled task type.
     *
     * @example Timer
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'groupId'     => 'GroupId',
        'groupIds'    => 'GroupIds',
        'name'        => 'Name',
        'pageNumber'  => 'PageNumber',
        'pageSize'    => 'PageSize',
        'productType' => 'ProductType',
        'regionId'    => 'RegionId',
        'statuses'    => 'Statuses',
        'type'        => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupIds) {
            $res['GroupIds'] = $this->groupIds;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->statuses) {
            $res['Statuses'] = $this->statuses;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeConfigGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupIds'])) {
            if (!empty($map['GroupIds'])) {
                $model->groupIds = $map['GroupIds'];
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Statuses'])) {
            if (!empty($map['Statuses'])) {
                $model->statuses = $map['Statuses'];
            }
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
