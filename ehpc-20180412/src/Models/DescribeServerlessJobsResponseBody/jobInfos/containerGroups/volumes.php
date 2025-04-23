<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeServerlessJobsResponseBody\jobInfos\containerGroups;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeServerlessJobsResponseBody\jobInfos\containerGroups\volumes\configFileVolumeConfigFileToPaths;

class volumes extends Model
{
    /**
     * @var configFileVolumeConfigFileToPaths[]
     */
    public $configFileVolumeConfigFileToPaths;

    /**
     * @var string
     */
    public $diskVolumeDiskId;

    /**
     * @var string
     */
    public $diskVolumeFsType;

    /**
     * @var string
     */
    public $emptyDirVolumeMedium;

    /**
     * @var string
     */
    public $emptyDirVolumeSizeLimit;

    /**
     * @var string
     */
    public $flexVolumeDriver;

    /**
     * @var string
     */
    public $flexVolumeFsType;

    /**
     * @var string
     */
    public $flexVolumeOptions;

    /**
     * @var string
     */
    public $NFSVolumePath;

    /**
     * @var bool
     */
    public $NFSVolumeReadOnly;

    /**
     * @var string
     */
    public $NFSVolumeServer;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'configFileVolumeConfigFileToPaths' => 'ConfigFileVolumeConfigFileToPaths',
        'diskVolumeDiskId' => 'DiskVolumeDiskId',
        'diskVolumeFsType' => 'DiskVolumeFsType',
        'emptyDirVolumeMedium' => 'EmptyDirVolumeMedium',
        'emptyDirVolumeSizeLimit' => 'EmptyDirVolumeSizeLimit',
        'flexVolumeDriver' => 'FlexVolumeDriver',
        'flexVolumeFsType' => 'FlexVolumeFsType',
        'flexVolumeOptions' => 'FlexVolumeOptions',
        'NFSVolumePath' => 'NFSVolumePath',
        'NFSVolumeReadOnly' => 'NFSVolumeReadOnly',
        'NFSVolumeServer' => 'NFSVolumeServer',
        'name' => 'Name',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->configFileVolumeConfigFileToPaths)) {
            Model::validateArray($this->configFileVolumeConfigFileToPaths);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configFileVolumeConfigFileToPaths) {
            if (\is_array($this->configFileVolumeConfigFileToPaths)) {
                $res['ConfigFileVolumeConfigFileToPaths'] = [];
                $n1 = 0;
                foreach ($this->configFileVolumeConfigFileToPaths as $item1) {
                    $res['ConfigFileVolumeConfigFileToPaths'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->diskVolumeDiskId) {
            $res['DiskVolumeDiskId'] = $this->diskVolumeDiskId;
        }

        if (null !== $this->diskVolumeFsType) {
            $res['DiskVolumeFsType'] = $this->diskVolumeFsType;
        }

        if (null !== $this->emptyDirVolumeMedium) {
            $res['EmptyDirVolumeMedium'] = $this->emptyDirVolumeMedium;
        }

        if (null !== $this->emptyDirVolumeSizeLimit) {
            $res['EmptyDirVolumeSizeLimit'] = $this->emptyDirVolumeSizeLimit;
        }

        if (null !== $this->flexVolumeDriver) {
            $res['FlexVolumeDriver'] = $this->flexVolumeDriver;
        }

        if (null !== $this->flexVolumeFsType) {
            $res['FlexVolumeFsType'] = $this->flexVolumeFsType;
        }

        if (null !== $this->flexVolumeOptions) {
            $res['FlexVolumeOptions'] = $this->flexVolumeOptions;
        }

        if (null !== $this->NFSVolumePath) {
            $res['NFSVolumePath'] = $this->NFSVolumePath;
        }

        if (null !== $this->NFSVolumeReadOnly) {
            $res['NFSVolumeReadOnly'] = $this->NFSVolumeReadOnly;
        }

        if (null !== $this->NFSVolumeServer) {
            $res['NFSVolumeServer'] = $this->NFSVolumeServer;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['ConfigFileVolumeConfigFileToPaths'])) {
            if (!empty($map['ConfigFileVolumeConfigFileToPaths'])) {
                $model->configFileVolumeConfigFileToPaths = [];
                $n1 = 0;
                foreach ($map['ConfigFileVolumeConfigFileToPaths'] as $item1) {
                    $model->configFileVolumeConfigFileToPaths[$n1++] = configFileVolumeConfigFileToPaths::fromMap($item1);
                }
            }
        }

        if (isset($map['DiskVolumeDiskId'])) {
            $model->diskVolumeDiskId = $map['DiskVolumeDiskId'];
        }

        if (isset($map['DiskVolumeFsType'])) {
            $model->diskVolumeFsType = $map['DiskVolumeFsType'];
        }

        if (isset($map['EmptyDirVolumeMedium'])) {
            $model->emptyDirVolumeMedium = $map['EmptyDirVolumeMedium'];
        }

        if (isset($map['EmptyDirVolumeSizeLimit'])) {
            $model->emptyDirVolumeSizeLimit = $map['EmptyDirVolumeSizeLimit'];
        }

        if (isset($map['FlexVolumeDriver'])) {
            $model->flexVolumeDriver = $map['FlexVolumeDriver'];
        }

        if (isset($map['FlexVolumeFsType'])) {
            $model->flexVolumeFsType = $map['FlexVolumeFsType'];
        }

        if (isset($map['FlexVolumeOptions'])) {
            $model->flexVolumeOptions = $map['FlexVolumeOptions'];
        }

        if (isset($map['NFSVolumePath'])) {
            $model->NFSVolumePath = $map['NFSVolumePath'];
        }

        if (isset($map['NFSVolumeReadOnly'])) {
            $model->NFSVolumeReadOnly = $map['NFSVolumeReadOnly'];
        }

        if (isset($map['NFSVolumeServer'])) {
            $model->NFSVolumeServer = $map['NFSVolumeServer'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
