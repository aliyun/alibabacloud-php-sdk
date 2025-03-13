<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DescribeImagesRequest extends Model
{
    /**
     * @description The instance type of the cloud computer. You can call the [DescribeDesktopTypes](https://help.aliyun.com/document_detail/436816.html) operation to obtain the parameter value.
     *
     * @example ecd.graphics.xlarge
     *
     * @var string
     */
    public $desktopInstanceType;

    /**
     * @description The image version.
     *
     * @example 0.0.3-R-20220616.133609
     *
     * @var string
     */
    public $fotaVersion;

    /**
     * @description Specifies whether the images are GPU-accelerated images.
     *
     * Valid values:
     *
     *   true
     *
     * <!-- -->
     *
     *   false
     *
     * <!-- -->
     * @example false
     *
     * @var bool
     */
    public $gpuCategory;

    /**
     * @description The version of the GPU driver.
     *
     * @example 417.22
     *
     * @var string
     */
    public $gpuDriverVersion;

    /**
     * @description The IDs of the images. You can specify one or more image IDs.
     *
     * @example m-gx2x1dhsmusr2****
     *
     * @var string[]
     */
    public $imageId;

    /**
     * @description The image name.
     *
     * @example Win_01
     *
     * @var string
     */
    public $imageName;

    /**
     * @description The state of the image.
     *
     * @example Available
     *
     * @var string
     */
    public $imageStatus;

    /**
     * @description The type of the image.
     *
     * @example SYSTEM
     *
     * @var string
     */
    public $imageType;

    /**
     * @description The language of the OS.
     *
     * @example en-US
     *
     * @var string
     */
    public $languageType;

    /**
     * @description The maximum number of entries to return on each page.
     *
     *   Maximum value: 100.
     *   Default value: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The token that determines the start point of the next query. If you do not specify this parameter, all results are returned.
     *
     * @example caeba0bbb2be03f84eb48b699f0a4883
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The type of the operating system of the images. Default value: `null`.
     *
     * Valid values:
     *
     *   Linux
     *
     * <!-- -->
     *
     *   Windows
     *
     * <!-- -->
     * @example Windows
     *
     * @var string
     */
    public $osType;

    /**
     * @description The protocol type.
     *
     * Valid values:
     *
     *   HDX: High-definition Experience (HDX) protocol
     *   ASP: in-house Adaptive Streaming Protocol (ASP) (recommended)
     *
     * @example ASP
     *
     * @var string
     */
    public $protocolType;

    /**
     * @description The region ID. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/196646.html) operation to query the most recent region list.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The session type.
     *
     * @example SINGLE_SESSION
     *
     * @var string
     */
    public $sessionType;
    protected $_name = [
        'desktopInstanceType' => 'DesktopInstanceType',
        'fotaVersion'         => 'FotaVersion',
        'gpuCategory'         => 'GpuCategory',
        'gpuDriverVersion'    => 'GpuDriverVersion',
        'imageId'             => 'ImageId',
        'imageName'           => 'ImageName',
        'imageStatus'         => 'ImageStatus',
        'imageType'           => 'ImageType',
        'languageType'        => 'LanguageType',
        'maxResults'          => 'MaxResults',
        'nextToken'           => 'NextToken',
        'osType'              => 'OsType',
        'protocolType'        => 'ProtocolType',
        'regionId'            => 'RegionId',
        'sessionType'         => 'SessionType',
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
            $res['ImageId'] = $this->imageId;
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
                $model->imageId = $map['ImageId'];
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
