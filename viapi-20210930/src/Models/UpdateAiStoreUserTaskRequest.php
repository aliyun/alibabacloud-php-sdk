<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Viapi\V20210930\Models;

use AlibabaCloud\Tea\Model;

class UpdateAiStoreUserTaskRequest extends Model
{
    /**
     * @var string
     */
    public $product;

    /**
     * @var string
     */
    public $apiName;

    /**
     * @var string
     */
    public $bucketName;

    /**
     * @var string
     */
    public $bucketKeyPrefix;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $paramInfo;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $receiveConfig;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'product'         => 'Product',
        'apiName'         => 'ApiName',
        'bucketName'      => 'BucketName',
        'bucketKeyPrefix' => 'BucketKeyPrefix',
        'name'            => 'Name',
        'paramInfo'       => 'ParamInfo',
        'remark'          => 'Remark',
        'receiveConfig'   => 'ReceiveConfig',
        'status'          => 'Status',
        'id'              => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }
        if (null !== $this->apiName) {
            $res['ApiName'] = $this->apiName;
        }
        if (null !== $this->bucketName) {
            $res['BucketName'] = $this->bucketName;
        }
        if (null !== $this->bucketKeyPrefix) {
            $res['BucketKeyPrefix'] = $this->bucketKeyPrefix;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->paramInfo) {
            $res['ParamInfo'] = $this->paramInfo;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->receiveConfig) {
            $res['ReceiveConfig'] = $this->receiveConfig;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateAiStoreUserTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }
        if (isset($map['ApiName'])) {
            $model->apiName = $map['ApiName'];
        }
        if (isset($map['BucketName'])) {
            $model->bucketName = $map['BucketName'];
        }
        if (isset($map['BucketKeyPrefix'])) {
            $model->bucketKeyPrefix = $map['BucketKeyPrefix'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ParamInfo'])) {
            $model->paramInfo = $map['ParamInfo'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['ReceiveConfig'])) {
            $model->receiveConfig = $map['ReceiveConfig'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
