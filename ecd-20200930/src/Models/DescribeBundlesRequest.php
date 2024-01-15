<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DescribeBundlesRequest extends Model
{
    /**
     * @description The IDs of the desktop templates. You can specify 1 to 100 desktop templates.
     *
     * @example bundle_ecd_graphics.2xlarge_s15d15_win2019
     *
     * @var string[]
     */
    public $bundleId;

    /**
     * @description The type of the cloud desktop template. Valid values:
     *
     *   SYSTEM: the system template
     *   CUSTOM: the custom template
     *
     * @example SYSTEM
     *
     * @var string
     */
    public $bundleType;

    /**
     * @description Specifies whether to query the inventory status of the cloud desktop type.
     *
     * @example true
     *
     * @var bool
     */
    public $checkStock;

    /**
     * @description The number of vCPUs that is defined in the cloud desktop type.
     *
     * @example 2
     *
     * @var int
     */
    public $cpuCount;

    /**
     * @description The family of the cloud desktop type. Valid values:
     *
     *   eds.general: General Office
     *   eds.hf: High Frequency
     *   eds.graphics: Graphics
     *
     * @example eds.general
     *
     * @var string
     */
    public $desktopTypeFamily;

    /**
     * @description This parameter is now in invitational preview and unavailable.
     *
     * @example This parameter is now in invitational preview and unavailable.
     *
     * @var string
     */
    public $fotaChannel;

    /**
     * @description Specifies whether the cloud desktop template belongs to a desktop group. Default value: false.
     *
     * @example false
     *
     * @var bool
     */
    public $fromDesktopGroup;

    /**
     * @description The number of GPUs that is defined in the cloud desktop type.
     *
     * @example 1
     *
     * @var float
     */
    public $gpuCount;

    /**
     * @description The image ID.
     *
     * @var string[]
     */
    public $imageId;

    /**
     * @description The number of entries to return on each page.
     *
     * Default value: 10.
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The memory size that is defined in the cloud desktop type. Unit: GiB.
     *
     * @example 4
     *
     * @var int
     */
    public $memorySize;

    /**
     * @description The token that is used to start the next query.
     *
     * @example caeba0bbb2be03f84eb48b699f0a4883
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The OS. Valid values:
     *
     * **Windows**
     * **Linux**
     *
     * @example Windows
     *
     * @var string
     */
    public $osType;

    /**
     * @description The protocol type.
     *
     *   HDX
     *   ASP (Recommend)
     *
     * @example ASP
     *
     * @var string
     */
    public $protocolType;

    /**
     * @description The ID of the region. You can call the [DescribeRegions](~~436773~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The scenario to use the image.
     *
     * @example FastBuy
     *
     * @var string
     */
    public $scope;

    /**
     * @description The desktop template that is selected based on specific criteria.
     *
     * @example true
     *
     * @var bool
     */
    public $selectedBundle;

    /**
     * @description The type of the session.
     *
     * Enumeration Value:
     * **SingleSession**
     * **MultipleSession**
     *
     * @example SingleSession
     *
     * @var string
     */
    public $sessionType;

    /**
     * @description Specifies whether to return multi-session desktop templates in this call. Default value: false.
     *
     * @example false
     *
     * @var bool
     */
    public $supportMultiSession;

    /**
     * @description Specifies whether to enable disk encryption.
     *
     * @example false
     *
     * @var bool
     */
    public $volumeEncryptionEnabled;
    protected $_name = [
        'bundleId'                => 'BundleId',
        'bundleType'              => 'BundleType',
        'checkStock'              => 'CheckStock',
        'cpuCount'                => 'CpuCount',
        'desktopTypeFamily'       => 'DesktopTypeFamily',
        'fotaChannel'             => 'FotaChannel',
        'fromDesktopGroup'        => 'FromDesktopGroup',
        'gpuCount'                => 'GpuCount',
        'imageId'                 => 'ImageId',
        'maxResults'              => 'MaxResults',
        'memorySize'              => 'MemorySize',
        'nextToken'               => 'NextToken',
        'osType'                  => 'OsType',
        'protocolType'            => 'ProtocolType',
        'regionId'                => 'RegionId',
        'scope'                   => 'Scope',
        'selectedBundle'          => 'SelectedBundle',
        'sessionType'             => 'SessionType',
        'supportMultiSession'     => 'SupportMultiSession',
        'volumeEncryptionEnabled' => 'VolumeEncryptionEnabled',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bundleId) {
            $res['BundleId'] = $this->bundleId;
        }
        if (null !== $this->bundleType) {
            $res['BundleType'] = $this->bundleType;
        }
        if (null !== $this->checkStock) {
            $res['CheckStock'] = $this->checkStock;
        }
        if (null !== $this->cpuCount) {
            $res['CpuCount'] = $this->cpuCount;
        }
        if (null !== $this->desktopTypeFamily) {
            $res['DesktopTypeFamily'] = $this->desktopTypeFamily;
        }
        if (null !== $this->fotaChannel) {
            $res['FotaChannel'] = $this->fotaChannel;
        }
        if (null !== $this->fromDesktopGroup) {
            $res['FromDesktopGroup'] = $this->fromDesktopGroup;
        }
        if (null !== $this->gpuCount) {
            $res['GpuCount'] = $this->gpuCount;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->memorySize) {
            $res['MemorySize'] = $this->memorySize;
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
        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }
        if (null !== $this->selectedBundle) {
            $res['SelectedBundle'] = $this->selectedBundle;
        }
        if (null !== $this->sessionType) {
            $res['SessionType'] = $this->sessionType;
        }
        if (null !== $this->supportMultiSession) {
            $res['SupportMultiSession'] = $this->supportMultiSession;
        }
        if (null !== $this->volumeEncryptionEnabled) {
            $res['VolumeEncryptionEnabled'] = $this->volumeEncryptionEnabled;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBundlesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BundleId'])) {
            if (!empty($map['BundleId'])) {
                $model->bundleId = $map['BundleId'];
            }
        }
        if (isset($map['BundleType'])) {
            $model->bundleType = $map['BundleType'];
        }
        if (isset($map['CheckStock'])) {
            $model->checkStock = $map['CheckStock'];
        }
        if (isset($map['CpuCount'])) {
            $model->cpuCount = $map['CpuCount'];
        }
        if (isset($map['DesktopTypeFamily'])) {
            $model->desktopTypeFamily = $map['DesktopTypeFamily'];
        }
        if (isset($map['FotaChannel'])) {
            $model->fotaChannel = $map['FotaChannel'];
        }
        if (isset($map['FromDesktopGroup'])) {
            $model->fromDesktopGroup = $map['FromDesktopGroup'];
        }
        if (isset($map['GpuCount'])) {
            $model->gpuCount = $map['GpuCount'];
        }
        if (isset($map['ImageId'])) {
            if (!empty($map['ImageId'])) {
                $model->imageId = $map['ImageId'];
            }
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['MemorySize'])) {
            $model->memorySize = $map['MemorySize'];
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
        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }
        if (isset($map['SelectedBundle'])) {
            $model->selectedBundle = $map['SelectedBundle'];
        }
        if (isset($map['SessionType'])) {
            $model->sessionType = $map['SessionType'];
        }
        if (isset($map['SupportMultiSession'])) {
            $model->supportMultiSession = $map['SupportMultiSession'];
        }
        if (isset($map['VolumeEncryptionEnabled'])) {
            $model->volumeEncryptionEnabled = $map['VolumeEncryptionEnabled'];
        }

        return $model;
    }
}
