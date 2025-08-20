<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\GetDynamicRouteResponseBody;

use AlibabaCloud\Dara\Model;

class dynamicRoute extends Model
{
    /**
     * @var string[]
     */
    public $applicationIds;

    /**
     * @var string
     */
    public $applicationType;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $dynamicRouteId;

    /**
     * @var string
     */
    public $dynamicRouteType;

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
    public $priority;

    /**
     * @var string[]
     */
    public $regionIds;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string[]
     */
    public $tagIds;
    protected $_name = [
        'applicationIds' => 'ApplicationIds',
        'applicationType' => 'ApplicationType',
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'dynamicRouteId' => 'DynamicRouteId',
        'dynamicRouteType' => 'DynamicRouteType',
        'name' => 'Name',
        'nextHop' => 'NextHop',
        'priority' => 'Priority',
        'regionIds' => 'RegionIds',
        'status' => 'Status',
        'tagIds' => 'TagIds',
    ];

    public function validate()
    {
        if (\is_array($this->applicationIds)) {
            Model::validateArray($this->applicationIds);
        }
        if (\is_array($this->regionIds)) {
            Model::validateArray($this->regionIds);
        }
        if (\is_array($this->tagIds)) {
            Model::validateArray($this->tagIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationIds) {
            if (\is_array($this->applicationIds)) {
                $res['ApplicationIds'] = [];
                $n1 = 0;
                foreach ($this->applicationIds as $item1) {
                    $res['ApplicationIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->applicationType) {
            $res['ApplicationType'] = $this->applicationType;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->dynamicRouteId) {
            $res['DynamicRouteId'] = $this->dynamicRouteId;
        }

        if (null !== $this->dynamicRouteType) {
            $res['DynamicRouteType'] = $this->dynamicRouteType;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->nextHop) {
            $res['NextHop'] = $this->nextHop;
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        if (null !== $this->regionIds) {
            if (\is_array($this->regionIds)) {
                $res['RegionIds'] = [];
                $n1 = 0;
                foreach ($this->regionIds as $item1) {
                    $res['RegionIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tagIds) {
            if (\is_array($this->tagIds)) {
                $res['TagIds'] = [];
                $n1 = 0;
                foreach ($this->tagIds as $item1) {
                    $res['TagIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['ApplicationIds'])) {
            if (!empty($map['ApplicationIds'])) {
                $model->applicationIds = [];
                $n1 = 0;
                foreach ($map['ApplicationIds'] as $item1) {
                    $model->applicationIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ApplicationType'])) {
            $model->applicationType = $map['ApplicationType'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DynamicRouteId'])) {
            $model->dynamicRouteId = $map['DynamicRouteId'];
        }

        if (isset($map['DynamicRouteType'])) {
            $model->dynamicRouteType = $map['DynamicRouteType'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NextHop'])) {
            $model->nextHop = $map['NextHop'];
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        if (isset($map['RegionIds'])) {
            if (!empty($map['RegionIds'])) {
                $model->regionIds = [];
                $n1 = 0;
                foreach ($map['RegionIds'] as $item1) {
                    $model->regionIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TagIds'])) {
            if (!empty($map['TagIds'])) {
                $model->tagIds = [];
                $n1 = 0;
                foreach ($map['TagIds'] as $item1) {
                    $model->tagIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
