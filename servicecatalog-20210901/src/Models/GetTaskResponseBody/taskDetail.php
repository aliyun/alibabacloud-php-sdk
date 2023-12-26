<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models\GetTaskResponseBody;

use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\GetTaskResponseBody\taskDetail\log;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\GetTaskResponseBody\taskDetail\outputs;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\GetTaskResponseBody\taskDetail\parameters;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\GetTaskResponseBody\taskDetail\taskTags;
use AlibabaCloud\Tea\Model;

class taskDetail extends Model
{
    /**
     * @description The time when the task was created.
     *
     * The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     * @example 2022-05-23T09:46:27Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The logs of the instance.
     *
     * @var log
     */
    public $log;

    /**
     * @description The output parameters of the template.
     *
     * @var outputs[]
     */
    public $outputs;

    /**
     * @description The parameters that are specified in the template.
     *
     * @var parameters[]
     */
    public $parameters;

    /**
     * @description The ID of the product portfolio.
     *
     * @example port-bp1yt7582g****
     *
     * @var string
     */
    public $portfolioId;

    /**
     * @description The ID of the product.
     *
     * @example prod-bp18r7q127****
     *
     * @var string
     */
    public $productId;

    /**
     * @description The name of the product.
     *
     * @example DEMO-Create an ECS instance
     *
     * @var string
     */
    public $productName;

    /**
     * @description The ID of the product version.
     *
     * @example pv-bp15e79d26****
     *
     * @var string
     */
    public $productVersionId;

    /**
     * @description The name of the product version.
     *
     * @example 1.0
     *
     * @var string
     */
    public $productVersionName;

    /**
     * @description The ID of the product instance.
     *
     * @example pp-bp1ddg1n2a****
     *
     * @var string
     */
    public $provisionedProductId;

    /**
     * @description The name of the product instance.
     *
     * @example DEMO-ECS instance
     *
     * @var string
     */
    public $provisionedProductName;

    /**
     * @description The state of the task. Valid values:
     *
     *   Succeeded: The task was successful.
     *   InProgress: The task was in progress.
     *   Failed: The task failed.
     *
     * @example Succeeded
     *
     * @var string
     */
    public $status;

    /**
     * @description The message that is returned for the status of the task.
     *
     * > This parameter is returned only when Failed is returned for the Status parameter.
     * @example Resource CREATE failed: terraform stack sc-146611588617****-pp-bp1ddg1n2a**** failure...
     *
     * @var string
     */
    public $statusMessage;

    /**
     * @description The ID of the task.
     *
     * @example task-bp1dmg242c****
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The custom tags.
     *
     * @var taskTags[]
     */
    public $taskTags;

    /**
     * @description The type of the task. Valid values:
     *
     *   LaunchProduct: a task that launches the product.
     *   UpdateProvisionedProduct: a task that updates the information about the product instance.
     *   TerminateProvisionedProduct: a task that terminates the product instance.
     *
     * @example LaunchProduct
     *
     * @var string
     */
    public $taskType;

    /**
     * @description The time when the task was last modified.
     *
     * The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     * @example 2022-05-23T09:47:29Z
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
        'taskTags'               => 'TaskTags',
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
        if (null !== $this->taskTags) {
            $res['TaskTags'] = [];
            if (null !== $this->taskTags && \is_array($this->taskTags)) {
                $n = 0;
                foreach ($this->taskTags as $item) {
                    $res['TaskTags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return taskDetail
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
        if (isset($map['TaskTags'])) {
            if (!empty($map['TaskTags'])) {
                $model->taskTags = [];
                $n               = 0;
                foreach ($map['TaskTags'] as $item) {
                    $model->taskTags[$n++] = null !== $item ? taskTags::fromMap($item) : $item;
                }
            }
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
