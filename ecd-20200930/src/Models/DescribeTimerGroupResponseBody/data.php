<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeTimerGroupResponseBody;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeTimerGroupResponseBody\data\configTimers;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The number of resources that are bound to the configuration group.
     *
     * @example 50
     *
     * @var int
     */
    public $bindCount;

    /**
     * @description The number of bound resources.
     *
     * @var int[]
     */
    public $bindCountMap;

    /**
     * @description The scheduled task configuration groups.
     *
     * @var configTimers[]
     */
    public $configTimers;

    /**
     * @description The description of the configuration group.
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the configuration group.
     *
     * @example cg-75aazkg2tnqb2*****
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The name of the configuration group.
     *
     * @var string
     */
    public $name;

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
        'bindCount' => 'BindCount',
        'bindCountMap' => 'BindCountMap',
        'configTimers' => 'ConfigTimers',
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
        if (null !== $this->configTimers) {
            $res['ConfigTimers'] = [];
            if (null !== $this->configTimers && \is_array($this->configTimers)) {
                $n = 0;
                foreach ($this->configTimers as $item) {
                    $res['ConfigTimers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['ConfigTimers'])) {
            if (!empty($map['ConfigTimers'])) {
                $model->configTimers = [];
                $n = 0;
                foreach ($map['ConfigTimers'] as $item) {
                    $model->configTimers[$n++] = null !== $item ? configTimers::fromMap($item) : $item;
                }
            }
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
