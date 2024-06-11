<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Tea\Model;

class DescribeAndroidInstancesRequest extends Model
{
    /**
     * @var string[]
     */
    public $androidInstanceIds;

    /**
     * @example name
     *
     * @var string
     */
    public $androidInstanceName;

    /**
     * @example ag-25nt4kk9whjh****
     *
     * @var string
     */
    public $instanceGroupId;

    /**
     * @example kp-5hh431emkpuoi****
     *
     * @var string
     */
    public $keyPairId;

    /**
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example AAAAAV3MpHK1AP0pfERHZN5pu6kw9dGL5jves2FS9RLq****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example standard
     *
     * @var string
     */
    public $saleMode;

    /**
     * @example RUNNING
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'androidInstanceIds'  => 'AndroidInstanceIds',
        'androidInstanceName' => 'AndroidInstanceName',
        'instanceGroupId'     => 'InstanceGroupId',
        'keyPairId'           => 'KeyPairId',
        'maxResults'          => 'MaxResults',
        'nextToken'           => 'NextToken',
        'saleMode'            => 'SaleMode',
        'status'              => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->androidInstanceIds) {
            $res['AndroidInstanceIds'] = $this->androidInstanceIds;
        }
        if (null !== $this->androidInstanceName) {
            $res['AndroidInstanceName'] = $this->androidInstanceName;
        }
        if (null !== $this->instanceGroupId) {
            $res['InstanceGroupId'] = $this->instanceGroupId;
        }
        if (null !== $this->keyPairId) {
            $res['KeyPairId'] = $this->keyPairId;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->saleMode) {
            $res['SaleMode'] = $this->saleMode;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAndroidInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AndroidInstanceIds'])) {
            if (!empty($map['AndroidInstanceIds'])) {
                $model->androidInstanceIds = $map['AndroidInstanceIds'];
            }
        }
        if (isset($map['AndroidInstanceName'])) {
            $model->androidInstanceName = $map['AndroidInstanceName'];
        }
        if (isset($map['InstanceGroupId'])) {
            $model->instanceGroupId = $map['InstanceGroupId'];
        }
        if (isset($map['KeyPairId'])) {
            $model->keyPairId = $map['KeyPairId'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['SaleMode'])) {
            $model->saleMode = $map['SaleMode'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
