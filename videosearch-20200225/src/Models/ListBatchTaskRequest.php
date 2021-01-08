<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videosearch\V20200225\Models;

use AlibabaCloud\Tea\Model;

class ListBatchTaskRequest extends Model
{
    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $batchTaskType;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $bucketName;

    /**
     * @var string
     */
    public $dataPath;
    protected $_name = [
        'pageNumber'    => 'PageNumber',
        'pageSize'      => 'PageSize',
        'clientToken'   => 'ClientToken',
        'batchTaskType' => 'BatchTaskType',
        'status'        => 'Status',
        'instanceId'    => 'InstanceId',
        'bucketName'    => 'BucketName',
        'dataPath'      => 'DataPath',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->batchTaskType) {
            $res['BatchTaskType'] = $this->batchTaskType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->bucketName) {
            $res['BucketName'] = $this->bucketName;
        }
        if (null !== $this->dataPath) {
            $res['DataPath'] = $this->dataPath;
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
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['BatchTaskType'])) {
            $model->batchTaskType = $map['BatchTaskType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['BucketName'])) {
            $model->bucketName = $map['BucketName'];
        }
        if (isset($map['DataPath'])) {
            $model->dataPath = $map['DataPath'];
        }

        return $model;
    }
}
