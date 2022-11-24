<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

class Savepoint extends Model
{
    /**
     * @var int
     */
    public $createdAt;

    /**
     * @var string
     */
    public $deploymentId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var int
     */
    public $modifiedAt;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var bool
     */
    public $nativeFormat;

    /**
     * @var string
     */
    public $savepointId;

    /**
     * @var string
     */
    public $savepointLocation;

    /**
     * @var string
     */
    public $savepointOrigin;

    /**
     * @var SavepointStatus
     */
    public $status;

    /**
     * @var bool
     */
    public $stopWithDrainEnabled;
    protected $_name = [
        'createdAt'            => 'createdAt',
        'deploymentId'         => 'deploymentId',
        'description'          => 'description',
        'jobId'                => 'jobId',
        'modifiedAt'           => 'modifiedAt',
        'namespace'            => 'namespace',
        'nativeFormat'         => 'nativeFormat',
        'savepointId'          => 'savepointId',
        'savepointLocation'    => 'savepointLocation',
        'savepointOrigin'      => 'savepointOrigin',
        'status'               => 'status',
        'stopWithDrainEnabled' => 'stopWithDrainEnabled',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }
        if (null !== $this->deploymentId) {
            $res['deploymentId'] = $this->deploymentId;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->jobId) {
            $res['jobId'] = $this->jobId;
        }
        if (null !== $this->modifiedAt) {
            $res['modifiedAt'] = $this->modifiedAt;
        }
        if (null !== $this->namespace) {
            $res['namespace'] = $this->namespace;
        }
        if (null !== $this->nativeFormat) {
            $res['nativeFormat'] = $this->nativeFormat;
        }
        if (null !== $this->savepointId) {
            $res['savepointId'] = $this->savepointId;
        }
        if (null !== $this->savepointLocation) {
            $res['savepointLocation'] = $this->savepointLocation;
        }
        if (null !== $this->savepointOrigin) {
            $res['savepointOrigin'] = $this->savepointOrigin;
        }
        if (null !== $this->status) {
            $res['status'] = null !== $this->status ? $this->status->toMap() : null;
        }
        if (null !== $this->stopWithDrainEnabled) {
            $res['stopWithDrainEnabled'] = $this->stopWithDrainEnabled;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Savepoint
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }
        if (isset($map['deploymentId'])) {
            $model->deploymentId = $map['deploymentId'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['jobId'])) {
            $model->jobId = $map['jobId'];
        }
        if (isset($map['modifiedAt'])) {
            $model->modifiedAt = $map['modifiedAt'];
        }
        if (isset($map['namespace'])) {
            $model->namespace = $map['namespace'];
        }
        if (isset($map['nativeFormat'])) {
            $model->nativeFormat = $map['nativeFormat'];
        }
        if (isset($map['savepointId'])) {
            $model->savepointId = $map['savepointId'];
        }
        if (isset($map['savepointLocation'])) {
            $model->savepointLocation = $map['savepointLocation'];
        }
        if (isset($map['savepointOrigin'])) {
            $model->savepointOrigin = $map['savepointOrigin'];
        }
        if (isset($map['status'])) {
            $model->status = SavepointStatus::fromMap($map['status']);
        }
        if (isset($map['stopWithDrainEnabled'])) {
            $model->stopWithDrainEnabled = $map['stopWithDrainEnabled'];
        }

        return $model;
    }
}
