<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Dara\Model;

class ListStackInstancesRequest extends Model
{
    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $stackGroupName;

    /**
     * @var string
     */
    public $stackInstanceAccountId;

    /**
     * @var string
     */
    public $stackInstanceRegionId;
    protected $_name = [
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'regionId' => 'RegionId',
        'stackGroupName' => 'StackGroupName',
        'stackInstanceAccountId' => 'StackInstanceAccountId',
        'stackInstanceRegionId' => 'StackInstanceRegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->stackGroupName) {
            $res['StackGroupName'] = $this->stackGroupName;
        }

        if (null !== $this->stackInstanceAccountId) {
            $res['StackInstanceAccountId'] = $this->stackInstanceAccountId;
        }

        if (null !== $this->stackInstanceRegionId) {
            $res['StackInstanceRegionId'] = $this->stackInstanceRegionId;
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
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['StackGroupName'])) {
            $model->stackGroupName = $map['StackGroupName'];
        }

        if (isset($map['StackInstanceAccountId'])) {
            $model->stackInstanceAccountId = $map['StackInstanceAccountId'];
        }

        if (isset($map['StackInstanceRegionId'])) {
            $model->stackInstanceRegionId = $map['StackInstanceRegionId'];
        }

        return $model;
    }
}
