<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Tea\Model;

class RunTitleGenerationShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $deduplicatedTitlesShrink;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $referenceDataShrink;

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
        'deduplicatedTitlesShrink' => 'DeduplicatedTitles',
        'referenceDataShrink' => 'ReferenceData',
        'taskId' => 'TaskId',
        'titleCount' => 'TitleCount',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->deduplicatedTitlesShrink) {
            $res['DeduplicatedTitles'] = $this->deduplicatedTitlesShrink;
        }
        if (null !== $this->referenceDataShrink) {
            $res['ReferenceData'] = $this->referenceDataShrink;
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
     * @return RunTitleGenerationShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeduplicatedTitles'])) {
            $model->deduplicatedTitlesShrink = $map['DeduplicatedTitles'];
        }
        if (isset($map['ReferenceData'])) {
            $model->referenceDataShrink = $map['ReferenceData'];
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
