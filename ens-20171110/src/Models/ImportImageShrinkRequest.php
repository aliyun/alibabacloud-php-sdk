<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;

class ImportImageShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $architecture;

    /**
     * @var string
     */
    public $computeType;

    /**
     * @var string
     */
    public $diskDeviceMappingShrink;

    /**
     * @var string
     */
    public $imageFormat;

    /**
     * @var string
     */
    public $imageName;

    /**
     * @var string
     */
    public $licenseType;

    /**
     * @var string
     */
    public $OSSBucket;

    /**
     * @var string
     */
    public $OSSObject;

    /**
     * @var string
     */
    public $OSSRegion;

    /**
     * @var string
     */
    public $OSType;

    /**
     * @var string
     */
    public $OSVersion;

    /**
     * @var string
     */
    public $platform;

    /**
     * @var string
     */
    public $targetOSSRegionId;
    protected $_name = [
        'architecture' => 'Architecture',
        'computeType' => 'ComputeType',
        'diskDeviceMappingShrink' => 'DiskDeviceMapping',
        'imageFormat' => 'ImageFormat',
        'imageName' => 'ImageName',
        'licenseType' => 'LicenseType',
        'OSSBucket' => 'OSSBucket',
        'OSSObject' => 'OSSObject',
        'OSSRegion' => 'OSSRegion',
        'OSType' => 'OSType',
        'OSVersion' => 'OSVersion',
        'platform' => 'Platform',
        'targetOSSRegionId' => 'TargetOSSRegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->architecture) {
            $res['Architecture'] = $this->architecture;
        }

        if (null !== $this->computeType) {
            $res['ComputeType'] = $this->computeType;
        }

        if (null !== $this->diskDeviceMappingShrink) {
            $res['DiskDeviceMapping'] = $this->diskDeviceMappingShrink;
        }

        if (null !== $this->imageFormat) {
            $res['ImageFormat'] = $this->imageFormat;
        }

        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }

        if (null !== $this->licenseType) {
            $res['LicenseType'] = $this->licenseType;
        }

        if (null !== $this->OSSBucket) {
            $res['OSSBucket'] = $this->OSSBucket;
        }

        if (null !== $this->OSSObject) {
            $res['OSSObject'] = $this->OSSObject;
        }

        if (null !== $this->OSSRegion) {
            $res['OSSRegion'] = $this->OSSRegion;
        }

        if (null !== $this->OSType) {
            $res['OSType'] = $this->OSType;
        }

        if (null !== $this->OSVersion) {
            $res['OSVersion'] = $this->OSVersion;
        }

        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }

        if (null !== $this->targetOSSRegionId) {
            $res['TargetOSSRegionId'] = $this->targetOSSRegionId;
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

        if (isset($map['ComputeType'])) {
            $model->computeType = $map['ComputeType'];
        }

        if (isset($map['DiskDeviceMapping'])) {
            $model->diskDeviceMappingShrink = $map['DiskDeviceMapping'];
        }

        if (isset($map['ImageFormat'])) {
            $model->imageFormat = $map['ImageFormat'];
        }

        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }

        if (isset($map['LicenseType'])) {
            $model->licenseType = $map['LicenseType'];
        }

        if (isset($map['OSSBucket'])) {
            $model->OSSBucket = $map['OSSBucket'];
        }

        if (isset($map['OSSObject'])) {
            $model->OSSObject = $map['OSSObject'];
        }

        if (isset($map['OSSRegion'])) {
            $model->OSSRegion = $map['OSSRegion'];
        }

        if (isset($map['OSType'])) {
            $model->OSType = $map['OSType'];
        }

        if (isset($map['OSVersion'])) {
            $model->OSVersion = $map['OSVersion'];
        }

        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }

        if (isset($map['TargetOSSRegionId'])) {
            $model->targetOSSRegionId = $map['TargetOSSRegionId'];
        }

        return $model;
    }
}
