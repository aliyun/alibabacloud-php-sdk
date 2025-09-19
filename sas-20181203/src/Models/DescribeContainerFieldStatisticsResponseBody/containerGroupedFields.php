<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeContainerFieldStatisticsResponseBody;

use AlibabaCloud\Dara\Model;

class containerGroupedFields extends Model
{
    /**
     * @var int
     */
    public $appCount;

    /**
     * @var int
     */
    public $clusterCount;

    /**
     * @var int
     */
    public $containerCount;

    /**
     * @var int
     */
    public $imageCount;

    /**
     * @var int
     */
    public $instanceCount;

    /**
     * @var int
     */
    public $namespaceCount;

    /**
     * @var int
     */
    public $podCount;

    /**
     * @var int
     */
    public $riskAppCount;

    /**
     * @var int
     */
    public $riskClusterCount;

    /**
     * @var int
     */
    public $riskContainerCount;

    /**
     * @var int
     */
    public $riskImageCount;

    /**
     * @var int
     */
    public $riskInstanceCount;

    /**
     * @var int
     */
    public $riskPodCount;
    protected $_name = [
        'appCount' => 'AppCount',
        'clusterCount' => 'ClusterCount',
        'containerCount' => 'ContainerCount',
        'imageCount' => 'ImageCount',
        'instanceCount' => 'InstanceCount',
        'namespaceCount' => 'NamespaceCount',
        'podCount' => 'PodCount',
        'riskAppCount' => 'RiskAppCount',
        'riskClusterCount' => 'RiskClusterCount',
        'riskContainerCount' => 'RiskContainerCount',
        'riskImageCount' => 'RiskImageCount',
        'riskInstanceCount' => 'RiskInstanceCount',
        'riskPodCount' => 'RiskPodCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
