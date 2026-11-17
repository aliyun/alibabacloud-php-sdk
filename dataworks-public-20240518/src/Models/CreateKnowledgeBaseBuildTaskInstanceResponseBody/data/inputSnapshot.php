<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateKnowledgeBaseBuildTaskInstanceResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateKnowledgeBaseBuildTaskInstanceResponseBody\data\inputSnapshot\resolvedEntities;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateKnowledgeBaseBuildTaskInstanceResponseBody\data\inputSnapshot\selectedInput;

class inputSnapshot extends Model
{
    /**
     * @var int
     */
    public $documentSourceCount;

    /**
     * @var resolvedEntities[]
     */
    public $resolvedEntities;

    /**
     * @var int
     */
    public $resolvedEntityCount;

    /**
     * @var selectedInput
     */
    public $selectedInput;
    protected $_name = [
        'documentSourceCount' => 'DocumentSourceCount',
        'resolvedEntities' => 'ResolvedEntities',
        'resolvedEntityCount' => 'ResolvedEntityCount',
        'selectedInput' => 'SelectedInput',
    ];

    public function validate()
    {
        if (\is_array($this->resolvedEntities)) {
            Model::validateArray($this->resolvedEntities);
        }
        if (null !== $this->selectedInput) {
            $this->selectedInput->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->documentSourceCount) {
            $res['DocumentSourceCount'] = $this->documentSourceCount;
        }

        if (null !== $this->resolvedEntities) {
            if (\is_array($this->resolvedEntities)) {
                $res['ResolvedEntities'] = [];
                $n1 = 0;
                foreach ($this->resolvedEntities as $item1) {
                    $res['ResolvedEntities'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->resolvedEntityCount) {
            $res['ResolvedEntityCount'] = $this->resolvedEntityCount;
        }

        if (null !== $this->selectedInput) {
            $res['SelectedInput'] = null !== $this->selectedInput ? $this->selectedInput->toArray($noStream) : $this->selectedInput;
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
        if (isset($map['DocumentSourceCount'])) {
            $model->documentSourceCount = $map['DocumentSourceCount'];
        }

        if (isset($map['ResolvedEntities'])) {
            if (!empty($map['ResolvedEntities'])) {
                $model->resolvedEntities = [];
                $n1 = 0;
                foreach ($map['ResolvedEntities'] as $item1) {
                    $model->resolvedEntities[$n1] = resolvedEntities::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ResolvedEntityCount'])) {
            $model->resolvedEntityCount = $map['ResolvedEntityCount'];
        }

        if (isset($map['SelectedInput'])) {
            $model->selectedInput = selectedInput::fromMap($map['SelectedInput']);
        }

        return $model;
    }
}
