<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\SDK\Imm\V20200930\Models\CreateFileCompressionTaskRequest\sources;
use AlibabaCloud\Tea\Model;

class CreateFileCompressionTaskRequest extends Model
{
    /**
     * @var string
     */
    public $compressedFormat;

    /**
     * @var CredentialConfig
     */
    public $credentialConfig;

    /**
     * @var string
     */
    public $notifyTopicName;

    /**
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $sourceManifestURI;

    /**
     * @var sources[]
     */
    public $sources;

    /**
     * @var string
     */
    public $targetURI;

    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'compressedFormat'  => 'CompressedFormat',
        'credentialConfig'  => 'CredentialConfig',
        'notifyTopicName'   => 'NotifyTopicName',
        'password'          => 'Password',
        'projectName'       => 'ProjectName',
        'sourceManifestURI' => 'SourceManifestURI',
        'sources'           => 'Sources',
        'targetURI'         => 'TargetURI',
        'userData'          => 'UserData',
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
        if (null !== $this->credentialConfig) {
            $res['CredentialConfig'] = null !== $this->credentialConfig ? $this->credentialConfig->toMap() : null;
        }
        if (null !== $this->notifyTopicName) {
            $res['NotifyTopicName'] = $this->notifyTopicName;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->sourceManifestURI) {
            $res['SourceManifestURI'] = $this->sourceManifestURI;
        }
        if (null !== $this->sources) {
            $res['Sources'] = [];
            if (null !== $this->sources && \is_array($this->sources)) {
                $n = 0;
                foreach ($this->sources as $item) {
                    $res['Sources'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return CreateFileCompressionTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CompressedFormat'])) {
            $model->compressedFormat = $map['CompressedFormat'];
        }
        if (isset($map['CredentialConfig'])) {
            $model->credentialConfig = CredentialConfig::fromMap($map['CredentialConfig']);
        }
        if (isset($map['NotifyTopicName'])) {
            $model->notifyTopicName = $map['NotifyTopicName'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['SourceManifestURI'])) {
            $model->sourceManifestURI = $map['SourceManifestURI'];
        }
        if (isset($map['Sources'])) {
            if (!empty($map['Sources'])) {
                $model->sources = [];
                $n              = 0;
                foreach ($map['Sources'] as $item) {
                    $model->sources[$n++] = null !== $item ? sources::fromMap($item) : $item;
                }
            }
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
