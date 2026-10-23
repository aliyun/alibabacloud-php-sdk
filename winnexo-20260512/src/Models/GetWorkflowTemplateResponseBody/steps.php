<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\GetWorkflowTemplateResponseBody;

use AlibabaCloud\Dara\Model;

class steps extends Model
{
    /**
     * @var string
     */
    public $modelMode;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $ownerAgentName;

    /**
     * @var string
     */
    public $ownerType;

    /**
     * @var int
     */
    public $ownerUserId;

    /**
     * @var int[]
     */
    public $reviewerUserIds;

    /**
     * @var int
     */
    public $sortOrder;

    /**
     * @var string
     */
    public $specification;

    /**
     * @var mixed[][]
     */
    public $specificationJson;

    /**
     * @var string
     */
    public $stepId;
    protected $_name = [
        'modelMode' => 'modelMode',
        'name' => 'name',
        'ownerAgentName' => 'ownerAgentName',
        'ownerType' => 'ownerType',
        'ownerUserId' => 'ownerUserId',
        'reviewerUserIds' => 'reviewerUserIds',
        'sortOrder' => 'sortOrder',
        'specification' => 'specification',
        'specificationJson' => 'specificationJson',
        'stepId' => 'stepId',
    ];

    public function validate()
    {
        if (\is_array($this->reviewerUserIds)) {
            Model::validateArray($this->reviewerUserIds);
        }
        if (\is_array($this->specificationJson)) {
            Model::validateArray($this->specificationJson);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->modelMode) {
            $res['modelMode'] = $this->modelMode;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->ownerAgentName) {
            $res['ownerAgentName'] = $this->ownerAgentName;
        }

        if (null !== $this->ownerType) {
            $res['ownerType'] = $this->ownerType;
        }

        if (null !== $this->ownerUserId) {
            $res['ownerUserId'] = $this->ownerUserId;
        }

        if (null !== $this->reviewerUserIds) {
            if (\is_array($this->reviewerUserIds)) {
                $res['reviewerUserIds'] = [];
                $n1 = 0;
                foreach ($this->reviewerUserIds as $item1) {
                    $res['reviewerUserIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sortOrder) {
            $res['sortOrder'] = $this->sortOrder;
        }

        if (null !== $this->specification) {
            $res['specification'] = $this->specification;
        }

        if (null !== $this->specificationJson) {
            if (\is_array($this->specificationJson)) {
                $res['specificationJson'] = [];
                $n1 = 0;
                foreach ($this->specificationJson as $item1) {
                    if (\is_array($item1)) {
                        $res['specificationJson'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['specificationJson'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->stepId) {
            $res['stepId'] = $this->stepId;
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
        if (isset($map['modelMode'])) {
            $model->modelMode = $map['modelMode'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['ownerAgentName'])) {
            $model->ownerAgentName = $map['ownerAgentName'];
        }

        if (isset($map['ownerType'])) {
            $model->ownerType = $map['ownerType'];
        }

        if (isset($map['ownerUserId'])) {
            $model->ownerUserId = $map['ownerUserId'];
        }

        if (isset($map['reviewerUserIds'])) {
            if (!empty($map['reviewerUserIds'])) {
                $model->reviewerUserIds = [];
                $n1 = 0;
                foreach ($map['reviewerUserIds'] as $item1) {
                    $model->reviewerUserIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['sortOrder'])) {
            $model->sortOrder = $map['sortOrder'];
        }

        if (isset($map['specification'])) {
            $model->specification = $map['specification'];
        }

        if (isset($map['specificationJson'])) {
            if (!empty($map['specificationJson'])) {
                $model->specificationJson = [];
                $n1 = 0;
                foreach ($map['specificationJson'] as $item1) {
                    if (!empty($item1)) {
                        $model->specificationJson[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->specificationJson[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['stepId'])) {
            $model->stepId = $map['stepId'];
        }

        return $model;
    }
}
