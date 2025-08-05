<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Tea\Model;

class ListStorageProjectsInfoRequest extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $ascOrder;

    /**
     * @description This parameter is required.
     *
     * @example 20241205
     *
     * @var string
     */
    public $date;

    /**
     * @example totalStorage
     *
     * @var string
     */
    public $orderColumn;

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
     * @example odps_project
     *
     * @var string
     */
    public $projectPrefix;

    /**
     * @example 1
     *
     * @var int
     */
    public $recentDays;

    /**
     * @example cn-chengdu
     *
     * @var string
     */
    public $region;

    /**
     * @example 28074710977****
     *
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'ascOrder' => 'ascOrder',
        'date' => 'date',
        'orderColumn' => 'orderColumn',
        'pageNumber' => 'pageNumber',
        'pageSize' => 'pageSize',
        'projectPrefix' => 'projectPrefix',
        'recentDays' => 'recentDays',
        'region' => 'region',
        'tenantId' => 'tenantId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->ascOrder) {
            $res['ascOrder'] = $this->ascOrder;
        }
        if (null !== $this->date) {
            $res['date'] = $this->date;
        }
        if (null !== $this->orderColumn) {
            $res['orderColumn'] = $this->orderColumn;
        }
        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->projectPrefix) {
            $res['projectPrefix'] = $this->projectPrefix;
        }
        if (null !== $this->recentDays) {
            $res['recentDays'] = $this->recentDays;
        }
        if (null !== $this->region) {
            $res['region'] = $this->region;
        }
        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListStorageProjectsInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ascOrder'])) {
            $model->ascOrder = $map['ascOrder'];
        }
        if (isset($map['date'])) {
            $model->date = $map['date'];
        }
        if (isset($map['orderColumn'])) {
            $model->orderColumn = $map['orderColumn'];
        }
        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['projectPrefix'])) {
            $model->projectPrefix = $map['projectPrefix'];
        }
        if (isset($map['recentDays'])) {
            $model->recentDays = $map['recentDays'];
        }
        if (isset($map['region'])) {
            $model->region = $map['region'];
        }
        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        return $model;
    }
}
