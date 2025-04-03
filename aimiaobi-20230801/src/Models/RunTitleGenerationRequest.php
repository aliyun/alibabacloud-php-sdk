<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunTitleGenerationRequest\referenceData;

class RunTitleGenerationRequest extends Model
{
    /**
     * @var string[]
     */
    public $deduplicatedTitles;

    /**
     * @var referenceData
     */
    public $referenceData;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $titleCount;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'deduplicatedTitles' => 'DeduplicatedTitles',
        'referenceData' => 'ReferenceData',
        'taskId' => 'TaskId',
        'titleCount' => 'TitleCount',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->deduplicatedTitles)) {
            Model::validateArray($this->deduplicatedTitles);
        }
        if (null !== $this->referenceData) {
            $this->referenceData->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deduplicatedTitles) {
            if (\is_array($this->deduplicatedTitles)) {
                $res['DeduplicatedTitles'] = [];
                $n1 = 0;
                foreach ($this->deduplicatedTitles as $item1) {
                    $res['DeduplicatedTitles'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->referenceData) {
            $res['ReferenceData'] = null !== $this->referenceData ? $this->referenceData->toArray($noStream) : $this->referenceData;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->titleCount) {
            $res['TitleCount'] = $this->titleCount;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['DeduplicatedTitles'])) {
            if (!empty($map['DeduplicatedTitles'])) {
                $model->deduplicatedTitles = [];
                $n1 = 0;
                foreach ($map['DeduplicatedTitles'] as $item1) {
                    $model->deduplicatedTitles[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ReferenceData'])) {
            $model->referenceData = referenceData::fromMap($map['ReferenceData']);
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TitleCount'])) {
            $model->titleCount = $map['TitleCount'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
