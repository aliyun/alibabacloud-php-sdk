<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreateFileCompressionTaskShrinkRequest extends Model
{
    /**
     * @example zip
     *
     * @var string
     */
    public $compressedFormat;

    /**
     * @var string
     */
    public $credentialConfigShrink;

    /**
     * @var string
     */
    public $notificationShrink;

    /**
     * @description This parameter is required.
     *
     * @example immtest
     *
     * @var string
     */
    public $projectName;

    /**
     * @example oss://test-bucket/test-object.json
     *
     * @var string
     */
    public $sourceManifestURI;

    /**
     * @var string
     */
    public $sourcesShrink;

    /**
     * @description This parameter is required.
     *
     * @example oss://test-bucket/test-target-object.zip
     *
     * @var string
     */
    public $targetURI;

    /**
     * @example {"ID": "testuid","Name": "test-user","Avatar": "http://test.com/testuid"}
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'compressedFormat'       => 'CompressedFormat',
        'credentialConfigShrink' => 'CredentialConfig',
        'notificationShrink'     => 'Notification',
        'projectName'            => 'ProjectName',
        'sourceManifestURI'      => 'SourceManifestURI',
        'sourcesShrink'          => 'Sources',
        'targetURI'              => 'TargetURI',
        'userData'               => 'UserData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->compressedFormat) {
            $res['CompressedFormat'] = $this->compressedFormat;
        }
        if (null !== $this->credentialConfigShrink) {
            $res['CredentialConfig'] = $this->credentialConfigShrink;
        }
        if (null !== $this->notificationShrink) {
            $res['Notification'] = $this->notificationShrink;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->sourceManifestURI) {
            $res['SourceManifestURI'] = $this->sourceManifestURI;
        }
        if (null !== $this->sourcesShrink) {
            $res['Sources'] = $this->sourcesShrink;
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
     * @return CreateFileCompressionTaskShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CompressedFormat'])) {
            $model->compressedFormat = $map['CompressedFormat'];
        }
        if (isset($map['CredentialConfig'])) {
            $model->credentialConfigShrink = $map['CredentialConfig'];
        }
        if (isset($map['Notification'])) {
            $model->notificationShrink = $map['Notification'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['SourceManifestURI'])) {
            $model->sourceManifestURI = $map['SourceManifestURI'];
        }
        if (isset($map['Sources'])) {
            $model->sourcesShrink = $map['Sources'];
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
