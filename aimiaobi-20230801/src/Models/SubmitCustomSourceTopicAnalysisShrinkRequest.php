<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;

class SubmitCustomSourceTopicAnalysisShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $analysisTypesShrink;

    /**
     * @var string
     */
    public $fileType;

    /**
     * @var string
     */
    public $fileUrl;

    /**
     * @var int
     */
    public $maxTopicSize;

    /**
     * @var string
     */
    public $newsShrink;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'analysisTypesShrink' => 'AnalysisTypes',
        'fileType' => 'FileType',
        'fileUrl' => 'FileUrl',
        'maxTopicSize' => 'MaxTopicSize',
        'newsShrink' => 'News',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->analysisTypesShrink) {
            $res['AnalysisTypes'] = $this->analysisTypesShrink;
        }

        if (null !== $this->fileType) {
            $res['FileType'] = $this->fileType;
        }

        if (null !== $this->fileUrl) {
            $res['FileUrl'] = $this->fileUrl;
        }

        if (null !== $this->maxTopicSize) {
            $res['MaxTopicSize'] = $this->maxTopicSize;
        }

        if (null !== $this->newsShrink) {
            $res['News'] = $this->newsShrink;
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
        if (isset($map['AnalysisTypes'])) {
            $model->analysisTypesShrink = $map['AnalysisTypes'];
        }

        if (isset($map['FileType'])) {
            $model->fileType = $map['FileType'];
        }

        if (isset($map['FileUrl'])) {
            $model->fileUrl = $map['FileUrl'];
        }

        if (isset($map['MaxTopicSize'])) {
            $model->maxTopicSize = $map['MaxTopicSize'];
        }

        if (isset($map['News'])) {
            $model->newsShrink = $map['News'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
