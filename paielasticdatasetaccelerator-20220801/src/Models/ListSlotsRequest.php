<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models;

use AlibabaCloud\Tea\Model;

class ListSlotsRequest extends Model
{
    /**
     * @description 加速槽所对应的数据集加速挂载点的唯一标识符。
     *
     * @example endp-my1tk3jggooi5uwks5
     *
     * @var string
     */
    public $endpointIds;

    /**
     * @example inst-my1tk3jggooi5uwks5
     *
     * @var string
     */
    public $instanceIds;

    /**
     * @example acc_instance_slot_1
     *
     * @var string
     */
    public $name;

    /**
     * @example Desc
     *
     * @var string
     */
    public $order;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example Running
     *
     * @var string
     */
    public $phase;

    /**
     * @example slot-my1tk3jggooi5uwks5,slot-n69468yvjz8d12as7d,slot-tga4omjrepklkg1onn
     *
     * @var string
     */
    public $slotIds;

    /**
     * @example GmtCreateTime
     *
     * @var string
     */
    public $sortBy;

    /**
     * @example OSS
     *
     * @var string
     */
    public $storageType;

    /**
     * @description 数据集加速槽的数据存储路径（URI）。
     *
     * @var string
     */
    public $storageUri;
    protected $_name = [
        'endpointIds' => 'EndpointIds',
        'instanceIds' => 'InstanceIds',
        'name'        => 'Name',
        'order'       => 'Order',
        'pageNumber'  => 'PageNumber',
        'pageSize'    => 'PageSize',
        'phase'       => 'Phase',
        'slotIds'     => 'SlotIds',
        'sortBy'      => 'SortBy',
        'storageType' => 'StorageType',
        'storageUri'  => 'StorageUri',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endpointIds) {
            $res['EndpointIds'] = $this->endpointIds;
        }
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->phase) {
            $res['Phase'] = $this->phase;
        }
        if (null !== $this->slotIds) {
            $res['SlotIds'] = $this->slotIds;
        }
        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }
        if (null !== $this->storageUri) {
            $res['StorageUri'] = $this->storageUri;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSlotsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndpointIds'])) {
            $model->endpointIds = $map['EndpointIds'];
        }
        if (isset($map['InstanceIds'])) {
            $model->instanceIds = $map['InstanceIds'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Phase'])) {
            $model->phase = $map['Phase'];
        }
        if (isset($map['SlotIds'])) {
            $model->slotIds = $map['SlotIds'];
        }
        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }
        if (isset($map['StorageUri'])) {
            $model->storageUri = $map['StorageUri'];
        }

        return $model;
    }
}
