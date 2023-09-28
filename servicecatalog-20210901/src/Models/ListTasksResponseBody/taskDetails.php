<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models\ListTasksResponseBody;

use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\ListTasksResponseBody\taskDetails\log;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\ListTasksResponseBody\taskDetails\outputs;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\ListTasksResponseBody\taskDetails\parameters;
use AlibabaCloud\Tea\Model;

class taskDetails extends Model
{
    /**
     * @example 2022-05-23T09:46:27Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @var log
     */
    public $log;

    /**
     * @var outputs[]
     */
    public $outputs;

    /**
     * @var parameters[]
     */
    public $parameters;

    /**
     * @example port-bp1yt7582g****
     *
     * @var string
     */
    public $portfolioId;

    /**
     * @example prod-bp18r7q127****
     *
     * @var string
     */
    public $productId;

    /**
     * @var string
     */
    public $productName;

    /**
     * @example pv-bp15e79d26****
     *
     * @var string
     */
    public $productVersionId;

    /**
     * @example 1.0
     *
     * @var string
     */
    public $productVersionName;

    /**
     * @example pp-bp1ddg1n2a****
     *
     * @var string
     */
    public $provisionedProductId;

    /**
     * @var string
     */
    public $provisionedProductName;

    /**
     * @example Succeeded
     *
     * @var string
     */
    public $status;

    /**
     * @example Resource CREATE failed: terraform stack sc-146611588617****-pp-bp1ddg1n2a**** failure...
     *
     * @var string
     */
    public $statusMessage;

    /**
     * @description 代表资源名称的资源属性字段
     *
     * @example task-bp1dmg242c****
     *
     * @var string
     */
    public $taskId;

    /**
     * @example LaunchProduct
     *
     * @var string
     */
    public $taskType;

    /**
     * @example 2022-05-26T03:28:45Z
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'createTime'             => 'CreateTime',
        'log'                    => 'Log',
        'outputs'                => 'Outputs',
        'parameters'             => 'Parameters',
        'portfolioId'            => 'PortfolioId',
        'productId'              => 'ProductId',
        'productName'            => 'ProductName',
        'productVersionId'       => 'ProductVersionId',
        'productVersionName'     => 'ProductVersionName',
        'provisionedProductId'   => 'ProvisionedProductId',
        'provisionedProductName' => 'ProvisionedProductName',
        'status'                 => 'Status',
        'statusMessage'          => 'StatusMessage',
        'taskId'                 => 'TaskId',
        'taskType'               => 'TaskType',
        'updateTime'             => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->log) {
            $res['Log'] = null !== $this->log ? $this->log->toMap() : null;
        }
        if (null !== $this->outputs) {
            $res['Outputs'] = [];
            if (null !== $this->outputs && \is_array($this->outputs)) {
                $n = 0;
                foreach ($this->outputs as $item) {
                    $res['Outputs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = [];
            if (null !== $this->parameters && \is_array($this->parameters)) {
                $n = 0;
                foreach ($this->parameters as $item) {
                    $res['Parameters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->portfolioId) {
            $res['PortfolioId'] = $this->portfolioId;
        }
        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }
        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }
        if (null !== $this->productVersionId) {
            $res['ProductVersionId'] = $this->productVersionId;
        }
        if (null !== $this->productVersionName) {
            $res['ProductVersionName'] = $this->productVersionName;
        }
        if (null !== $this->provisionedProductId) {
            $res['ProvisionedProductId'] = $this->provisionedProductId;
        }
        if (null !== $this->provisionedProductName) {
            $res['ProvisionedProductName'] = $this->provisionedProductName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->statusMessage) {
            $res['StatusMessage'] = $this->statusMessage;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taskDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Log'])) {
            $model->log = log::fromMap($map['Log']);
        }
        if (isset($map['Outputs'])) {
            if (!empty($map['Outputs'])) {
                $model->outputs = [];
                $n              = 0;
                foreach ($map['Outputs'] as $item) {
                    $model->outputs[$n++] = null !== $item ? outputs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Parameters'])) {
            if (!empty($map['Parameters'])) {
                $model->parameters = [];
                $n                 = 0;
                foreach ($map['Parameters'] as $item) {
                    $model->parameters[$n++] = null !== $item ? parameters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PortfolioId'])) {
            $model->portfolioId = $map['PortfolioId'];
        }
        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }
        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }
        if (isset($map['ProductVersionId'])) {
            $model->productVersionId = $map['ProductVersionId'];
        }
        if (isset($map['ProductVersionName'])) {
            $model->productVersionName = $map['ProductVersionName'];
        }
        if (isset($map['ProvisionedProductId'])) {
            $model->provisionedProductId = $map['ProvisionedProductId'];
        }
        if (isset($map['ProvisionedProductName'])) {
            $model->provisionedProductName = $map['ProvisionedProductName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StatusMessage'])) {
            $model->statusMessage = $map['StatusMessage'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
