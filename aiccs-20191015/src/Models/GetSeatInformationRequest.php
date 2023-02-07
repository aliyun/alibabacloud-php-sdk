<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Tea\Model;

class GetSeatInformationRequest extends Model
{
    /**
     * @example ccc_xp_pre-cn-***
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @var int[]
     */
    public $depIds;

    /**
     * @example 1617761765000
     *
     * @var int
     */
    public $endDate;

    /**
     * @example true
     *
     * @var bool
     */
    public $existDepartmentGrouping;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 1615083365000
     *
     * @var int
     */
    public $startDate;
    protected $_name = [
        'instanceId'              => 'InstanceId',
        'currentPage'             => 'currentPage',
        'depIds'                  => 'depIds',
        'endDate'                 => 'endDate',
        'existDepartmentGrouping' => 'existDepartmentGrouping',
        'pageSize'                => 'pageSize',
        'startDate'               => 'startDate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->currentPage) {
            $res['currentPage'] = $this->currentPage;
        }
        if (null !== $this->depIds) {
            $res['depIds'] = $this->depIds;
        }
        if (null !== $this->endDate) {
            $res['endDate'] = $this->endDate;
        }
        if (null !== $this->existDepartmentGrouping) {
            $res['existDepartmentGrouping'] = $this->existDepartmentGrouping;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->startDate) {
            $res['startDate'] = $this->startDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSeatInformationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['currentPage'])) {
            $model->currentPage = $map['currentPage'];
        }
        if (isset($map['depIds'])) {
            if (!empty($map['depIds'])) {
                $model->depIds = $map['depIds'];
            }
        }
        if (isset($map['endDate'])) {
            $model->endDate = $map['endDate'];
        }
        if (isset($map['existDepartmentGrouping'])) {
            $model->existDepartmentGrouping = $map['existDepartmentGrouping'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['startDate'])) {
            $model->startDate = $map['startDate'];
        }

        return $model;
    }
}
