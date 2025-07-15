<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Tea\Model;

class SubmitCustomSourceTopicAnalysisShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $analysisTypesShrink;

    /**
     * @example json
     *
     * @var string
     */
    public $fileType;

    /**
     * @example http://www.example.com/xxx.json
     *
     * @var string
     */
    public $fileUrl;

    /**
     * @example 50
     *
     * @var int
     */
    public $maxTopicSize;

    /**
     * @var string
     */
    public $newsShrink;

    /**
     * @description This parameter is required.
     *
     * @example llm-xx
     *
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

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return SubmitCustomSourceTopicAnalysisShrinkRequest
     */
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
