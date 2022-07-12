<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

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
    public $protocolType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var bool
     */
    public $supportMultiSession;

    /**
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
        'maxResults'              => 'MaxResults',
        'memorySize'              => 'MemorySize',
        'nextToken'               => 'NextToken',
        'protocolType'            => 'ProtocolType',
        'regionId'                => 'RegionId',
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
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->memorySize) {
            $res['MemorySize'] = $this->memorySize;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->protocolType) {
            $res['ProtocolType'] = $this->protocolType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['MemorySize'])) {
            $model->memorySize = $map['MemorySize'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['ProtocolType'])) {
            $model->protocolType = $map['ProtocolType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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
