<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models\GetTaskResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\GetTaskResponseBody\taskDetail\log;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\GetTaskResponseBody\taskDetail\outputs;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\GetTaskResponseBody\taskDetail\parameters;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\GetTaskResponseBody\taskDetail\taskTags;

class taskDetail extends Model
{
    /**
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
     * @var string
     */
    public $portfolioId;

    /**
     * @var string
     */
    public $productId;

    /**
     * @var string
     */
    public $productName;

    /**
     * @var string
     */
    public $productVersionId;

    /**
     * @var string
     */
    public $productVersionName;

    /**
     * @var string
     */
    public $provisionedProductId;

    /**
     * @var string
     */
    public $provisionedProductName;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $statusMessage;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var taskTags[]
     */
    public $taskTags;

    /**
     * @var string
     */
    public $taskType;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'createTime' => 'CreateTime',
        'log' => 'Log',
        'outputs' => 'Outputs',
        'parameters' => 'Parameters',
        'portfolioId' => 'PortfolioId',
        'productId' => 'ProductId',
        'productName' => 'ProductName',
        'productVersionId' => 'ProductVersionId',
        'productVersionName' => 'ProductVersionName',
        'provisionedProductId' => 'ProvisionedProductId',
        'provisionedProductName' => 'ProvisionedProductName',
        'status' => 'Status',
        'statusMessage' => 'StatusMessage',
        'taskId' => 'TaskId',
        'taskTags' => 'TaskTags',
        'taskType' => 'TaskType',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        if (null !== $this->log) {
            $this->log->validate();
        }
        if (\is_array($this->outputs)) {
            Model::validateArray($this->outputs);
        }
        if (\is_array($this->parameters)) {
            Model::validateArray($this->parameters);
        }
        if (\is_array($this->taskTags)) {
            Model::validateArray($this->taskTags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->log) {
            $res['Log'] = null !== $this->log ? $this->log->toArray($noStream) : $this->log;
        }

        if (null !== $this->outputs) {
            if (\is_array($this->outputs)) {
                $res['Outputs'] = [];
                $n1 = 0;
                foreach ($this->outputs as $item1) {
                    $res['Outputs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->parameters) {
            if (\is_array($this->parameters)) {
                $res['Parameters'] = [];
                $n1 = 0;
                foreach ($this->parameters as $item1) {
                    $res['Parameters'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            if (\is_array($this->taskTags)) {
                $res['TaskTags'] = [];
                $n1 = 0;
                foreach ($this->taskTags as $item1) {
                    $res['TaskTags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['Outputs'] as $item1) {
                    $model->outputs[$n1] = outputs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Parameters'])) {
            if (!empty($map['Parameters'])) {
                $model->parameters = [];
                $n1 = 0;
                foreach ($map['Parameters'] as $item1) {
                    $model->parameters[$n1] = parameters::fromMap($item1);
                    ++$n1;
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
                $n1 = 0;
                foreach ($map['TaskTags'] as $item1) {
                    $model->taskTags[$n1] = taskTags::fromMap($item1);
                    ++$n1;
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
