<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class QueryRIUtilizationDetailRequest extends Model
{
    /**
     * @description The ID of the instance whose fees are deducted by using the RI. If this parameter is left empty, the usage details of all instances are queried.
     *
     * @example jsdgfsdhgsdjh
     *
     * @var string
     */
    public $deductedInstanceId;

    /**
     * @description The time when the RI expires. Specify the time in the YYYY-MM-DD HH:mm:ss format.
     *
     * @example 2019-05-23 12:00:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The instance type of the RI.
     *
     * @example Instancetyp
     *
     * @var string
     */
    public $instanceSpec;

    /**
     * @description The number of the page to return. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @description The number of entries to return on each page. Default value: 20. Maximum value: 300.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The code of the service to which the RI is applied. Default value: ecsRi. Valid values:
     *
     *   ecsRi: ECS RI.
     *   scu_bag: storage capacity unit (SCU).
     *
     * @example ecsRi
     *
     * @var string
     */
    public $RICommodityCode;

    /**
     * @description The ID of the RI. If this parameter is left empty, the usage details of all RIs are queried.
     *
     * @example dsudfgdsjh
     *
     * @var string
     */
    public $RIInstanceId;

    /**
     * @description The time when the RI was created. Specify the time in the YYYY-MM-DD HH:mm:ss format.
     *
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
