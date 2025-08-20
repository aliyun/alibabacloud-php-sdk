<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GetTemplateScratchResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetTemplateScratchResponseBody\templateScratch\preferenceParameters;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetTemplateScratchResponseBody\templateScratch\sourceResourceGroup;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetTemplateScratchResponseBody\templateScratch\sourceResources;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetTemplateScratchResponseBody\templateScratch\sourceTag;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetTemplateScratchResponseBody\templateScratch\stackProvision;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetTemplateScratchResponseBody\templateScratch\stacks;

class templateScratch extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $failedCode;

    /**
     * @var string
     */
    public $logicalIdStrategy;

    /**
     * @var preferenceParameters[]
     */
    public $preferenceParameters;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var sourceResourceGroup
     */
    public $sourceResourceGroup;

    /**
     * @var sourceResources[]
     */
    public $sourceResources;

    /**
     * @var sourceTag
     */
    public $sourceTag;

    /**
     * @var stackProvision
     */
    public $stackProvision;

    /**
     * @var stacks[]
     */
    public $stacks;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $statusReason;

    /**
     * @var mixed[]
     */
    public $templateScratchData;

    /**
     * @var string
     */
    public $templateScratchId;

    /**
     * @var string
     */
    public $templateScratchType;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'failedCode' => 'FailedCode',
        'logicalIdStrategy' => 'LogicalIdStrategy',
        'preferenceParameters' => 'PreferenceParameters',
        'resourceGroupId' => 'ResourceGroupId',
        'sourceResourceGroup' => 'SourceResourceGroup',
        'sourceResources' => 'SourceResources',
        'sourceTag' => 'SourceTag',
        'stackProvision' => 'StackProvision',
        'stacks' => 'Stacks',
        'status' => 'Status',
        'statusReason' => 'StatusReason',
        'templateScratchData' => 'TemplateScratchData',
        'templateScratchId' => 'TemplateScratchId',
        'templateScratchType' => 'TemplateScratchType',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        if (\is_array($this->preferenceParameters)) {
            Model::validateArray($this->preferenceParameters);
        }
        if (null !== $this->sourceResourceGroup) {
            $this->sourceResourceGroup->validate();
        }
        if (\is_array($this->sourceResources)) {
            Model::validateArray($this->sourceResources);
        }
        if (null !== $this->sourceTag) {
            $this->sourceTag->validate();
        }
        if (null !== $this->stackProvision) {
            $this->stackProvision->validate();
        }
        if (\is_array($this->stacks)) {
            Model::validateArray($this->stacks);
        }
        if (\is_array($this->templateScratchData)) {
            Model::validateArray($this->templateScratchData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->failedCode) {
            $res['FailedCode'] = $this->failedCode;
        }

        if (null !== $this->logicalIdStrategy) {
            $res['LogicalIdStrategy'] = $this->logicalIdStrategy;
        }

        if (null !== $this->preferenceParameters) {
            if (\is_array($this->preferenceParameters)) {
                $res['PreferenceParameters'] = [];
                $n1 = 0;
                foreach ($this->preferenceParameters as $item1) {
                    $res['PreferenceParameters'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->sourceResourceGroup) {
            $res['SourceResourceGroup'] = null !== $this->sourceResourceGroup ? $this->sourceResourceGroup->toArray($noStream) : $this->sourceResourceGroup;
        }

        if (null !== $this->sourceResources) {
            if (\is_array($this->sourceResources)) {
                $res['SourceResources'] = [];
                $n1 = 0;
                foreach ($this->sourceResources as $item1) {
                    $res['SourceResources'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sourceTag) {
            $res['SourceTag'] = null !== $this->sourceTag ? $this->sourceTag->toArray($noStream) : $this->sourceTag;
        }

        if (null !== $this->stackProvision) {
            $res['StackProvision'] = null !== $this->stackProvision ? $this->stackProvision->toArray($noStream) : $this->stackProvision;
        }

        if (null !== $this->stacks) {
            if (\is_array($this->stacks)) {
                $res['Stacks'] = [];
                $n1 = 0;
                foreach ($this->stacks as $item1) {
                    $res['Stacks'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->statusReason) {
            $res['StatusReason'] = $this->statusReason;
        }

        if (null !== $this->templateScratchData) {
            if (\is_array($this->templateScratchData)) {
                $res['TemplateScratchData'] = [];
                foreach ($this->templateScratchData as $key1 => $value1) {
                    $res['TemplateScratchData'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->templateScratchId) {
            $res['TemplateScratchId'] = $this->templateScratchId;
        }

        if (null !== $this->templateScratchType) {
            $res['TemplateScratchType'] = $this->templateScratchType;
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

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['FailedCode'])) {
            $model->failedCode = $map['FailedCode'];
        }

        if (isset($map['LogicalIdStrategy'])) {
            $model->logicalIdStrategy = $map['LogicalIdStrategy'];
        }

        if (isset($map['PreferenceParameters'])) {
            if (!empty($map['PreferenceParameters'])) {
                $model->preferenceParameters = [];
                $n1 = 0;
                foreach ($map['PreferenceParameters'] as $item1) {
                    $model->preferenceParameters[$n1] = preferenceParameters::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['SourceResourceGroup'])) {
            $model->sourceResourceGroup = sourceResourceGroup::fromMap($map['SourceResourceGroup']);
        }

        if (isset($map['SourceResources'])) {
            if (!empty($map['SourceResources'])) {
                $model->sourceResources = [];
                $n1 = 0;
                foreach ($map['SourceResources'] as $item1) {
                    $model->sourceResources[$n1] = sourceResources::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SourceTag'])) {
            $model->sourceTag = sourceTag::fromMap($map['SourceTag']);
        }

        if (isset($map['StackProvision'])) {
            $model->stackProvision = stackProvision::fromMap($map['StackProvision']);
        }

        if (isset($map['Stacks'])) {
            if (!empty($map['Stacks'])) {
                $model->stacks = [];
                $n1 = 0;
                foreach ($map['Stacks'] as $item1) {
                    $model->stacks[$n1] = stacks::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['StatusReason'])) {
            $model->statusReason = $map['StatusReason'];
        }

        if (isset($map['TemplateScratchData'])) {
            if (!empty($map['TemplateScratchData'])) {
                $model->templateScratchData = [];
                foreach ($map['TemplateScratchData'] as $key1 => $value1) {
                    $model->templateScratchData[$key1] = $value1;
                }
            }
        }

        if (isset($map['TemplateScratchId'])) {
            $model->templateScratchId = $map['TemplateScratchId'];
        }

        if (isset($map['TemplateScratchType'])) {
            $model->templateScratchType = $map['TemplateScratchType'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
