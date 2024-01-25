<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Viapi\V20210930\Models;

use AlibabaCloud\Tea\Model;

class CreateAiStoreUserTaskRequest extends Model
{
    /**
     * @var string
     */
    public $apiName;

    /**
     * @var string
     */
    public $bucketKeyPrefix;

    /**
     * @var string
     */
    public $bucketName;

    /**
     * @var string
     */
    public $createConfig;

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
    public $product;

    /**
     * @var string
     */
    public $receiveConfig;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'apiName'         => 'ApiName',
        'bucketKeyPrefix' => 'BucketKeyPrefix',
        'bucketName'      => 'BucketName',
        'createConfig'    => 'CreateConfig',
        'name'            => 'Name',
        'paramInfo'       => 'ParamInfo',
        'product'         => 'Product',
        'receiveConfig'   => 'ReceiveConfig',
        'remark'          => 'Remark',
        'status'          => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiName) {
            $res['ApiName'] = $this->apiName;
        }
        if (null !== $this->bucketKeyPrefix) {
            $res['BucketKeyPrefix'] = $this->bucketKeyPrefix;
        }
        if (null !== $this->bucketName) {
            $res['BucketName'] = $this->bucketName;
        }
        if (null !== $this->createConfig) {
            $res['CreateConfig'] = $this->createConfig;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->paramInfo) {
            $res['ParamInfo'] = $this->paramInfo;
        }
        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }
        if (null !== $this->receiveConfig) {
            $res['ReceiveConfig'] = $this->receiveConfig;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAiStoreUserTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiName'])) {
            $model->apiName = $map['ApiName'];
        }
        if (isset($map['BucketKeyPrefix'])) {
            $model->bucketKeyPrefix = $map['BucketKeyPrefix'];
        }
        if (isset($map['BucketName'])) {
            $model->bucketName = $map['BucketName'];
        }
        if (isset($map['CreateConfig'])) {
            $model->createConfig = $map['CreateConfig'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ParamInfo'])) {
            $model->paramInfo = $map['ParamInfo'];
        }
        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }
        if (isset($map['ReceiveConfig'])) {
            $model->receiveConfig = $map['ReceiveConfig'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
