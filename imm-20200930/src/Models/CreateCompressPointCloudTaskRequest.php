<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class CreateCompressPointCloudTaskRequest extends Model
{
    /**
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
     * @var OctreeOption
     */
    public $octreeOption;

    /**
     * @var string[]
     */
    public $pointCloudFields;

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
     * @var mixed[]
     */
    public $tags;

    /**
     * @var string
     */
    public $targetURI;

    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'compressMethod' => 'CompressMethod',
        'credentialConfig' => 'CredentialConfig',
        'kdtreeOption' => 'KdtreeOption',
        'notification' => 'Notification',
        'octreeOption' => 'OctreeOption',
        'pointCloudFields' => 'PointCloudFields',
        'pointCloudFileFormat' => 'PointCloudFileFormat',
        'projectName' => 'ProjectName',
        'sourceURI' => 'SourceURI',
        'tags' => 'Tags',
        'targetURI' => 'TargetURI',
        'userData' => 'UserData',
    ];

    public function validate()
    {
        if (null !== $this->credentialConfig) {
            $this->credentialConfig->validate();
        }
        if (null !== $this->kdtreeOption) {
            $this->kdtreeOption->validate();
        }
        if (null !== $this->notification) {
            $this->notification->validate();
        }
        if (null !== $this->octreeOption) {
            $this->octreeOption->validate();
        }
        if (\is_array($this->pointCloudFields)) {
            Model::validateArray($this->pointCloudFields);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->compressMethod) {
            $res['CompressMethod'] = $this->compressMethod;
        }

        if (null !== $this->credentialConfig) {
            $res['CredentialConfig'] = null !== $this->credentialConfig ? $this->credentialConfig->toArray($noStream) : $this->credentialConfig;
        }

        if (null !== $this->kdtreeOption) {
            $res['KdtreeOption'] = null !== $this->kdtreeOption ? $this->kdtreeOption->toArray($noStream) : $this->kdtreeOption;
        }

        if (null !== $this->notification) {
            $res['Notification'] = null !== $this->notification ? $this->notification->toArray($noStream) : $this->notification;
        }

        if (null !== $this->octreeOption) {
            $res['OctreeOption'] = null !== $this->octreeOption ? $this->octreeOption->toArray($noStream) : $this->octreeOption;
        }

        if (null !== $this->pointCloudFields) {
            if (\is_array($this->pointCloudFields)) {
                $res['PointCloudFields'] = [];
                $n1 = 0;
                foreach ($this->pointCloudFields as $item1) {
                    $res['PointCloudFields'][$n1++] = $item1;
                }
            }
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
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                foreach ($this->tags as $key1 => $value1) {
                    $res['Tags'][$key1] = $value1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['OctreeOption'])) {
            $model->octreeOption = OctreeOption::fromMap($map['OctreeOption']);
        }

        if (isset($map['PointCloudFields'])) {
            if (!empty($map['PointCloudFields'])) {
                $model->pointCloudFields = [];
                $n1 = 0;
                foreach ($map['PointCloudFields'] as $item1) {
                    $model->pointCloudFields[$n1++] = $item1;
                }
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
            if (!empty($map['Tags'])) {
                $model->tags = [];
                foreach ($map['Tags'] as $key1 => $value1) {
                    $model->tags[$key1] = $value1;
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
