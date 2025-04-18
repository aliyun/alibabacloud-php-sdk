<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\GetInstanceSnapshotResponseBody\labels;

class GetInstanceSnapshotResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string[]
     */
    public $excludePaths;

    /**
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @var int
     */
    public $httpStatusCode;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var labels[]
     */
    public $labels;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $reasonCode;

    /**
     * @var string
     */
    public $reasonMessage;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $snapshotId;

    /**
     * @var string
     */
    public $snapshotName;

    /**
     * @var string
     */
    public $status;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'code' => 'Code',
        'excludePaths' => 'ExcludePaths',
        'gmtCreateTime' => 'GmtCreateTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'httpStatusCode' => 'HttpStatusCode',
        'imageId' => 'ImageId',
        'imageUrl' => 'ImageUrl',
        'instanceId' => 'InstanceId',
        'labels' => 'Labels',
        'message' => 'Message',
        'reasonCode' => 'ReasonCode',
        'reasonMessage' => 'ReasonMessage',
        'requestId' => 'RequestId',
        'snapshotId' => 'SnapshotId',
        'snapshotName' => 'SnapshotName',
        'status' => 'Status',
        'success' => 'Success',
    ];

    public function validate()
    {
        if (\is_array($this->excludePaths)) {
            Model::validateArray($this->excludePaths);
        }
        if (\is_array($this->labels)) {
            Model::validateArray($this->labels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->excludePaths) {
            if (\is_array($this->excludePaths)) {
                $res['ExcludePaths'] = [];
                $n1 = 0;
                foreach ($this->excludePaths as $item1) {
                    $res['ExcludePaths'][$n1++] = $item1;
                }
            }
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
            if (\is_array($this->labels)) {
                $res['Labels'] = [];
                $n1 = 0;
                foreach ($this->labels as $item1) {
                    $res['Labels'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['ExcludePaths'])) {
            if (!empty($map['ExcludePaths'])) {
                $model->excludePaths = [];
                $n1 = 0;
                foreach ($map['ExcludePaths'] as $item1) {
                    $model->excludePaths[$n1++] = $item1;
                }
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
                $n1 = 0;
                foreach ($map['Labels'] as $item1) {
                    $model->labels[$n1++] = labels::fromMap($item1);
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
