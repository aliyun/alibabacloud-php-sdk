<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DescribeImagesRequest extends Model
{
    /**
     * @var string
     */
    public $desktopInstanceType;

    /**
     * @var string
     */
    public $fotaChannel;

    /**
     * @var bool
     */
    public $gpuCategory;

    /**
     * @var string
     */
    public $gpuDriverVersion;

    /**
     * @var string[]
     */
    public $imageId;

    /**
     * @var string
     */
    public $imageStatus;

    /**
     * @var string
     */
    public $imageType;

    /**
     * @var string
     */
    public $languageType;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $osType;

    /**
     * @var string
     */
    public $protocolType;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'desktopInstanceType' => 'DesktopInstanceType',
        'fotaChannel'         => 'FotaChannel',
        'gpuCategory'         => 'GpuCategory',
        'gpuDriverVersion'    => 'GpuDriverVersion',
        'imageId'             => 'ImageId',
        'imageStatus'         => 'ImageStatus',
        'imageType'           => 'ImageType',
        'languageType'        => 'LanguageType',
        'maxResults'          => 'MaxResults',
        'nextToken'           => 'NextToken',
        'osType'              => 'OsType',
        'protocolType'        => 'ProtocolType',
        'regionId'            => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->desktopInstanceType) {
            $res['DesktopInstanceType'] = $this->desktopInstanceType;
        }
        if (null !== $this->fotaChannel) {
            $res['FotaChannel'] = $this->fotaChannel;
        }
        if (null !== $this->gpuCategory) {
            $res['GpuCategory'] = $this->gpuCategory;
        }
        if (null !== $this->gpuDriverVersion) {
            $res['GpuDriverVersion'] = $this->gpuDriverVersion;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->imageStatus) {
            $res['ImageStatus'] = $this->imageStatus;
        }
        if (null !== $this->imageType) {
            $res['ImageType'] = $this->imageType;
        }
        if (null !== $this->languageType) {
            $res['LanguageType'] = $this->languageType;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->osType) {
            $res['OsType'] = $this->osType;
        }
        if (null !== $this->protocolType) {
            $res['ProtocolType'] = $this->protocolType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeImagesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DesktopInstanceType'])) {
            $model->desktopInstanceType = $map['DesktopInstanceType'];
        }
        if (isset($map['FotaChannel'])) {
            $model->fotaChannel = $map['FotaChannel'];
        }
        if (isset($map['GpuCategory'])) {
            $model->gpuCategory = $map['GpuCategory'];
        }
        if (isset($map['GpuDriverVersion'])) {
            $model->gpuDriverVersion = $map['GpuDriverVersion'];
        }
        if (isset($map['ImageId'])) {
            if (!empty($map['ImageId'])) {
                $model->imageId = $map['ImageId'];
            }
        }
        if (isset($map['ImageStatus'])) {
            $model->imageStatus = $map['ImageStatus'];
        }
        if (isset($map['ImageType'])) {
            $model->imageType = $map['ImageType'];
        }
        if (isset($map['LanguageType'])) {
            $model->languageType = $map['LanguageType'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['OsType'])) {
            $model->osType = $map['OsType'];
        }
        if (isset($map['ProtocolType'])) {
            $model->protocolType = $map['ProtocolType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
