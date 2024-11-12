<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DescribeCheckJobsRequest extends Model
{
    /**
     * @example z9p104ib23***
     *
     * @var string
     */
    public $checkJobId;

    /**
     * @example 1
     *
     * @var int
     */
    public $checkType;

    /**
     * @example dtsz9p104ib23e972e
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example zwy_test
     *
     * @var string
     */
    public $jobName;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 30
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example rg-acfmzawhxxc****
     *
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'checkJobId'      => 'CheckJobId',
        'checkType'       => 'CheckType',
        'instanceId'      => 'InstanceId',
        'jobName'         => 'JobName',
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'resourceGroupId' => 'ResourceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkJobId) {
            $res['CheckJobId'] = $this->checkJobId;
        }
        if (null !== $this->checkType) {
            $res['CheckType'] = $this->checkType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCheckJobsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckJobId'])) {
            $model->checkJobId = $map['CheckJobId'];
        }
        if (isset($map['CheckType'])) {
            $model->checkType = $map['CheckType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
