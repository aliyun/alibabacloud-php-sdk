<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeContainerFieldStatisticsResponseBody;

use AlibabaCloud\Tea\Model;

class containerGroupedFields extends Model
{
    /**
     * @description The number of applications.
     *
     * @example 3
     *
     * @var int
     */
    public $appCount;

    /**
     * @description The number of clusters.
     *
     * @example 1
     *
     * @var int
     */
    public $clusterCount;

    /**
     * @description The number of containers.
     *
     * @example 1
     *
     * @var int
     */
    public $containerCount;

    /**
     * @description The number of images.
     *
     * @example 3
     *
     * @var int
     */
    public $imageCount;

    /**
     * @description The number of instances.
     *
     * @example 1
     *
     * @var int
     */
    public $instanceCount;

    /**
     * @description The number of namespaces.
     *
     * @example 3
     *
     * @var int
     */
    public $namespaceCount;

    /**
     * @description The number of pods.
     *
     * @example 1
     *
     * @var int
     */
    public $podCount;

    /**
     * @description The number of the applications on which risks are detected.
     *
     * @example 1
     *
     * @var int
     */
    public $riskAppCount;

    /**
     * @description The number of the clusters on which risks are detected.
     *
     * @example 1
     *
     * @var int
     */
    public $riskClusterCount;

    /**
     * @description The number of the containers on which risks are detected.
     *
     * @example 1
     *
     * @var int
     */
    public $riskContainerCount;

    /**
     * @description The number of the images on which risks are detected.
     *
     * @example 1
     *
     * @var int
     */
    public $riskImageCount;

    /**
     * @description The number of the instances on which risks are detected.
     *
     * @example 3
     *
     * @var int
     */
    public $riskInstanceCount;

    /**
     * @description The number of the pods on which risks are detected.
     *
     * @example 2
     *
     * @var int
     */
    public $riskPodCount;
    protected $_name = [
        'appCount'           => 'AppCount',
        'clusterCount'       => 'ClusterCount',
        'containerCount'     => 'ContainerCount',
        'imageCount'         => 'ImageCount',
        'instanceCount'      => 'InstanceCount',
        'namespaceCount'     => 'NamespaceCount',
        'podCount'           => 'PodCount',
        'riskAppCount'       => 'RiskAppCount',
        'riskClusterCount'   => 'RiskClusterCount',
        'riskContainerCount' => 'RiskContainerCount',
        'riskImageCount'     => 'RiskImageCount',
        'riskInstanceCount'  => 'RiskInstanceCount',
        'riskPodCount'       => 'RiskPodCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appCount) {
            $res['AppCount'] = $this->appCount;
        }
        if (null !== $this->clusterCount) {
            $res['ClusterCount'] = $this->clusterCount;
        }
        if (null !== $this->containerCount) {
            $res['ContainerCount'] = $this->containerCount;
        }
        if (null !== $this->imageCount) {
            $res['ImageCount'] = $this->imageCount;
        }
        if (null !== $this->instanceCount) {
            $res['InstanceCount'] = $this->instanceCount;
        }
        if (null !== $this->namespaceCount) {
            $res['NamespaceCount'] = $this->namespaceCount;
        }
        if (null !== $this->podCount) {
            $res['PodCount'] = $this->podCount;
        }
        if (null !== $this->riskAppCount) {
            $res['RiskAppCount'] = $this->riskAppCount;
        }
        if (null !== $this->riskClusterCount) {
            $res['RiskClusterCount'] = $this->riskClusterCount;
        }
        if (null !== $this->riskContainerCount) {
            $res['RiskContainerCount'] = $this->riskContainerCount;
        }
        if (null !== $this->riskImageCount) {
            $res['RiskImageCount'] = $this->riskImageCount;
        }
        if (null !== $this->riskInstanceCount) {
            $res['RiskInstanceCount'] = $this->riskInstanceCount;
        }
        if (null !== $this->riskPodCount) {
            $res['RiskPodCount'] = $this->riskPodCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return containerGroupedFields
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppCount'])) {
            $model->appCount = $map['AppCount'];
        }
        if (isset($map['ClusterCount'])) {
            $model->clusterCount = $map['ClusterCount'];
        }
        if (isset($map['ContainerCount'])) {
            $model->containerCount = $map['ContainerCount'];
        }
        if (isset($map['ImageCount'])) {
            $model->imageCount = $map['ImageCount'];
        }
        if (isset($map['InstanceCount'])) {
            $model->instanceCount = $map['InstanceCount'];
        }
        if (isset($map['NamespaceCount'])) {
            $model->namespaceCount = $map['NamespaceCount'];
        }
        if (isset($map['PodCount'])) {
            $model->podCount = $map['PodCount'];
        }
        if (isset($map['RiskAppCount'])) {
            $model->riskAppCount = $map['RiskAppCount'];
        }
        if (isset($map['RiskClusterCount'])) {
            $model->riskClusterCount = $map['RiskClusterCount'];
        }
        if (isset($map['RiskContainerCount'])) {
            $model->riskContainerCount = $map['RiskContainerCount'];
        }
        if (isset($map['RiskImageCount'])) {
            $model->riskImageCount = $map['RiskImageCount'];
        }
        if (isset($map['RiskInstanceCount'])) {
            $model->riskInstanceCount = $map['RiskInstanceCount'];
        }
        if (isset($map['RiskPodCount'])) {
            $model->riskPodCount = $map['RiskPodCount'];
        }

        return $model;
    }
}
