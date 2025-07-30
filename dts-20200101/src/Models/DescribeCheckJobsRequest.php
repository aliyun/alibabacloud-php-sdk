<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DescribeCheckJobsRequest extends Model
{
    /**
     * @description Check the task job ID.
     *
     * @example z9p104ib23***
     *
     * @var string
     */
    public $checkJobId;

    /**
     * @description The type of the check
     * >>1 full quantity, 2 incremental, 3 all
     *
     * @example 1
     *
     * @var int
     */
    public $checkType;

    /**
     * @description Data migration instance ID, which can be queried by calling the **describemigrationjobs** API.
     *
     * @example dtsz9p104ib23e972e
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the data migration or synchronization job.
     *
     * @example zwy_test
     *
     * @var string
     */
    public $jobName;

    /**
     * @description The number of the page to return. The value must be an integer that is greater than **0**. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page.
     *
     * @example 30
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description Resource group ID.
     *
     * @example rg-acfmzawhxxc****
     *
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'checkJobId' => 'CheckJobId',
        'checkType' => 'CheckType',
        'instanceId' => 'InstanceId',
        'jobName' => 'JobName',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'resourceGroupId' => 'ResourceGroupId',
    ];

    public function validate() {}

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
