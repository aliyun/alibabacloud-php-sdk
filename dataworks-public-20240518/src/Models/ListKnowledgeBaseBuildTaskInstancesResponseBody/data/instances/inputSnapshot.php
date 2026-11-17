<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListKnowledgeBaseBuildTaskInstancesResponseBody\data\instances;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListKnowledgeBaseBuildTaskInstancesResponseBody\data\instances\inputSnapshot\resolvedEntities;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListKnowledgeBaseBuildTaskInstancesResponseBody\data\instances\inputSnapshot\selectedInput;

class inputSnapshot extends Model
{
    /**
     * @var int
     */
    public $documentSourceCount;

    /**
     * @var string[]
     */
    public $filePaths;

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
        'filePaths' => 'FilePaths',
        'resolvedEntities' => 'ResolvedEntities',
        'resolvedEntityCount' => 'ResolvedEntityCount',
        'selectedInput' => 'SelectedInput',
    ];

    public function validate()
    {
        if (\is_array($this->filePaths)) {
            Model::validateArray($this->filePaths);
        }
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

        if (null !== $this->filePaths) {
            if (\is_array($this->filePaths)) {
                $res['FilePaths'] = [];
                $n1 = 0;
                foreach ($this->filePaths as $item1) {
                    $res['FilePaths'][$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['FilePaths'])) {
            if (!empty($map['FilePaths'])) {
                $model->filePaths = [];
                $n1 = 0;
                foreach ($map['FilePaths'] as $item1) {
                    $model->filePaths[$n1] = $item1;
                    ++$n1;
                }
            }
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
