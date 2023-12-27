<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models;

use AlibabaCloud\SDK\Paidsw\V20220101\Models\GetInstanceSnapshotResponseBody\labels;
use AlibabaCloud\Tea\Model;

class GetInstanceSnapshotResponseBody extends Model
{
    /**
     * @example null
     *
     * @var string
     */
    public $code;

    /**
     * @var string[]
     */
    public $excludePaths;

    /**
     * @example 2021-01-12T14:36:01Z
     *
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @example 2021-01-12T14:36:01Z
     *
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @example null
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @example image-05cefd0be2exxxx
     *
     * @var string
     */
    public $imageId;

    /**
     * @example registry.cn-shanghai.aliyuncs.com/pai_product/tensorflow:py36_cpu_tf1.12_ubuntu
     *
     * @var string
     */
    public $imageUrl;

    /**
     * @example dsw-730xxxxxxxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example {\"foo\": \"bar\"}
     *
     * @var labels[]
     */
    public $labels;

    /**
     * @example "XXX"
     *
     * @var string
     */
    public $message;

    /**
     * @example Internal Error
     *
     * @var string
     */
    public $reasonCode;

    /**
     * @example ImagePullBackOff
     *
     * @var string
     */
    public $reasonMessage;

    /**
     * @example E7D55162-4489-1619-AAF5-3F97D5FCA948
     *
     * @var string
     */
    public $requestId;

    /**
     * @example snp-05cexxxxxxxxx
     *
     * @var string
     */
    public $snapshotId;

    /**
     * @example training_data_env
     *
     * @var string
     */
    public $snapshotName;

    /**
     * @example Pushing
     *
     * @var string
     */
    public $status;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'            => 'Code',
        'excludePaths'    => 'ExcludePaths',
        'gmtCreateTime'   => 'GmtCreateTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'httpStatusCode'  => 'HttpStatusCode',
        'imageId'         => 'ImageId',
        'imageUrl'        => 'ImageUrl',
        'instanceId'      => 'InstanceId',
        'labels'          => 'Labels',
        'message'         => 'Message',
        'reasonCode'      => 'ReasonCode',
        'reasonMessage'   => 'ReasonMessage',
        'requestId'       => 'RequestId',
        'snapshotId'      => 'SnapshotId',
        'snapshotName'    => 'SnapshotName',
        'status'          => 'Status',
        'success'         => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->excludePaths) {
            $res['ExcludePaths'] = $this->excludePaths;
        }
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }
        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->labels) {
            $res['Labels'] = [];
            if (null !== $this->labels && \is_array($this->labels)) {
                $n = 0;
                foreach ($this->labels as $item) {
                    $res['Labels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->reasonCode) {
            $res['ReasonCode'] = $this->reasonCode;
        }
        if (null !== $this->reasonMessage) {
            $res['ReasonMessage'] = $this->reasonMessage;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->snapshotId) {
            $res['SnapshotId'] = $this->snapshotId;
        }
        if (null !== $this->snapshotName) {
            $res['SnapshotName'] = $this->snapshotName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetInstanceSnapshotResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['ExcludePaths'])) {
            if (!empty($map['ExcludePaths'])) {
                $model->excludePaths = $map['ExcludePaths'];
            }
        }
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }
        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = [];
                $n             = 0;
                foreach ($map['Labels'] as $item) {
                    $model->labels[$n++] = null !== $item ? labels::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['ReasonCode'])) {
            $model->reasonCode = $map['ReasonCode'];
        }
        if (isset($map['ReasonMessage'])) {
            $model->reasonMessage = $map['ReasonMessage'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SnapshotId'])) {
            $model->snapshotId = $map['SnapshotId'];
        }
        if (isset($map['SnapshotName'])) {
            $model->snapshotName = $map['SnapshotName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
