<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models;

use AlibabaCloud\Tea\Model;

class ListInstancesRequest extends Model
{
    /**
     * @example huadong
     *
     * @var string
     */
    public $districtId;

    /**
     * @var string[]
     */
    public $instanceId;

    /**
     * @example gcs.r1c1m1.1xlarge
     *
     * @var string
     */
    public $instanceType;

    /**
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example BEXZPF01W23U46598WVf
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example 4820372607851300489003
     *
     * @var string
     */
    public $projectId;

    /**
     * @example CREATING
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'districtId'   => 'DistrictId',
        'instanceId'   => 'InstanceId',
        'instanceType' => 'InstanceType',
        'maxResults'   => 'MaxResults',
        'nextToken'    => 'NextToken',
        'projectId'    => 'ProjectId',
        'status'       => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->districtId) {
            $res['DistrictId'] = $this->districtId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DistrictId'])) {
            $model->districtId = $map['DistrictId'];
        }
        if (isset($map['InstanceId'])) {
            if (!empty($map['InstanceId'])) {
                $model->instanceId = $map['InstanceId'];
            }
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
