<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\SDK\Cas\V20200407\Models\DescribeDeploymentJobStatusResponseBody\productWorkerCount;
use AlibabaCloud\Tea\Model;

class DescribeDeploymentJobStatusResponseBody extends Model
{
    /**
     * @description The total number of purchased resources.
     *
     * @example 500
     *
     * @var int
     */
    public $buyCount;

    /**
     * @description The number of certificates involved in the deployment task.
     *
     * @example 20
     *
     * @var int
     */
    public $certCount;

    /**
     * @description The number of resources consumed by worker tasks.
     *
     * @example 20
     *
     * @var int
     */
    public $costCount;

    /**
     * @description The number of failed worker tasks, excluding rollback tasks.
     *
     * @example 20
     *
     * @var int
     */
    public $failedCount;

    /**
     * @description The total number of worker tasks that match the certificate.
     *
     * @example 20
     *
     * @var int
     */
    public $matchWorkerCount;

    /**
     * @description The number of cloud resources to which certificates are deployed in the deployment task.
     *
     * @var productWorkerCount[]
     */
    public $productWorkerCount;

    /**
     * @description The request ID.
     *
     * @example CBF1E9B7-D6A0-4E9E-AD3E-2B47E6C2837D
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of resources.
     *
     * @example 4127
     *
     * @var int
     */
    public $resourceCount;

    /**
     * @description The number of worker tasks that are rolled backed.
     *
     * @example 20
     *
     * @var int
     */
    public $rollbackCount;

    /**
     * @description The number of worker tasks that failed to be rolled back.
     *
     * @example 20
     *
     * @var int
     */
    public $rollbackFailedCount;

    /**
     * @description The number of worker tasks that are successfully rolled back.
     *
     * @example 20
     *
     * @var int
     */
    public $rollbackSuccessCount;

    /**
     * @description The number of successful worker tasks, excluding rollback tasks.
     *
     * @example 20
     *
     * @var int
     */
    public $successCount;

    /**
     * @description The total number of used resources.
     *
     * @example 300
     *
     * @var int
     */
    public $useCount;

    /**
     * @description The total number of resources to which certificate are deployed in the current cloud service. The value indicates the total number of worker tasks.
     *
     * @example 20
     *
     * @var int
     */
    public $workerCount;
    protected $_name = [
        'buyCount'             => 'BuyCount',
        'certCount'            => 'CertCount',
        'costCount'            => 'CostCount',
        'failedCount'          => 'FailedCount',
        'matchWorkerCount'     => 'MatchWorkerCount',
        'productWorkerCount'   => 'ProductWorkerCount',
        'requestId'            => 'RequestId',
        'resourceCount'        => 'ResourceCount',
        'rollbackCount'        => 'RollbackCount',
        'rollbackFailedCount'  => 'RollbackFailedCount',
        'rollbackSuccessCount' => 'RollbackSuccessCount',
        'successCount'         => 'SuccessCount',
        'useCount'             => 'UseCount',
        'workerCount'          => 'WorkerCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->buyCount) {
            $res['BuyCount'] = $this->buyCount;
        }
        if (null !== $this->certCount) {
            $res['CertCount'] = $this->certCount;
        }
        if (null !== $this->costCount) {
            $res['CostCount'] = $this->costCount;
        }
        if (null !== $this->failedCount) {
            $res['FailedCount'] = $this->failedCount;
        }
        if (null !== $this->matchWorkerCount) {
            $res['MatchWorkerCount'] = $this->matchWorkerCount;
        }
        if (null !== $this->productWorkerCount) {
            $res['ProductWorkerCount'] = [];
            if (null !== $this->productWorkerCount && \is_array($this->productWorkerCount)) {
                $n = 0;
                foreach ($this->productWorkerCount as $item) {
                    $res['ProductWorkerCount'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceCount) {
            $res['ResourceCount'] = $this->resourceCount;
        }
        if (null !== $this->rollbackCount) {
            $res['RollbackCount'] = $this->rollbackCount;
        }
        if (null !== $this->rollbackFailedCount) {
            $res['RollbackFailedCount'] = $this->rollbackFailedCount;
        }
        if (null !== $this->rollbackSuccessCount) {
            $res['RollbackSuccessCount'] = $this->rollbackSuccessCount;
        }
        if (null !== $this->successCount) {
            $res['SuccessCount'] = $this->successCount;
        }
        if (null !== $this->useCount) {
            $res['UseCount'] = $this->useCount;
        }
        if (null !== $this->workerCount) {
            $res['WorkerCount'] = $this->workerCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDeploymentJobStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BuyCount'])) {
            $model->buyCount = $map['BuyCount'];
        }
        if (isset($map['CertCount'])) {
            $model->certCount = $map['CertCount'];
        }
        if (isset($map['CostCount'])) {
            $model->costCount = $map['CostCount'];
        }
        if (isset($map['FailedCount'])) {
            $model->failedCount = $map['FailedCount'];
        }
        if (isset($map['MatchWorkerCount'])) {
            $model->matchWorkerCount = $map['MatchWorkerCount'];
        }
        if (isset($map['ProductWorkerCount'])) {
            if (!empty($map['ProductWorkerCount'])) {
                $model->productWorkerCount = [];
                $n                         = 0;
                foreach ($map['ProductWorkerCount'] as $item) {
                    $model->productWorkerCount[$n++] = null !== $item ? productWorkerCount::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceCount'])) {
            $model->resourceCount = $map['ResourceCount'];
        }
        if (isset($map['RollbackCount'])) {
            $model->rollbackCount = $map['RollbackCount'];
        }
        if (isset($map['RollbackFailedCount'])) {
            $model->rollbackFailedCount = $map['RollbackFailedCount'];
        }
        if (isset($map['RollbackSuccessCount'])) {
            $model->rollbackSuccessCount = $map['RollbackSuccessCount'];
        }
        if (isset($map['SuccessCount'])) {
            $model->successCount = $map['SuccessCount'];
        }
        if (isset($map['UseCount'])) {
            $model->useCount = $map['UseCount'];
        }
        if (isset($map['WorkerCount'])) {
            $model->workerCount = $map['WorkerCount'];
        }

        return $model;
    }
}
