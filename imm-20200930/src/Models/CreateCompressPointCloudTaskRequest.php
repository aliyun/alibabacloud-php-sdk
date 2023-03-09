<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreateCompressPointCloudTaskRequest extends Model
{
    /**
     * @example octree
     *
     * @var string
     */
    public $compressMethod;

    /**
     * @var CredentialConfig
     */
    public $credentialConfig;

    /**
     * @var KdtreeOption
     */
    public $kdtreeOption;

    /**
     * @var Notification
     */
    public $notification;

    /**
     * @example imm-regression-test-1
     *
     * @var string
     */
    public $notifyTopicName;

    /**
     * @var OctreeOption
     */
    public $octreeOption;

    /**
     * @var string[]
     */
    public $pointCloudFields;

    /**
     * @example pcd
     *
     * @var string
     */
    public $pointCloudFileFormat;

    /**
     * @example test-project
     *
     * @var string
     */
    public $projectName;

    /**
     * @example oss://test/src/test.pcd
     *
     * @var string
     */
    public $sourceURI;

    /**
     * @example {"LabelKey": "Value"}
     *
     * @var mixed[]
     */
    public $tags;

    /**
     * @example oss://test/tgt
     *
     * @var string
     */
    public $targetURI;

    /**
     * @example {"ID": "user1","Name": "test-user1","Avatar": "http://example.com?id=user1"}
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'compressMethod'       => 'CompressMethod',
        'credentialConfig'     => 'CredentialConfig',
        'kdtreeOption'         => 'KdtreeOption',
        'notification'         => 'Notification',
        'notifyTopicName'      => 'NotifyTopicName',
        'octreeOption'         => 'OctreeOption',
        'pointCloudFields'     => 'PointCloudFields',
        'pointCloudFileFormat' => 'PointCloudFileFormat',
        'projectName'          => 'ProjectName',
        'sourceURI'            => 'SourceURI',
        'tags'                 => 'Tags',
        'targetURI'            => 'TargetURI',
        'userData'             => 'UserData',
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
        if (null !== $this->credentialConfig) {
            $res['CredentialConfig'] = null !== $this->credentialConfig ? $this->credentialConfig->toMap() : null;
        }
        if (null !== $this->kdtreeOption) {
            $res['KdtreeOption'] = null !== $this->kdtreeOption ? $this->kdtreeOption->toMap() : null;
        }
        if (null !== $this->notification) {
            $res['Notification'] = null !== $this->notification ? $this->notification->toMap() : null;
        }
        if (null !== $this->notifyTopicName) {
            $res['NotifyTopicName'] = $this->notifyTopicName;
        }
        if (null !== $this->octreeOption) {
            $res['OctreeOption'] = null !== $this->octreeOption ? $this->octreeOption->toMap() : null;
        }
        if (null !== $this->pointCloudFields) {
            $res['PointCloudFields'] = $this->pointCloudFields;
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
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
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
     * @return CreateCompressPointCloudTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CompressMethod'])) {
            $model->compressMethod = $map['CompressMethod'];
        }
        if (isset($map['CredentialConfig'])) {
            $model->credentialConfig = CredentialConfig::fromMap($map['CredentialConfig']);
        }
        if (isset($map['KdtreeOption'])) {
            $model->kdtreeOption = KdtreeOption::fromMap($map['KdtreeOption']);
        }
        if (isset($map['Notification'])) {
            $model->notification = Notification::fromMap($map['Notification']);
        }
        if (isset($map['NotifyTopicName'])) {
            $model->notifyTopicName = $map['NotifyTopicName'];
        }
        if (isset($map['OctreeOption'])) {
            $model->octreeOption = OctreeOption::fromMap($map['OctreeOption']);
        }
        if (isset($map['PointCloudFields'])) {
            if (!empty($map['PointCloudFields'])) {
                $model->pointCloudFields = $map['PointCloudFields'];
            }
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
            $model->tags = $map['Tags'];
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
