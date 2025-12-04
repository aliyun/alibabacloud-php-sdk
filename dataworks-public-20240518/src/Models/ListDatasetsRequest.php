<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class ListDatasetsRequest extends Model
{
    /**
     * @var string
     */
    public $creatorId;

    /**
     * @var string[]
     */
    public $dataTypeList;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $order;

    /**
     * @var string
     */
    public $origin;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $sortBy;

    /**
     * @var string[]
     */
    public $storageTypeList;
    protected $_name = [
        'creatorId' => 'CreatorId',
        'dataTypeList' => 'DataTypeList',
        'name' => 'Name',
        'order' => 'Order',
        'origin' => 'Origin',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'projectId' => 'ProjectId',
        'sortBy' => 'SortBy',
        'storageTypeList' => 'StorageTypeList',
    ];

    public function validate()
    {
        if (\is_array($this->dataTypeList)) {
            Model::validateArray($this->dataTypeList);
        }
        if (\is_array($this->storageTypeList)) {
            Model::validateArray($this->storageTypeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
        }

        if (null !== $this->dataTypeList) {
            if (\is_array($this->dataTypeList)) {
                $res['DataTypeList'] = [];
                $n1 = 0;
                foreach ($this->dataTypeList as $item1) {
                    $res['DataTypeList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }

        if (null !== $this->origin) {
            $res['Origin'] = $this->origin;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }

        if (null !== $this->storageTypeList) {
            if (\is_array($this->storageTypeList)) {
                $res['StorageTypeList'] = [];
                $n1 = 0;
                foreach ($this->storageTypeList as $item1) {
                    $res['StorageTypeList'][$n1] = $item1;
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
        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
        }

        if (isset($map['DataTypeList'])) {
            if (!empty($map['DataTypeList'])) {
                $model->dataTypeList = [];
                $n1 = 0;
                foreach ($map['DataTypeList'] as $item1) {
                    $model->dataTypeList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }

        if (isset($map['Origin'])) {
            $model->origin = $map['Origin'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }

        if (isset($map['StorageTypeList'])) {
            if (!empty($map['StorageTypeList'])) {
                $model->storageTypeList = [];
                $n1 = 0;
                foreach ($map['StorageTypeList'] as $item1) {
                    $model->storageTypeList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
