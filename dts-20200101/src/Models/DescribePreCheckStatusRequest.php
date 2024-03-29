<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DescribePreCheckStatusRequest extends Model
{
    /**
     * @description The ID of the data migration, data synchronization, or change tracking task.
     *
     * @example i03e3zty16i****
     *
     * @var string
     */
    public $dtsJobId;

    /**
     * @description The task code that specifies the type of the DTS subtask. Valid values:
     *
     *   **01**: precheck
     *   **02**: schema migration or initial schema synchronization
     *   **03**: full data migration or initial full data synchronization
     *   **04**: incremental data migration or synchronization
     *
     * @example 01
     *
     * @var string
     */
    public $jobCode;

    /**
     * @description The filter item used to filter tables in fuzzy match.
     *
     * @example dewuprop
     *
     * @var string
     */
    public $name;

    /**
     * @description The number of the page to return. The value must be an integer that is greater than **0** and does not exceed the maximum value of the Integer data type. Default value: **1**.
     *
     * @example 1
     *
     * @var string
     */
    public $pageNo;

    /**
     * @description The number of entries to return on each page. Default value: **20**.
     *
     * @example 30
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description The region ID of the DTS instance. For more information, see [List of supported regions](~~141033~~).
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The filter item used to filter tables, views, and functions during schema migration.
     *
     * @example View
     *
     * @var string
     */
    public $structPhase;

    /**
     * @description The type of schema definition. Valid values:
     *
     *   **before**: schema migration or initial schema synchronization
     *   **after**: DDL operations performed during incremental data migration or synchronization
     *
     * @example before
     *
     * @var string
     */
    public $structType;

    /**
     * @var bool
     */
    public $zeroEtlJob;
    protected $_name = [
        'dtsJobId'        => 'DtsJobId',
        'jobCode'         => 'JobCode',
        'name'            => 'Name',
        'pageNo'          => 'PageNo',
        'pageSize'        => 'PageSize',
        'regionId'        => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'structPhase'     => 'StructPhase',
        'structType'      => 'StructType',
        'zeroEtlJob'      => 'ZeroEtlJob',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dtsJobId) {
            $res['DtsJobId'] = $this->dtsJobId;
        }
        if (null !== $this->jobCode) {
            $res['JobCode'] = $this->jobCode;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->structPhase) {
            $res['StructPhase'] = $this->structPhase;
        }
        if (null !== $this->structType) {
            $res['StructType'] = $this->structType;
        }
        if (null !== $this->zeroEtlJob) {
            $res['ZeroEtlJob'] = $this->zeroEtlJob;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePreCheckStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DtsJobId'])) {
            $model->dtsJobId = $map['DtsJobId'];
        }
        if (isset($map['JobCode'])) {
            $model->jobCode = $map['JobCode'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['StructPhase'])) {
            $model->structPhase = $map['StructPhase'];
        }
        if (isset($map['StructType'])) {
            $model->structType = $map['StructType'];
        }
        if (isset($map['ZeroEtlJob'])) {
            $model->zeroEtlJob = $map['ZeroEtlJob'];
        }

        return $model;
    }
}
