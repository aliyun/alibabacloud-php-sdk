<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunTitleGenerationRequest\referenceData;
use AlibabaCloud\Tea\Model;

class RunTitleGenerationRequest extends Model
{
    /**
     * @var string[]
     */
    public $deduplicatedTitles;

    /**
     * @description This parameter is required.
     *
     * @var referenceData
     */
    public $referenceData;

    /**
     * @example xxxx
     *
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $titleCount;

    /**
     * @description This parameter is required.
     *
     * @example llm-xxx
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->deduplicatedTitles) {
            $res['DeduplicatedTitles'] = $this->deduplicatedTitles;
        }
        if (null !== $this->referenceData) {
            $res['ReferenceData'] = null !== $this->referenceData ? $this->referenceData->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return RunTitleGenerationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeduplicatedTitles'])) {
            if (!empty($map['DeduplicatedTitles'])) {
                $model->deduplicatedTitles = $map['DeduplicatedTitles'];
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
