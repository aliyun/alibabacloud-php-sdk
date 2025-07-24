<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Tea\Model;

class AsyncUploadVideoShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $anlysisPrompt;

    /**
     * @var string
     */
    public $referenceVideoShrink;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $sourceVideosShrink;

    /**
     * @var int
     */
    public $splitInterval;

    /**
     * @description This parameter is required.
     *
     * @example llm-xxxx
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'anlysisPrompt' => 'AnlysisPrompt',
        'referenceVideoShrink' => 'ReferenceVideo',
        'sourceVideosShrink' => 'SourceVideos',
        'splitInterval' => 'SplitInterval',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->anlysisPrompt) {
            $res['AnlysisPrompt'] = $this->anlysisPrompt;
        }
        if (null !== $this->referenceVideoShrink) {
            $res['ReferenceVideo'] = $this->referenceVideoShrink;
        }
        if (null !== $this->sourceVideosShrink) {
            $res['SourceVideos'] = $this->sourceVideosShrink;
        }
        if (null !== $this->splitInterval) {
            $res['SplitInterval'] = $this->splitInterval;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AsyncUploadVideoShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AnlysisPrompt'])) {
            $model->anlysisPrompt = $map['AnlysisPrompt'];
        }
        if (isset($map['ReferenceVideo'])) {
            $model->referenceVideoShrink = $map['ReferenceVideo'];
        }
        if (isset($map['SourceVideos'])) {
            $model->sourceVideosShrink = $map['SourceVideos'];
        }
        if (isset($map['SplitInterval'])) {
            $model->splitInterval = $map['SplitInterval'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
