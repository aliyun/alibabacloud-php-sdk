<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class DescribeBundlesRequest extends Model
{
    /**
     * @var string[]
     */
    public $bundleId;

    /**
     * @var string
     */
    public $bundleType;

    /**
     * @var bool
     */
    public $checkStock;

    /**
     * @var int
     */
    public $cpuCount;

    /**
     * @var string
     */
    public $desktopTypeFamily;

    /**
     * @var string
     */
    public $fotaChannel;

    /**
     * @var bool
     */
    public $fromDesktopGroup;

    /**
     * @var float
     */
    public $gpuCount;

    /**
     * @var string
     */
    public $gpuDriverType;

    /**
     * @var string[]
     */
    public $imageId;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var int
     */
    public $memorySize;

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
    public $scope;

    /**
     * @var bool
     */
    public $selectedBundle;

    /**
     * @var string
     */
    public $sessionType;

    /**
     * @var bool
     */
    public $supportMultiSession;

    /**
     * @var bool
     */
    public $volumeEncryptionEnabled;
    protected $_name = [
        'bundleId' => 'BundleId',
        'bundleType' => 'BundleType',
        'checkStock' => 'CheckStock',
        'cpuCount' => 'CpuCount',
        'desktopTypeFamily' => 'DesktopTypeFamily',
        'fotaChannel' => 'FotaChannel',
        'fromDesktopGroup' => 'FromDesktopGroup',
        'gpuCount' => 'GpuCount',
        'gpuDriverType' => 'GpuDriverType',
        'imageId' => 'ImageId',
        'maxResults' => 'MaxResults',
        'memorySize' => 'MemorySize',
        'nextToken' => 'NextToken',
        'osType' => 'OsType',
        'protocolType' => 'ProtocolType',
        'regionId' => 'RegionId',
        'scope' => 'Scope',
        'selectedBundle' => 'SelectedBundle',
        'sessionType' => 'SessionType',
        'supportMultiSession' => 'SupportMultiSession',
        'volumeEncryptionEnabled' => 'VolumeEncryptionEnabled',
    ];

    public function validate()
    {
        if (\is_array($this->bundleId)) {
            Model::validateArray($this->bundleId);
        }
        if (\is_array($this->imageId)) {
            Model::validateArray($this->imageId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bundleId) {
            if (\is_array($this->bundleId)) {
                $res['BundleId'] = [];
                $n1 = 0;
                foreach ($this->bundleId as $item1) {
                    $res['BundleId'][$n1++] = $item1;
                }
            }
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

        if (null !== $this->gpuDriverType) {
            $res['GpuDriverType'] = $this->gpuDriverType;
        }

        if (null !== $this->imageId) {
            if (\is_array($this->imageId)) {
                $res['ImageId'] = [];
                $n1 = 0;
                foreach ($this->imageId as $item1) {
                    $res['ImageId'][$n1++] = $item1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BundleId'])) {
            if (!empty($map['BundleId'])) {
                $model->bundleId = [];
                $n1 = 0;
                foreach ($map['BundleId'] as $item1) {
                    $model->bundleId[$n1++] = $item1;
                }
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

        if (isset($map['GpuDriverType'])) {
            $model->gpuDriverType = $map['GpuDriverType'];
        }

        if (isset($map['ImageId'])) {
            if (!empty($map['ImageId'])) {
                $model->imageId = [];
                $n1 = 0;
                foreach ($map['ImageId'] as $item1) {
                    $model->imageId[$n1++] = $item1;
                }
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
