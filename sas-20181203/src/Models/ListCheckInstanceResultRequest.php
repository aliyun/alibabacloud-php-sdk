<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
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
            $res['InstanceIds'] = $this->instanceIds;
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
            $res['SortTypes'] = $this->sortTypes;
        }
        if (null !== $this->statuses) {
            $res['Statuses'] = $this->statuses;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCheckInstanceResultRequest
     */
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
                $model->instanceIds = $map['InstanceIds'];
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
                $model->sortTypes = $map['SortTypes'];
            }
        }
        if (isset($map['Statuses'])) {
            if (!empty($map['Statuses'])) {
                $model->statuses = $map['Statuses'];
            }
        }

        return $model;
    }
}
