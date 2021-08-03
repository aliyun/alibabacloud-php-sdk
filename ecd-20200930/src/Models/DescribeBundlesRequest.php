<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DescribeBundlesRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

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
    public $bundleType;

    /**
     * @var string
     */
    public $desktopTypeFamily;

    /**
     * @var int
     */
    public $cpuCount;

    /**
     * @var int
     */
    public $memorySize;

    /**
     * @var float
     */
    public $gpuCount;

    /**
     * @var bool
     */
    public $checkStock;

    /**
     * @var bool
     */
    public $fromDesktopGroup;

    /**
     * @var string
     */
    public $protocolType;

    /**
     * @var string[]
     */
    public $bundleId;
    protected $_name = [
        'regionId'          => 'RegionId',
        'maxResults'        => 'MaxResults',
        'nextToken'         => 'NextToken',
        'bundleType'        => 'BundleType',
        'desktopTypeFamily' => 'DesktopTypeFamily',
        'cpuCount'          => 'CpuCount',
        'memorySize'        => 'MemorySize',
        'gpuCount'          => 'GpuCount',
        'checkStock'        => 'CheckStock',
        'fromDesktopGroup'  => 'FromDesktopGroup',
        'protocolType'      => 'ProtocolType',
        'bundleId'          => 'BundleId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->bundleType) {
            $res['BundleType'] = $this->bundleType;
        }
        if (null !== $this->desktopTypeFamily) {
            $res['DesktopTypeFamily'] = $this->desktopTypeFamily;
        }
        if (null !== $this->cpuCount) {
            $res['CpuCount'] = $this->cpuCount;
        }
        if (null !== $this->memorySize) {
            $res['MemorySize'] = $this->memorySize;
        }
        if (null !== $this->gpuCount) {
            $res['GpuCount'] = $this->gpuCount;
        }
        if (null !== $this->checkStock) {
            $res['CheckStock'] = $this->checkStock;
        }
        if (null !== $this->fromDesktopGroup) {
            $res['FromDesktopGroup'] = $this->fromDesktopGroup;
        }
        if (null !== $this->protocolType) {
            $res['ProtocolType'] = $this->protocolType;
        }
        if (null !== $this->bundleId) {
            $res['BundleId'] = $this->bundleId;
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['BundleType'])) {
            $model->bundleType = $map['BundleType'];
        }
        if (isset($map['DesktopTypeFamily'])) {
            $model->desktopTypeFamily = $map['DesktopTypeFamily'];
        }
        if (isset($map['CpuCount'])) {
            $model->cpuCount = $map['CpuCount'];
        }
        if (isset($map['MemorySize'])) {
            $model->memorySize = $map['MemorySize'];
        }
        if (isset($map['GpuCount'])) {
            $model->gpuCount = $map['GpuCount'];
        }
        if (isset($map['CheckStock'])) {
            $model->checkStock = $map['CheckStock'];
        }
        if (isset($map['FromDesktopGroup'])) {
            $model->fromDesktopGroup = $map['FromDesktopGroup'];
        }
        if (isset($map['ProtocolType'])) {
            $model->protocolType = $map['ProtocolType'];
        }
        if (isset($map['BundleId'])) {
            if (!empty($map['BundleId'])) {
                $model->bundleId = $map['BundleId'];
            }
        }

        return $model;
    }
}
