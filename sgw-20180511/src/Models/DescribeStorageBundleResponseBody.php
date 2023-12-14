<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models;

use AlibabaCloud\Tea\Model;

class DescribeStorageBundleResponseBody extends Model
{
    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $backendBucketRegionId;

    /**
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @example 1657706998
     *
     * @var int
     */
    public $createdTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @example successful
     *
     * @var string
     */
    public $message;

    /**
     * @example sdfa***
     *
     * @var string
     */
    public $name;

    /**
     * @example 736C7733-FCED-4AFB-8407-C325F210CE03
     *
     * @var string
     */
    public $requestId;

    /**
     * @example sb-000dt67z4ijqfocpy***
     *
     * @var string
     */
    public $storageBundleId;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'backendBucketRegionId' => 'BackendBucketRegionId',
        'code'                  => 'Code',
        'createdTime'           => 'CreatedTime',
        'description'           => 'Description',
        'message'               => 'Message',
        'name'                  => 'Name',
        'requestId'             => 'RequestId',
        'storageBundleId'       => 'StorageBundleId',
        'success'               => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backendBucketRegionId) {
            $res['BackendBucketRegionId'] = $this->backendBucketRegionId;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->storageBundleId) {
            $res['StorageBundleId'] = $this->storageBundleId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeStorageBundleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackendBucketRegionId'])) {
            $model->backendBucketRegionId = $map['BackendBucketRegionId'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StorageBundleId'])) {
            $model->storageBundleId = $map['StorageBundleId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
