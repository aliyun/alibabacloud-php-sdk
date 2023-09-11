<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class DescribeContactGroupsRequest extends Model
{
    /**
     * @description The name of the alert contact group.
     *
     * @example TestGroup
     *
     * @var string
     */
    public $contactGroupName;

    /**
     * @description The ID of the alert contact group.
     *
     * @example 12345
     *
     * @var string
     */
    public $groupIds;

    /**
     * @description Specifies whether to return all the alert contacts in the queried alert contact group. Valid values:
     *
     *   `false`
     *   `true`
     *
     * @example true
     *
     * @var bool
     */
    public $isDetail;

    /**
     * @description The number of the page to return.
     *
     * @example 1
     *
     * @var int
     */
    public $page;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The number of alert contact groups displayed on each page.
     *
     * @example 20
     *
     * @var int
     */
    public $size;
    protected $_name = [
        'contactGroupName' => 'ContactGroupName',
        'groupIds'         => 'GroupIds',
        'isDetail'         => 'IsDetail',
        'page'             => 'Page',
        'regionId'         => 'RegionId',
        'size'             => 'Size',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactGroupName) {
            $res['ContactGroupName'] = $this->contactGroupName;
        }
        if (null !== $this->groupIds) {
            $res['GroupIds'] = $this->groupIds;
        }
        if (null !== $this->isDetail) {
            $res['IsDetail'] = $this->isDetail;
        }
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeContactGroupsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContactGroupName'])) {
            $model->contactGroupName = $map['ContactGroupName'];
        }
        if (isset($map['GroupIds'])) {
            $model->groupIds = $map['GroupIds'];
        }
        if (isset($map['IsDetail'])) {
            $model->isDetail = $map['IsDetail'];
        }
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        return $model;
    }
}
