<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Tea\Model;

class ListComputeMetricsByInstanceRequest extends Model
{
    /**
     * @description The end time for the period.
     *
     * @example 1718590596556
     *
     * @var int
     */
    public $endDate;

    /**
     * @description The job(instance) ID.
     *
     * @example 20240730****ddlr
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The Alibaba Cloud account that is used to run the MaxCompute job.
     *
     * @example ALIYUN$7632***@aliyun.com
     *
     * @var string
     */
    public $jobOwner;

    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The name of MaxCompute project.
     *
     * @var string[]
     */
    public $projectNames;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @description The signature of the SQL job.
     *
     * @example ghijkl789012
     *
     * @var string
     */
    public $signature;

    /**
     * @description Specification types.
     *
     * @var string[]
     */
    public $specCodes;

    /**
     * @description The start time for the period.
     *
     * @example 1715393576201
     *
     * @var int
     */
    public $startDate;

    /**
     * @description Metering types.
     *
     * @var string[]
     */
    public $types;
    protected $_name = [
        'endDate' => 'endDate',
        'instanceId' => 'instanceId',
        'jobOwner' => 'jobOwner',
        'pageNumber' => 'pageNumber',
        'pageSize' => 'pageSize',
        'projectNames' => 'projectNames',
        'region' => 'region',
        'signature' => 'signature',
        'specCodes' => 'specCodes',
        'startDate' => 'startDate',
        'types' => 'types',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->endDate) {
            $res['endDate'] = $this->endDate;
        }
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }
        if (null !== $this->jobOwner) {
            $res['jobOwner'] = $this->jobOwner;
        }
        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->projectNames) {
            $res['projectNames'] = $this->projectNames;
        }
        if (null !== $this->region) {
            $res['region'] = $this->region;
        }
        if (null !== $this->signature) {
            $res['signature'] = $this->signature;
        }
        if (null !== $this->specCodes) {
            $res['specCodes'] = $this->specCodes;
        }
        if (null !== $this->startDate) {
            $res['startDate'] = $this->startDate;
        }
        if (null !== $this->types) {
            $res['types'] = $this->types;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListComputeMetricsByInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['endDate'])) {
            $model->endDate = $map['endDate'];
        }
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }
        if (isset($map['jobOwner'])) {
            $model->jobOwner = $map['jobOwner'];
        }
        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['projectNames'])) {
            if (!empty($map['projectNames'])) {
                $model->projectNames = $map['projectNames'];
            }
        }
        if (isset($map['region'])) {
            $model->region = $map['region'];
        }
        if (isset($map['signature'])) {
            $model->signature = $map['signature'];
        }
        if (isset($map['specCodes'])) {
            if (!empty($map['specCodes'])) {
                $model->specCodes = $map['specCodes'];
            }
        }
        if (isset($map['startDate'])) {
            $model->startDate = $map['startDate'];
        }
        if (isset($map['types'])) {
            if (!empty($map['types'])) {
                $model->types = $map['types'];
            }
        }

        return $model;
    }
}
