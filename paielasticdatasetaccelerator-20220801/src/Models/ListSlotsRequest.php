<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models;

use AlibabaCloud\Dara\Model;

class ListSlotsRequest extends Model
{
    /**
     * @var string
     */
    public $endpointIds;

    /**
     * @var string
     */
    public $instanceIds;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $order;

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
    public $phase;

    /**
     * @var string
     */
    public $slotIds;

    /**
     * @var string
     */
    public $sortBy;

    /**
     * @var string
     */
    public $storageType;

    /**
     * @var string
     */
    public $storageUri;
    protected $_name = [
        'endpointIds' => 'EndpointIds',
        'instanceIds' => 'InstanceIds',
        'name' => 'Name',
        'order' => 'Order',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'phase' => 'Phase',
        'slotIds' => 'SlotIds',
        'sortBy' => 'SortBy',
        'storageType' => 'StorageType',
        'storageUri' => 'StorageUri',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
