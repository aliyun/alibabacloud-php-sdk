<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ListCheckInstanceResultRequest extends Model
{
    /**
     * @description The ID of the check item.
     *
     * @example 23
     *
     * @var int
     */
    public $checkId;

    /**
     * @description The number of the page to return.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The ID of the instance.
     *
     * @example i-uf64w4q6p9jti5gl****
     *
     * @var string
     */
    public $instanceIdKey;

    /**
     * @description The instance IDs of cloud services.
     *
     * @var string[]
     */
    public $instanceIds;

    /**
     * @description The name of the instance.
     *
     * @example i-uf64w4q6p9jti5gl****
     *
     * @var string
     */
    public $instanceNameKey;

    /**
     * @description The language of the content within the request and response. Default value: **zh**. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The number of entries to return on each page.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The region ID of the instance.
     *
     * @example cn-qingdao
     *
     * @var string
     */
    public $regionIdKey;

    /**
     * @description The sort type of the instances.
     *
     * @var string[]
     */
    public $sortTypes;

    /**
     * @description The statuses of check items.
     *
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
