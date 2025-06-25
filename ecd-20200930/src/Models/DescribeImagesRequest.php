<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class DescribeImagesRequest extends Model
{
    /**
     * @var string
     */
    public $desktopInstanceType;

    /**
     * @var string
     */
    public $fotaVersion;

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
    public $imageName;

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

    /**
     * @var string
     */
    public $sessionType;
    protected $_name = [
        'desktopInstanceType' => 'DesktopInstanceType',
        'fotaVersion' => 'FotaVersion',
        'gpuCategory' => 'GpuCategory',
        'gpuDriverVersion' => 'GpuDriverVersion',
        'imageId' => 'ImageId',
        'imageName' => 'ImageName',
        'imageStatus' => 'ImageStatus',
        'imageType' => 'ImageType',
        'languageType' => 'LanguageType',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'osType' => 'OsType',
        'protocolType' => 'ProtocolType',
        'regionId' => 'RegionId',
        'sessionType' => 'SessionType',
    ];

    public function validate()
    {
        if (\is_array($this->imageId)) {
            Model::validateArray($this->imageId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->desktopInstanceType) {
            $res['DesktopInstanceType'] = $this->desktopInstanceType;
        }

        if (null !== $this->fotaVersion) {
            $res['FotaVersion'] = $this->fotaVersion;
        }

        if (null !== $this->gpuCategory) {
            $res['GpuCategory'] = $this->gpuCategory;
        }

        if (null !== $this->gpuDriverVersion) {
            $res['GpuDriverVersion'] = $this->gpuDriverVersion;
        }

        if (null !== $this->imageId) {
            if (\is_array($this->imageId)) {
                $res['ImageId'] = [];
                $n1 = 0;
                foreach ($this->imageId as $item1) {
                    $res['ImageId'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
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

        if (null !== $this->sessionType) {
            $res['SessionType'] = $this->sessionType;
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
        if (isset($map['DesktopInstanceType'])) {
            $model->desktopInstanceType = $map['DesktopInstanceType'];
        }

        if (isset($map['FotaVersion'])) {
            $model->fotaVersion = $map['FotaVersion'];
        }

        if (isset($map['GpuCategory'])) {
            $model->gpuCategory = $map['GpuCategory'];
        }

        if (isset($map['GpuDriverVersion'])) {
            $model->gpuDriverVersion = $map['GpuDriverVersion'];
        }

        if (isset($map['ImageId'])) {
            if (!empty($map['ImageId'])) {
                $model->imageId = [];
                $n1 = 0;
                foreach ($map['ImageId'] as $item1) {
                    $model->imageId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
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

        if (isset($map['SessionType'])) {
            $model->sessionType = $map['SessionType'];
        }

        return $model;
    }
}
