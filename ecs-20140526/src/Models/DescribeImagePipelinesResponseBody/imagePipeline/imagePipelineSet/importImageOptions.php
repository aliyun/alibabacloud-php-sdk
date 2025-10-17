<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagePipelinesResponseBody\imagePipeline\imagePipelineSet;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagePipelinesResponseBody\imagePipeline\imagePipelineSet\importImageOptions\diskDeviceMappings;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagePipelinesResponseBody\imagePipeline\imagePipelineSet\importImageOptions\features;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagePipelinesResponseBody\imagePipeline\imagePipelineSet\importImageOptions\importImageTags;

class importImageOptions extends Model
{
    /**
     * @var string
     */
    public $architecture;

    /**
     * @var string
     */
    public $bootMode;

    /**
     * @var string
     */
    public $description;

    /**
     * @var diskDeviceMappings
     */
    public $diskDeviceMappings;

    /**
     * @var features
     */
    public $features;

    /**
     * @var string
     */
    public $imageName;

    /**
     * @var importImageTags
     */
    public $importImageTags;

    /**
     * @var string
     */
    public $licenseType;

    /**
     * @var string
     */
    public $OSType;

    /**
     * @var string
     */
    public $platform;

    /**
     * @var bool
     */
    public $retainImportedImage;

    /**
     * @var string
     */
    public $retentionStrategy;

    /**
     * @var string
     */
    public $roleName;
    protected $_name = [
        'architecture' => 'Architecture',
        'bootMode' => 'BootMode',
        'description' => 'Description',
        'diskDeviceMappings' => 'DiskDeviceMappings',
        'features' => 'Features',
        'imageName' => 'ImageName',
        'importImageTags' => 'ImportImageTags',
        'licenseType' => 'LicenseType',
        'OSType' => 'OSType',
        'platform' => 'Platform',
        'retainImportedImage' => 'RetainImportedImage',
        'retentionStrategy' => 'RetentionStrategy',
        'roleName' => 'RoleName',
    ];

    public function validate()
    {
        if (null !== $this->diskDeviceMappings) {
            $this->diskDeviceMappings->validate();
        }
        if (null !== $this->features) {
            $this->features->validate();
        }
        if (null !== $this->importImageTags) {
            $this->importImageTags->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->architecture) {
            $res['Architecture'] = $this->architecture;
        }

        if (null !== $this->bootMode) {
            $res['BootMode'] = $this->bootMode;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->diskDeviceMappings) {
            $res['DiskDeviceMappings'] = null !== $this->diskDeviceMappings ? $this->diskDeviceMappings->toArray($noStream) : $this->diskDeviceMappings;
        }

        if (null !== $this->features) {
            $res['Features'] = null !== $this->features ? $this->features->toArray($noStream) : $this->features;
        }

        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }

        if (null !== $this->importImageTags) {
            $res['ImportImageTags'] = null !== $this->importImageTags ? $this->importImageTags->toArray($noStream) : $this->importImageTags;
        }

        if (null !== $this->licenseType) {
            $res['LicenseType'] = $this->licenseType;
        }

        if (null !== $this->OSType) {
            $res['OSType'] = $this->OSType;
        }

        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }

        if (null !== $this->retainImportedImage) {
            $res['RetainImportedImage'] = $this->retainImportedImage;
        }

        if (null !== $this->retentionStrategy) {
            $res['RetentionStrategy'] = $this->retentionStrategy;
        }

        if (null !== $this->roleName) {
            $res['RoleName'] = $this->roleName;
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
        if (isset($map['Architecture'])) {
            $model->architecture = $map['Architecture'];
        }

        if (isset($map['BootMode'])) {
            $model->bootMode = $map['BootMode'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DiskDeviceMappings'])) {
            $model->diskDeviceMappings = diskDeviceMappings::fromMap($map['DiskDeviceMappings']);
        }

        if (isset($map['Features'])) {
            $model->features = features::fromMap($map['Features']);
        }

        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }

        if (isset($map['ImportImageTags'])) {
            $model->importImageTags = importImageTags::fromMap($map['ImportImageTags']);
        }

        if (isset($map['LicenseType'])) {
            $model->licenseType = $map['LicenseType'];
        }

        if (isset($map['OSType'])) {
            $model->OSType = $map['OSType'];
        }

        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }

        if (isset($map['RetainImportedImage'])) {
            $model->retainImportedImage = $map['RetainImportedImage'];
        }

        if (isset($map['RetentionStrategy'])) {
            $model->retentionStrategy = $map['RetentionStrategy'];
        }

        if (isset($map['RoleName'])) {
            $model->roleName = $map['RoleName'];
        }

        return $model;
    }
}
