<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreateCompressPointCloudTaskShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $compressMethod;

    /**
     * @var string
     */
    public $credentialConfigShrink;

    /**
     * @var string
     */
    public $kdtreeOptionShrink;

    /**
     * @var string
     */
    public $notifyTopicName;

    /**
     * @var string
     */
    public $octreeOptionShrink;

    /**
     * @var string
     */
    public $pointCloudFieldsShrink;

    /**
     * @var string
     */
    public $pointCloudFileFormat;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $sourceURI;

    /**
     * @var string
     */
    public $tagsShrink;

    /**
     * @var string
     */
    public $targetURI;

    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'compressMethod'         => 'CompressMethod',
        'credentialConfigShrink' => 'CredentialConfig',
        'kdtreeOptionShrink'     => 'KdtreeOption',
        'notifyTopicName'        => 'NotifyTopicName',
        'octreeOptionShrink'     => 'OctreeOption',
        'pointCloudFieldsShrink' => 'PointCloudFields',
        'pointCloudFileFormat'   => 'PointCloudFileFormat',
        'projectName'            => 'ProjectName',
        'sourceURI'              => 'SourceURI',
        'tagsShrink'             => 'Tags',
        'targetURI'              => 'TargetURI',
        'userData'               => 'UserData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->compressMethod) {
            $res['CompressMethod'] = $this->compressMethod;
        }
        if (null !== $this->credentialConfigShrink) {
            $res['CredentialConfig'] = $this->credentialConfigShrink;
        }
        if (null !== $this->kdtreeOptionShrink) {
            $res['KdtreeOption'] = $this->kdtreeOptionShrink;
        }
        if (null !== $this->notifyTopicName) {
            $res['NotifyTopicName'] = $this->notifyTopicName;
        }
        if (null !== $this->octreeOptionShrink) {
            $res['OctreeOption'] = $this->octreeOptionShrink;
        }
        if (null !== $this->pointCloudFieldsShrink) {
            $res['PointCloudFields'] = $this->pointCloudFieldsShrink;
        }
        if (null !== $this->pointCloudFileFormat) {
            $res['PointCloudFileFormat'] = $this->pointCloudFileFormat;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->sourceURI) {
            $res['SourceURI'] = $this->sourceURI;
        }
        if (null !== $this->tagsShrink) {
            $res['Tags'] = $this->tagsShrink;
        }
        if (null !== $this->targetURI) {
            $res['TargetURI'] = $this->targetURI;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCompressPointCloudTaskShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CompressMethod'])) {
            $model->compressMethod = $map['CompressMethod'];
        }
        if (isset($map['CredentialConfig'])) {
            $model->credentialConfigShrink = $map['CredentialConfig'];
        }
        if (isset($map['KdtreeOption'])) {
            $model->kdtreeOptionShrink = $map['KdtreeOption'];
        }
        if (isset($map['NotifyTopicName'])) {
            $model->notifyTopicName = $map['NotifyTopicName'];
        }
        if (isset($map['OctreeOption'])) {
            $model->octreeOptionShrink = $map['OctreeOption'];
        }
        if (isset($map['PointCloudFields'])) {
            $model->pointCloudFieldsShrink = $map['PointCloudFields'];
        }
        if (isset($map['PointCloudFileFormat'])) {
            $model->pointCloudFileFormat = $map['PointCloudFileFormat'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['SourceURI'])) {
            $model->sourceURI = $map['SourceURI'];
        }
        if (isset($map['Tags'])) {
            $model->tagsShrink = $map['Tags'];
        }
        if (isset($map['TargetURI'])) {
            $model->targetURI = $map['TargetURI'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
