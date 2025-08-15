<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;

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
     * @var string
     */
    public $sourceVideosShrink;

    /**
     * @var int
     */
    public $splitInterval;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
