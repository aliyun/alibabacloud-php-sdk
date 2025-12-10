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
     * @var float
     */
    public $faceIdentitySimilarityMinScore;

    /**
     * @var string
     */
    public $referenceVideoShrink;

    /**
     * @var bool
     */
    public $removeSubtitle;

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
    public $videoRolesShrink;

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
        'referenceVideoShrink' => 'ReferenceVideo',
        'removeSubtitle' => 'RemoveSubtitle',
        'sourceVideosShrink' => 'SourceVideos',
        'splitInterval' => 'SplitInterval',
        'videoRolesShrink' => 'VideoRoles',
        'videoShotFaceIdentityCount' => 'VideoShotFaceIdentityCount',
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

        if (null !== $this->faceIdentitySimilarityMinScore) {
            $res['FaceIdentitySimilarityMinScore'] = $this->faceIdentitySimilarityMinScore;
        }

        if (null !== $this->referenceVideoShrink) {
            $res['ReferenceVideo'] = $this->referenceVideoShrink;
        }

        if (null !== $this->removeSubtitle) {
            $res['RemoveSubtitle'] = $this->removeSubtitle;
        }

        if (null !== $this->sourceVideosShrink) {
            $res['SourceVideos'] = $this->sourceVideosShrink;
        }

        if (null !== $this->splitInterval) {
            $res['SplitInterval'] = $this->splitInterval;
        }

        if (null !== $this->videoRolesShrink) {
            $res['VideoRoles'] = $this->videoRolesShrink;
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
            $model->referenceVideoShrink = $map['ReferenceVideo'];
        }

        if (isset($map['RemoveSubtitle'])) {
            $model->removeSubtitle = $map['RemoveSubtitle'];
        }

        if (isset($map['SourceVideos'])) {
            $model->sourceVideosShrink = $map['SourceVideos'];
        }

        if (isset($map['SplitInterval'])) {
            $model->splitInterval = $map['SplitInterval'];
        }

        if (isset($map['VideoRoles'])) {
            $model->videoRolesShrink = $map['VideoRoles'];
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
