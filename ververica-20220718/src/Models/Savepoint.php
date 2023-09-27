<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

class Savepoint extends Model
{
    /**
     * @example 1659066711
     *
     * @var int
     */
    public $createdAt;

    /**
     * @example 1d716b22-6aad-4be2-85c2-50cfc757****
     *
     * @var string
     */
    public $deploymentId;

    /**
     * @var string
     */
    public $description;

    /**
     * @example 5af678c0-7db0-4650-94c2-d2604f0a****
     *
     * @var string
     */
    public $jobId;

    /**
     * @example 1659069473
     *
     * @var int
     */
    public $modifiedAt;

    /**
     * @example namespacetest
     *
     * @var string
     */
    public $namespace;

    /**
     * @example TRUE
     *
     * @var bool
     */
    public $nativeFormat;

    /**
     * @example 354dde66-a3ae-463e-967a-0b4107fd****
     *
     * @var string
     */
    public $savepointId;

    /**
     * @example https://oss/bucket/flink/flink-jobs/namespaces/vvp-team/deployments/5a19a71b-1c42-4f34-94fd-86cf60782c81/checkpoints/sp-3285
     *
     * @var string
     */
    public $savepointLocation;

    /**
     * @example USER_REQUEST
     *
     * @var string
     */
    public $savepointOrigin;

    /**
     * @var SavepointStatus
     */
    public $status;

    /**
     * @example TRUE
     *
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
