<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Tea\Model;

class UpdateDynamicRouteRequest extends Model
{
    /**
     * @var string[]
     */
    public $applicationIds;

    /**
     * @example Application
     *
     * @var string
     */
    public $applicationType;

    /**
     * @var string
     */
    public $description;

    /**
     * @description This parameter is required.
     *
     * @example dr-ca9fddfac7c6****
     *
     * @var string
     */
    public $dynamicRouteId;

    /**
     * @example connector
     *
     * @var string
     */
    public $dynamicRouteType;

    /**
     * @example Cover
     *
     * @var string
     */
    public $modifyType;

    /**
     * @example dynamic_route_name
     *
     * @var string
     */
    public $name;

    /**
     * @example connector-8ccb13b6f52c****
     *
     * @var string
     */
    public $nextHop;

    /**
     * @example 99
     *
     * @var int
     */
    public $priority;

    /**
     * @var string[]
     */
    public $regionIds;

    /**
     * @example Disabled
     *
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
        'description' => 'Description',
        'dynamicRouteId' => 'DynamicRouteId',
        'dynamicRouteType' => 'DynamicRouteType',
        'modifyType' => 'ModifyType',
        'name' => 'Name',
        'nextHop' => 'NextHop',
        'priority' => 'Priority',
        'regionIds' => 'RegionIds',
        'status' => 'Status',
        'tagIds' => 'TagIds',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationIds) {
            $res['ApplicationIds'] = $this->applicationIds;
        }
        if (null !== $this->applicationType) {
            $res['ApplicationType'] = $this->applicationType;
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
        if (null !== $this->modifyType) {
            $res['ModifyType'] = $this->modifyType;
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
            $res['RegionIds'] = $this->regionIds;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tagIds) {
            $res['TagIds'] = $this->tagIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateDynamicRouteRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationIds'])) {
            if (!empty($map['ApplicationIds'])) {
                $model->applicationIds = $map['ApplicationIds'];
            }
        }
        if (isset($map['ApplicationType'])) {
            $model->applicationType = $map['ApplicationType'];
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
        if (isset($map['ModifyType'])) {
            $model->modifyType = $map['ModifyType'];
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
                $model->regionIds = $map['RegionIds'];
            }
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TagIds'])) {
            if (!empty($map['TagIds'])) {
                $model->tagIds = $map['TagIds'];
            }
        }

        return $model;
    }
}
