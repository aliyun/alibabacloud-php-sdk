<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;

class ListDynamicRoutesRequest extends Model
{
    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string[]
     */
    public $dynamicRouteIds;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $nextHop;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string[]
     */
    public $regionIds;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $tagId;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'currentPage' => 'CurrentPage',
        'dynamicRouteIds' => 'DynamicRouteIds',
        'name' => 'Name',
        'nextHop' => 'NextHop',
        'pageSize' => 'PageSize',
        'regionIds' => 'RegionIds',
        'status' => 'Status',
        'tagId' => 'TagId',
    ];

    public function validate()
    {
        if (\is_array($this->dynamicRouteIds)) {
            Model::validateArray($this->dynamicRouteIds);
        }
        if (\is_array($this->regionIds)) {
            Model::validateArray($this->regionIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->dynamicRouteIds) {
            if (\is_array($this->dynamicRouteIds)) {
                $res['DynamicRouteIds'] = [];
                $n1 = 0;
                foreach ($this->dynamicRouteIds as $item1) {
                    $res['DynamicRouteIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->nextHop) {
            $res['NextHop'] = $this->nextHop;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->regionIds) {
            if (\is_array($this->regionIds)) {
                $res['RegionIds'] = [];
                $n1 = 0;
                foreach ($this->regionIds as $item1) {
                    $res['RegionIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tagId) {
            $res['TagId'] = $this->tagId;
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
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }

        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['DynamicRouteIds'])) {
            if (!empty($map['DynamicRouteIds'])) {
                $model->dynamicRouteIds = [];
                $n1 = 0;
                foreach ($map['DynamicRouteIds'] as $item1) {
                    $model->dynamicRouteIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NextHop'])) {
            $model->nextHop = $map['NextHop'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RegionIds'])) {
            if (!empty($map['RegionIds'])) {
                $model->regionIds = [];
                $n1 = 0;
                foreach ($map['RegionIds'] as $item1) {
                    $model->regionIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TagId'])) {
            $model->tagId = $map['TagId'];
        }

        return $model;
    }
}
