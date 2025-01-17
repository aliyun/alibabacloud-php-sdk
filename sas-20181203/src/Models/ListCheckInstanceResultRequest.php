<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class ListCheckInstanceResultRequest extends Model
{
    /**
     * @var int
     */
    public $checkId;
    /**
     * @var int
     */
    public $currentPage;
    /**
     * @var string
     */
    public $instanceIdKey;
    /**
     * @var string[]
     */
    public $instanceIds;
    /**
     * @var string
     */
    public $instanceNameKey;
    /**
     * @var string
     */
    public $lang;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var string
     */
    public $regionIdKey;
    /**
     * @var string[]
     */
    public $sortTypes;
    /**
     * @var string[]
     */
    public $statuses;
    protected $_name = [
        'checkId'         => 'CheckId',
        'currentPage'     => 'CurrentPage',
        'instanceIdKey'   => 'InstanceIdKey',
        'instanceIds'     => 'InstanceIds',
        'instanceNameKey' => 'InstanceNameKey',
        'lang'            => 'Lang',
        'pageSize'        => 'PageSize',
        'regionIdKey'     => 'RegionIdKey',
        'sortTypes'       => 'SortTypes',
        'statuses'        => 'Statuses',
    ];

    public function validate()
    {
        if (\is_array($this->instanceIds)) {
            Model::validateArray($this->instanceIds);
        }
        if (\is_array($this->sortTypes)) {
            Model::validateArray($this->sortTypes);
        }
        if (\is_array($this->statuses)) {
            Model::validateArray($this->statuses);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkId) {
            $res['CheckId'] = $this->checkId;
        }

        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->instanceIdKey) {
            $res['InstanceIdKey'] = $this->instanceIdKey;
        }

        if (null !== $this->instanceIds) {
            if (\is_array($this->instanceIds)) {
                $res['InstanceIds'] = [];
                $n1                 = 0;
                foreach ($this->instanceIds as $item1) {
                    $res['InstanceIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->instanceNameKey) {
            $res['InstanceNameKey'] = $this->instanceNameKey;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->regionIdKey) {
            $res['RegionIdKey'] = $this->regionIdKey;
        }

        if (null !== $this->sortTypes) {
            if (\is_array($this->sortTypes)) {
                $res['SortTypes'] = [];
                $n1               = 0;
                foreach ($this->sortTypes as $item1) {
                    $res['SortTypes'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->statuses) {
            if (\is_array($this->statuses)) {
                $res['Statuses'] = [];
                $n1              = 0;
                foreach ($this->statuses as $item1) {
                    $res['Statuses'][$n1++] = $item1;
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
        if (isset($map['CheckId'])) {
            $model->checkId = $map['CheckId'];
        }

        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['InstanceIdKey'])) {
            $model->instanceIdKey = $map['InstanceIdKey'];
        }

        if (isset($map['InstanceIds'])) {
            if (!empty($map['InstanceIds'])) {
                $model->instanceIds = [];
                $n1                 = 0;
                foreach ($map['InstanceIds'] as $item1) {
                    $model->instanceIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['InstanceNameKey'])) {
            $model->instanceNameKey = $map['InstanceNameKey'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RegionIdKey'])) {
            $model->regionIdKey = $map['RegionIdKey'];
        }

        if (isset($map['SortTypes'])) {
            if (!empty($map['SortTypes'])) {
                $model->sortTypes = [];
                $n1               = 0;
                foreach ($map['SortTypes'] as $item1) {
                    $model->sortTypes[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Statuses'])) {
            if (!empty($map['Statuses'])) {
                $model->statuses = [];
                $n1              = 0;
                foreach ($map['Statuses'] as $item1) {
                    $model->statuses[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
