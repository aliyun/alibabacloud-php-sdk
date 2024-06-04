<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models\ListInstanceSnapshotResponseBody;

use AlibabaCloud\SDK\Paidsw\V20220101\Models\ListInstanceSnapshotResponseBody\snapshots\labels;
use AlibabaCloud\Tea\Model;

class snapshots extends Model
{
    /**
     * @example ["/path1","/path2"]
     *
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
     * @example {\\"foo\\": \\"bar\\"}
     *
     * @var labels[]
     */
    public $labels;

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
    protected $_name = [
        'excludePaths'    => 'ExcludePaths',
        'gmtCreateTime'   => 'GmtCreateTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'imageId'         => 'ImageId',
        'imageUrl'        => 'ImageUrl',
        'instanceId'      => 'InstanceId',
        'labels'          => 'Labels',
        'reasonCode'      => 'ReasonCode',
        'reasonMessage'   => 'ReasonMessage',
        'snapshotId'      => 'SnapshotId',
        'snapshotName'    => 'SnapshotName',
        'status'          => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->excludePaths) {
            $res['ExcludePaths'] = $this->excludePaths;
        }
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }
        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
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
        if (null !== $this->reasonCode) {
            $res['ReasonCode'] = $this->reasonCode;
        }
        if (null !== $this->reasonMessage) {
            $res['ReasonMessage'] = $this->reasonMessage;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return snapshots
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['ReasonCode'])) {
            $model->reasonCode = $map['ReasonCode'];
        }
        if (isset($map['ReasonMessage'])) {
            $model->reasonMessage = $map['ReasonMessage'];
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

        return $model;
    }
}
