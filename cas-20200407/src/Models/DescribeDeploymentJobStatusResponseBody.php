<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cas\V20200407\Models\DescribeDeploymentJobStatusResponseBody\productWorkerCount;

class DescribeDeploymentJobStatusResponseBody extends Model
{
    /**
     * @var int
     */
    public $buyCount;

    /**
     * @var int
     */
    public $certCount;

    /**
     * @var int
     */
    public $costCount;

    /**
     * @var int
     */
    public $failedCount;

    /**
     * @var int
     */
    public $matchWorkerCount;

    /**
     * @var productWorkerCount[]
     */
    public $productWorkerCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $resourceCount;

    /**
     * @var int
     */
    public $rollbackCount;

    /**
     * @var int
     */
    public $rollbackFailedCount;

    /**
     * @var int
     */
    public $rollbackSuccessCount;

    /**
     * @var int
     */
    public $successCount;

    /**
     * @var int
     */
    public $useCount;

    /**
     * @var int
     */
    public $workerCount;
    protected $_name = [
        'buyCount' => 'BuyCount',
        'certCount' => 'CertCount',
        'costCount' => 'CostCount',
        'failedCount' => 'FailedCount',
        'matchWorkerCount' => 'MatchWorkerCount',
        'productWorkerCount' => 'ProductWorkerCount',
        'requestId' => 'RequestId',
        'resourceCount' => 'ResourceCount',
        'rollbackCount' => 'RollbackCount',
        'rollbackFailedCount' => 'RollbackFailedCount',
        'rollbackSuccessCount' => 'RollbackSuccessCount',
        'successCount' => 'SuccessCount',
        'useCount' => 'UseCount',
        'workerCount' => 'WorkerCount',
    ];

    public function validate()
    {
        if (\is_array($this->productWorkerCount)) {
            Model::validateArray($this->productWorkerCount);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->productWorkerCount)) {
                $res['ProductWorkerCount'] = [];
                $n1 = 0;
                foreach ($this->productWorkerCount as $item1) {
                    $res['ProductWorkerCount'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['ProductWorkerCount'] as $item1) {
                    $model->productWorkerCount[$n1] = productWorkerCount::fromMap($item1);
                    ++$n1;
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
