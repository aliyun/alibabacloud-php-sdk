<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CodeSec\V20260401\Models\DescribeScansResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CodeSec\V20260401\Models\DescribeScansResponseBody\items\engineSnapshot;
use AlibabaCloud\SDK\CodeSec\V20260401\Models\DescribeScansResponseBody\items\scanMetrics;

class items extends Model
{
    /**
     * @var int
     */
    public $codeBundleId;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $createdBy;

    /**
     * @var string
     */
    public $currentPhase;

    /**
     * @var engineSnapshot
     */
    public $engineSnapshot;

    /**
     * @var string
     */
    public $finishedAt;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $kind;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var scanMetrics
     */
    public $scanMetrics;

    /**
     * @var int
     */
    public $scanProgress;

    /**
     * @var string
     */
    public $startedAt;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var string
     */
    public $updatedAt;

    /**
     * @var string
     */
    public $workerId;
    protected $_name = [
        'codeBundleId' => 'codeBundleId',
        'createdAt' => 'createdAt',
        'createdBy' => 'createdBy',
        'currentPhase' => 'currentPhase',
        'engineSnapshot' => 'engineSnapshot',
        'finishedAt' => 'finishedAt',
        'id' => 'id',
        'kind' => 'kind',
        'projectId' => 'projectId',
        'scanMetrics' => 'scanMetrics',
        'scanProgress' => 'scanProgress',
        'startedAt' => 'startedAt',
        'status' => 'status',
        'taskName' => 'taskName',
        'updatedAt' => 'updatedAt',
        'workerId' => 'workerId',
    ];

    public function validate()
    {
        if (null !== $this->engineSnapshot) {
            $this->engineSnapshot->validate();
        }
        if (null !== $this->scanMetrics) {
            $this->scanMetrics->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->codeBundleId) {
            $res['codeBundleId'] = $this->codeBundleId;
        }

        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->createdBy) {
            $res['createdBy'] = $this->createdBy;
        }

        if (null !== $this->currentPhase) {
            $res['currentPhase'] = $this->currentPhase;
        }

        if (null !== $this->engineSnapshot) {
            $res['engineSnapshot'] = null !== $this->engineSnapshot ? $this->engineSnapshot->toArray($noStream) : $this->engineSnapshot;
        }

        if (null !== $this->finishedAt) {
            $res['finishedAt'] = $this->finishedAt;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->kind) {
            $res['kind'] = $this->kind;
        }

        if (null !== $this->projectId) {
            $res['projectId'] = $this->projectId;
        }

        if (null !== $this->scanMetrics) {
            $res['scanMetrics'] = null !== $this->scanMetrics ? $this->scanMetrics->toArray($noStream) : $this->scanMetrics;
        }

        if (null !== $this->scanProgress) {
            $res['scanProgress'] = $this->scanProgress;
        }

        if (null !== $this->startedAt) {
            $res['startedAt'] = $this->startedAt;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->taskName) {
            $res['taskName'] = $this->taskName;
        }

        if (null !== $this->updatedAt) {
            $res['updatedAt'] = $this->updatedAt;
        }

        if (null !== $this->workerId) {
            $res['workerId'] = $this->workerId;
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
        if (isset($map['codeBundleId'])) {
            $model->codeBundleId = $map['codeBundleId'];
        }

        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['createdBy'])) {
            $model->createdBy = $map['createdBy'];
        }

        if (isset($map['currentPhase'])) {
            $model->currentPhase = $map['currentPhase'];
        }

        if (isset($map['engineSnapshot'])) {
            $model->engineSnapshot = engineSnapshot::fromMap($map['engineSnapshot']);
        }

        if (isset($map['finishedAt'])) {
            $model->finishedAt = $map['finishedAt'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['kind'])) {
            $model->kind = $map['kind'];
        }

        if (isset($map['projectId'])) {
            $model->projectId = $map['projectId'];
        }

        if (isset($map['scanMetrics'])) {
            $model->scanMetrics = scanMetrics::fromMap($map['scanMetrics']);
        }

        if (isset($map['scanProgress'])) {
            $model->scanProgress = $map['scanProgress'];
        }

        if (isset($map['startedAt'])) {
            $model->startedAt = $map['startedAt'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['taskName'])) {
            $model->taskName = $map['taskName'];
        }

        if (isset($map['updatedAt'])) {
            $model->updatedAt = $map['updatedAt'];
        }

        if (isset($map['workerId'])) {
            $model->workerId = $map['workerId'];
        }

        return $model;
    }
}
