<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class QueryRIUtilizationDetailRequest extends Model
{
    /**
     * @example jsdgfsdhgsdjh
     *
     * @var string
     */
    public $deductedInstanceId;

    /**
     * @example 2019-05-23 12:00:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @example Instancetyp
     *
     * @var string
     */
    public $instanceSpec;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example ecsRi
     *
     * @var string
     */
    public $RICommodityCode;

    /**
     * @example dsudfgdsjh
     *
     * @var string
     */
    public $RIInstanceId;

    /**
     * @example 2019-05-23 12:00:00
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'deductedInstanceId' => 'DeductedInstanceId',
        'endTime'            => 'EndTime',
        'instanceSpec'       => 'InstanceSpec',
        'pageNum'            => 'PageNum',
        'pageSize'           => 'PageSize',
        'RICommodityCode'    => 'RICommodityCode',
        'RIInstanceId'       => 'RIInstanceId',
        'startTime'          => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deductedInstanceId) {
            $res['DeductedInstanceId'] = $this->deductedInstanceId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->instanceSpec) {
            $res['InstanceSpec'] = $this->instanceSpec;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->RICommodityCode) {
            $res['RICommodityCode'] = $this->RICommodityCode;
        }
        if (null !== $this->RIInstanceId) {
            $res['RIInstanceId'] = $this->RIInstanceId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryRIUtilizationDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeductedInstanceId'])) {
            $model->deductedInstanceId = $map['DeductedInstanceId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['InstanceSpec'])) {
            $model->instanceSpec = $map['InstanceSpec'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RICommodityCode'])) {
            $model->RICommodityCode = $map['RICommodityCode'];
        }
        if (isset($map['RIInstanceId'])) {
            $model->RIInstanceId = $map['RIInstanceId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
