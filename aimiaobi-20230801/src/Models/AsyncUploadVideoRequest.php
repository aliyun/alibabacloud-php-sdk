<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\AsyncUploadVideoRequest\referenceVideo;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\AsyncUploadVideoRequest\sourceVideos;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\AsyncUploadVideoRequest\videoRoles;

class AsyncUploadVideoRequest extends Model
{
    /**
     * @var string
     */
    public $anlysisPrompt;

    /**
     * @var float
     */
    public $faceIdentitySimilarityMinScore;

    /**
     * @var referenceVideo
     */
    public $referenceVideo;

    /**
     * @var bool
     */
    public $removeSubtitle;

    /**
     * @var sourceVideos[]
     */
    public $sourceVideos;

    /**
     * @var int
     */
    public $splitInterval;

    /**
     * @var videoRoles[]
     */
    public $videoRoles;

    /**
     * @var int
     */
    public $videoShotFaceIdentityCount;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'anlysisPrompt' => 'AnlysisPrompt',
        'faceIdentitySimilarityMinScore' => 'FaceIdentitySimilarityMinScore',
        'referenceVideo' => 'ReferenceVideo',
        'removeSubtitle' => 'RemoveSubtitle',
        'sourceVideos' => 'SourceVideos',
        'splitInterval' => 'SplitInterval',
        'videoRoles' => 'VideoRoles',
        'videoShotFaceIdentityCount' => 'VideoShotFaceIdentityCount',
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
        if (\is_array($this->videoRoles)) {
            Model::validateArray($this->videoRoles);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->anlysisPrompt) {
            $res['AnlysisPrompt'] = $this->anlysisPrompt;
        }

        if (null !== $this->faceIdentitySimilarityMinScore) {
            $res['FaceIdentitySimilarityMinScore'] = $this->faceIdentitySimilarityMinScore;
        }

        if (null !== $this->referenceVideo) {
            $res['ReferenceVideo'] = null !== $this->referenceVideo ? $this->referenceVideo->toArray($noStream) : $this->referenceVideo;
        }

        if (null !== $this->removeSubtitle) {
            $res['RemoveSubtitle'] = $this->removeSubtitle;
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

        if (null !== $this->videoRoles) {
            if (\is_array($this->videoRoles)) {
                $res['VideoRoles'] = [];
                $n1 = 0;
                foreach ($this->videoRoles as $item1) {
                    $res['VideoRoles'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->videoShotFaceIdentityCount) {
            $res['VideoShotFaceIdentityCount'] = $this->videoShotFaceIdentityCount;
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

        if (isset($map['FaceIdentitySimilarityMinScore'])) {
            $model->faceIdentitySimilarityMinScore = $map['FaceIdentitySimilarityMinScore'];
        }

        if (isset($map['ReferenceVideo'])) {
            $model->referenceVideo = referenceVideo::fromMap($map['ReferenceVideo']);
        }

        if (isset($map['RemoveSubtitle'])) {
            $model->removeSubtitle = $map['RemoveSubtitle'];
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

        if (isset($map['VideoRoles'])) {
            if (!empty($map['VideoRoles'])) {
                $model->videoRoles = [];
                $n1 = 0;
                foreach ($map['VideoRoles'] as $item1) {
                    $model->videoRoles[$n1] = videoRoles::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['VideoShotFaceIdentityCount'])) {
            $model->videoShotFaceIdentityCount = $map['VideoShotFaceIdentityCount'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
