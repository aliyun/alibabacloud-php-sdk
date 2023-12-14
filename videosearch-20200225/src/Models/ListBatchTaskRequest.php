<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videosearch\V20200225\Models;

use AlibabaCloud\Tea\Model;

class ListBatchTaskRequest extends Model
{
    /**
     * @example 1
     *
     * @var string
     */
    public $batchTaskType;

    /**
     * @example testBucket
     *
     * @var string
     */
    public $bucketName;

    /**
     * @example C86D03D1-253E-4462-A4B1-195F945BCEEB
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example testPath
     *
     * @var string
     */
    public $dataPath;

    /**
     * @example vs-abcabc***abc
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 1
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'batchTaskType' => 'BatchTaskType',
        'bucketName'    => 'BucketName',
        'clientToken'   => 'ClientToken',
        'dataPath'      => 'DataPath',
        'instanceId'    => 'InstanceId',
        'pageNumber'    => 'PageNumber',
        'pageSize'      => 'PageSize',
        'status'        => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->batchTaskType) {
            $res['BatchTaskType'] = $this->batchTaskType;
        }
        if (null !== $this->bucketName) {
            $res['BucketName'] = $this->bucketName;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->dataPath) {
            $res['DataPath'] = $this->dataPath;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListBatchTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BatchTaskType'])) {
            $model->batchTaskType = $map['BatchTaskType'];
        }
        if (isset($map['BucketName'])) {
            $model->bucketName = $map['BucketName'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DataPath'])) {
            $model->dataPath = $map['DataPath'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
