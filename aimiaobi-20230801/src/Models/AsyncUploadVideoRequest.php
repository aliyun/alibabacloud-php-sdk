<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\AsyncUploadVideoRequest\referenceVideo;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\AsyncUploadVideoRequest\sourceVideos;

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
     * @var sourceVideos[]
     */
    public $sourceVideos;

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
        'referenceVideo' => 'ReferenceVideo',
        'sourceVideos' => 'SourceVideos',
        'splitInterval' => 'SplitInterval',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        if (null !== $this->referenceVideo) {
            $this->referenceVideo->validate();
        }
        if (\is_array($this->sourceVideos)) {
            Model::validateArray($this->sourceVideos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->anlysisPrompt) {
            $res['AnlysisPrompt'] = $this->anlysisPrompt;
        }

        if (null !== $this->referenceVideo) {
            $res['ReferenceVideo'] = null !== $this->referenceVideo ? $this->referenceVideo->toArray($noStream) : $this->referenceVideo;
        }

        if (null !== $this->sourceVideos) {
            if (\is_array($this->sourceVideos)) {
                $res['SourceVideos'] = [];
                $n1 = 0;
                foreach ($this->sourceVideos as $item1) {
                    $res['SourceVideos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            $model->referenceVideo = referenceVideo::fromMap($map['ReferenceVideo']);
        }

        if (isset($map['SourceVideos'])) {
            if (!empty($map['SourceVideos'])) {
                $model->sourceVideos = [];
                $n1 = 0;
                foreach ($map['SourceVideos'] as $item1) {
                    $model->sourceVideos[$n1] = sourceVideos::fromMap($item1);
                    ++$n1;
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
