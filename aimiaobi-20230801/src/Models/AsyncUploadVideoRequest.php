<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\AsyncUploadVideoRequest\referenceVideo;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\AsyncUploadVideoRequest\sourceVideos;
use AlibabaCloud\Tea\Model;

class AsyncUploadVideoRequest extends Model
{
    /**
     * @var string
     */
    public $anlysisPrompt;

    /**
     * @var referenceVideo
     */
    public $referenceVideo;

    /**
     * @description This parameter is required.
     *
     * @var sourceVideos[]
     */
    public $sourceVideos;

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
        'referenceVideo' => 'ReferenceVideo',
        'sourceVideos' => 'SourceVideos',
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
        if (null !== $this->referenceVideo) {
            $res['ReferenceVideo'] = null !== $this->referenceVideo ? $this->referenceVideo->toMap() : null;
        }
        if (null !== $this->sourceVideos) {
            $res['SourceVideos'] = [];
            if (null !== $this->sourceVideos && \is_array($this->sourceVideos)) {
                $n = 0;
                foreach ($this->sourceVideos as $item) {
                    $res['SourceVideos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return AsyncUploadVideoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AnlysisPrompt'])) {
            $model->anlysisPrompt = $map['AnlysisPrompt'];
        }
        if (isset($map['ReferenceVideo'])) {
            $model->referenceVideo = referenceVideo::fromMap($map['ReferenceVideo']);
        }
        if (isset($map['SourceVideos'])) {
            if (!empty($map['SourceVideos'])) {
                $model->sourceVideos = [];
                $n = 0;
                foreach ($map['SourceVideos'] as $item) {
                    $model->sourceVideos[$n++] = null !== $item ? sourceVideos::fromMap($item) : $item;
                }
            }
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
