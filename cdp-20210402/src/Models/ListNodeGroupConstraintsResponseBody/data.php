<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdp\V20210402\Models\ListNodeGroupConstraintsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $hostGroupType;

    /**
     * @var string[]
     */
    public $recommendedInstanceTypes;

    /**
     * @var string[]
     */
    public $availableDataDiskCategories;

    /**
     * @var string[]
     */
    public $availableInstanceTypes;

    /**
     * @var string[]
     */
    public $availableSystemDiskCategories;

    /**
     * @var int
     */
    public $defaultDataDiskCount;

    /**
     * @var int
     */
    public $defaultDataDiskSize;

    /**
     * @var int
     */
    public $defaultNodeCount;

    /**
     * @var int
     */
    public $defaultSystemDiskSize;

    /**
     * @var int
     */
    public $maxDataDiskCount;

    /**
     * @var int
     */
    public $maxDataDiskSize;

    /**
     * @var int
     */
    public $maxNodeCount;

    /**
     * @var int
     */
    public $maxSystemDiskSize;

    /**
     * @var int
     */
    public $minDataDiskCount;

    /**
     * @var int
     */
    public $minDataDiskSize;

    /**
     * @var int
     */
    public $minNodeCount;

    /**
     * @var int
     */
    public $minSystemDiskSize;

    /**
     * @var string
     */
    public $nodeGroupName;
    protected $_name = [
        'hostGroupType'                 => 'HostGroupType',
        'recommendedInstanceTypes'      => 'RecommendedInstanceTypes',
        'availableDataDiskCategories'   => 'availableDataDiskCategories',
        'availableInstanceTypes'        => 'availableInstanceTypes',
        'availableSystemDiskCategories' => 'availableSystemDiskCategories',
        'defaultDataDiskCount'          => 'defaultDataDiskCount',
        'defaultDataDiskSize'           => 'defaultDataDiskSize',
        'defaultNodeCount'              => 'defaultNodeCount',
        'defaultSystemDiskSize'         => 'defaultSystemDiskSize',
        'maxDataDiskCount'              => 'maxDataDiskCount',
        'maxDataDiskSize'               => 'maxDataDiskSize',
        'maxNodeCount'                  => 'maxNodeCount',
        'maxSystemDiskSize'             => 'maxSystemDiskSize',
        'minDataDiskCount'              => 'minDataDiskCount',
        'minDataDiskSize'               => 'minDataDiskSize',
        'minNodeCount'                  => 'minNodeCount',
        'minSystemDiskSize'             => 'minSystemDiskSize',
        'nodeGroupName'                 => 'nodeGroupName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hostGroupType) {
            $res['HostGroupType'] = $this->hostGroupType;
        }
        if (null !== $this->recommendedInstanceTypes) {
            $res['RecommendedInstanceTypes'] = $this->recommendedInstanceTypes;
        }
        if (null !== $this->availableDataDiskCategories) {
            $res['availableDataDiskCategories'] = $this->availableDataDiskCategories;
        }
        if (null !== $this->availableInstanceTypes) {
            $res['availableInstanceTypes'] = $this->availableInstanceTypes;
        }
        if (null !== $this->availableSystemDiskCategories) {
            $res['availableSystemDiskCategories'] = $this->availableSystemDiskCategories;
        }
        if (null !== $this->defaultDataDiskCount) {
            $res['defaultDataDiskCount'] = $this->defaultDataDiskCount;
        }
        if (null !== $this->defaultDataDiskSize) {
            $res['defaultDataDiskSize'] = $this->defaultDataDiskSize;
        }
        if (null !== $this->defaultNodeCount) {
            $res['defaultNodeCount'] = $this->defaultNodeCount;
        }
        if (null !== $this->defaultSystemDiskSize) {
            $res['defaultSystemDiskSize'] = $this->defaultSystemDiskSize;
        }
        if (null !== $this->maxDataDiskCount) {
            $res['maxDataDiskCount'] = $this->maxDataDiskCount;
        }
        if (null !== $this->maxDataDiskSize) {
            $res['maxDataDiskSize'] = $this->maxDataDiskSize;
        }
        if (null !== $this->maxNodeCount) {
            $res['maxNodeCount'] = $this->maxNodeCount;
        }
        if (null !== $this->maxSystemDiskSize) {
            $res['maxSystemDiskSize'] = $this->maxSystemDiskSize;
        }
        if (null !== $this->minDataDiskCount) {
            $res['minDataDiskCount'] = $this->minDataDiskCount;
        }
        if (null !== $this->minDataDiskSize) {
            $res['minDataDiskSize'] = $this->minDataDiskSize;
        }
        if (null !== $this->minNodeCount) {
            $res['minNodeCount'] = $this->minNodeCount;
        }
        if (null !== $this->minSystemDiskSize) {
            $res['minSystemDiskSize'] = $this->minSystemDiskSize;
        }
        if (null !== $this->nodeGroupName) {
            $res['nodeGroupName'] = $this->nodeGroupName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HostGroupType'])) {
            $model->hostGroupType = $map['HostGroupType'];
        }
        if (isset($map['RecommendedInstanceTypes'])) {
            if (!empty($map['RecommendedInstanceTypes'])) {
                $model->recommendedInstanceTypes = $map['RecommendedInstanceTypes'];
            }
        }
        if (isset($map['availableDataDiskCategories'])) {
            if (!empty($map['availableDataDiskCategories'])) {
                $model->availableDataDiskCategories = $map['availableDataDiskCategories'];
            }
        }
        if (isset($map['availableInstanceTypes'])) {
            if (!empty($map['availableInstanceTypes'])) {
                $model->availableInstanceTypes = $map['availableInstanceTypes'];
            }
        }
        if (isset($map['availableSystemDiskCategories'])) {
            if (!empty($map['availableSystemDiskCategories'])) {
                $model->availableSystemDiskCategories = $map['availableSystemDiskCategories'];
            }
        }
        if (isset($map['defaultDataDiskCount'])) {
            $model->defaultDataDiskCount = $map['defaultDataDiskCount'];
        }
        if (isset($map['defaultDataDiskSize'])) {
            $model->defaultDataDiskSize = $map['defaultDataDiskSize'];
        }
        if (isset($map['defaultNodeCount'])) {
            $model->defaultNodeCount = $map['defaultNodeCount'];
        }
        if (isset($map['defaultSystemDiskSize'])) {
            $model->defaultSystemDiskSize = $map['defaultSystemDiskSize'];
        }
        if (isset($map['maxDataDiskCount'])) {
            $model->maxDataDiskCount = $map['maxDataDiskCount'];
        }
        if (isset($map['maxDataDiskSize'])) {
            $model->maxDataDiskSize = $map['maxDataDiskSize'];
        }
        if (isset($map['maxNodeCount'])) {
            $model->maxNodeCount = $map['maxNodeCount'];
        }
        if (isset($map['maxSystemDiskSize'])) {
            $model->maxSystemDiskSize = $map['maxSystemDiskSize'];
        }
        if (isset($map['minDataDiskCount'])) {
            $model->minDataDiskCount = $map['minDataDiskCount'];
        }
        if (isset($map['minDataDiskSize'])) {
            $model->minDataDiskSize = $map['minDataDiskSize'];
        }
        if (isset($map['minNodeCount'])) {
            $model->minNodeCount = $map['minNodeCount'];
        }
        if (isset($map['minSystemDiskSize'])) {
            $model->minSystemDiskSize = $map['minSystemDiskSize'];
        }
        if (isset($map['nodeGroupName'])) {
            $model->nodeGroupName = $map['nodeGroupName'];
        }

        return $model;
    }
}
