<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\ListTemplateScratchesResponseBody;

use AlibabaCloud\SDK\ROS\V20190910\Models\ListTemplateScratchesResponseBody\templateScratches\preferenceParameters;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListTemplateScratchesResponseBody\templateScratches\sourceResourceGroup;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListTemplateScratchesResponseBody\templateScratches\sourceResources;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListTemplateScratchesResponseBody\templateScratches\sourceTag;
use AlibabaCloud\Tea\Model;

class templateScratches extends Model
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
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $statusReason;

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
        'createTime'           => 'CreateTime',
        'description'          => 'Description',
        'failedCode'           => 'FailedCode',
        'logicalIdStrategy'    => 'LogicalIdStrategy',
        'preferenceParameters' => 'PreferenceParameters',
        'sourceResourceGroup'  => 'SourceResourceGroup',
        'sourceResources'      => 'SourceResources',
        'sourceTag'            => 'SourceTag',
        'status'               => 'Status',
        'statusReason'         => 'StatusReason',
        'templateScratchId'    => 'TemplateScratchId',
        'templateScratchType'  => 'TemplateScratchType',
        'updateTime'           => 'UpdateTime',
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
            $res['PreferenceParameters'] = [];
            if (null !== $this->preferenceParameters && \is_array($this->preferenceParameters)) {
                $n = 0;
                foreach ($this->preferenceParameters as $item) {
                    $res['PreferenceParameters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->sourceResourceGroup) {
            $res['SourceResourceGroup'] = null !== $this->sourceResourceGroup ? $this->sourceResourceGroup->toMap() : null;
        }
        if (null !== $this->sourceResources) {
            $res['SourceResources'] = [];
            if (null !== $this->sourceResources && \is_array($this->sourceResources)) {
                $n = 0;
                foreach ($this->sourceResources as $item) {
                    $res['SourceResources'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->sourceTag) {
            $res['SourceTag'] = null !== $this->sourceTag ? $this->sourceTag->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->statusReason) {
            $res['StatusReason'] = $this->statusReason;
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

    /**
     * @param array $map
     *
     * @return templateScratches
     */
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
                $n                           = 0;
                foreach ($map['PreferenceParameters'] as $item) {
                    $model->preferenceParameters[$n++] = null !== $item ? preferenceParameters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SourceResourceGroup'])) {
            $model->sourceResourceGroup = sourceResourceGroup::fromMap($map['SourceResourceGroup']);
        }
        if (isset($map['SourceResources'])) {
            if (!empty($map['SourceResources'])) {
                $model->sourceResources = [];
                $n                      = 0;
                foreach ($map['SourceResources'] as $item) {
                    $model->sourceResources[$n++] = null !== $item ? sourceResources::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SourceTag'])) {
            $model->sourceTag = sourceTag::fromMap($map['SourceTag']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StatusReason'])) {
            $model->statusReason = $map['StatusReason'];
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
