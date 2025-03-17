<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeConfigGroupResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The number of resources that are bound to the configuration group.
     *
     * @example 4
     *
     * @var int
     */
    public $bindCount;

    /**
     * @description The number of bound cloud computers.
     *
     * @var int[]
     */
    public $bindCountMap;

    /**
     * @description The description of the configuration group.
     *
     * @example ScheduledTask
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the configuration group.
     *
     * @example ccg-0cid8v30an12****
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The name of the configuration group.
     *
     * @example ScheduledTask
     *
     * @var string
     */
    public $name;

    /**
     * @description The service type of the configuration group.
     *
     * Valid values:
     *
     *   CLOUD_DESKTOP: the cloud computer service.
     *
     * @example CLOUD_DESKTOP
     *
     * @var string
     */
    public $productType;

    /**
     * @description The state of the configuration group.
     *
     * Valid values:
     *
     *   AVAILABLE: The configuration group is available.
     *   UNAVAILABLE: The configuration group is deleted.
     *   DELETING: The configuration group is being deleted.
     *   UPDATING: The configuration group is being modified.
     *
     * @example AVAILABLE
     *
     * @var string
     */
    public $status;

    /**
     * @description The type of the configuration group.
     *
     * Valid values:
     *
     *   Timer: the scheduled task type.
     *
     * @example Timer
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'bindCount' => 'BindCount',
        'bindCountMap' => 'BindCountMap',
        'description' => 'Description',
        'groupId' => 'GroupId',
        'name' => 'Name',
        'productType' => 'ProductType',
        'status' => 'Status',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->bindCount) {
            $res['BindCount'] = $this->bindCount;
        }
        if (null !== $this->bindCountMap) {
            $res['BindCountMap'] = $this->bindCountMap;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BindCount'])) {
            $model->bindCount = $map['BindCount'];
        }
        if (isset($map['BindCountMap'])) {
            $model->bindCountMap = $map['BindCountMap'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
