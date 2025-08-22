<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;

class DescribeContactGroupsRequest extends Model
{
    /**
     * @var string
     */
    public $contactGroupName;

    /**
     * @var string
     */
    public $groupIds;

    /**
     * @var bool
     */
    public $isDetail;

    /**
     * @var int
     */
    public $page;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $size;
    protected $_name = [
        'contactGroupName' => 'ContactGroupName',
        'groupIds' => 'GroupIds',
        'isDetail' => 'IsDetail',
        'page' => 'Page',
        'regionId' => 'RegionId',
        'size' => 'Size',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
