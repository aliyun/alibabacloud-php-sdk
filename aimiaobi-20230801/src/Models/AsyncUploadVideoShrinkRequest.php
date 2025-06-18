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
    public $sourceVideosShrink;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'anlysisPrompt' => 'AnlysisPrompt',
        'sourceVideosShrink' => 'SourceVideos',
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

        if (null !== $this->sourceVideosShrink) {
            $res['SourceVideos'] = $this->sourceVideosShrink;
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

        if (isset($map['SourceVideos'])) {
            $model->sourceVideosShrink = $map['SourceVideos'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
