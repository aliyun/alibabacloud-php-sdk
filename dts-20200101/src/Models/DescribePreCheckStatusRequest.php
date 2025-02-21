<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Dara\Model;

class DescribePreCheckStatusRequest extends Model
{
    /**
     * @var string
     */
    public $dtsJobId;
    /**
     * @var string
     */
    public $jobCode;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $pageNo;
    /**
     * @var string
     */
    public $pageSize;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $resourceGroupId;
    /**
     * @var string
     */
    public $structPhase;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
