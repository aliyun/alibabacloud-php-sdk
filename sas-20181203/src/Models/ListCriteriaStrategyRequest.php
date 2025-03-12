<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ListCriteriaStrategyRequest extends Model
{
    /**
     * @description The cluster ID.
     *
     * >  You can call the [DescribeGroupedContainerInstances](~~DescribeGroupedContainerInstances~~) operation to query the IDs of clusters.
     * @example c4af4fdf38a98496a9b63c2be5dae****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The name of the image.
     *
     * >  You can call the [GetOpaClusterImageList](~~GetOpaClusterImageList~~) operation to query the names of images.
     * @example testImage
     *
     * @var string
     */
    public $imageName;

    /**
     * @description The tag that is added to the container.
     *
     * >  You can call the [GetOpaClusterLabelList](~~GetOpaClusterLabelList~~) operation to query the tags that are added to containers.
     * @example testlabel
     *
     * @var string
     */
    public $label;

    /**
     * @description The namespace of the cluster.
     *
     * >  You can call the [GetOpaClusterNamespaceList](~~GetOpaClusterNamespaceList~~) operation to query the namespaces of clusters.
     * @example test
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The name of the rule.
     *
     * @example test
     *
     * @var string
     */
    public $strategyName;
    protected $_name = [
        'clusterId'    => 'ClusterId',
        'imageName'    => 'ImageName',
        'label'        => 'Label',
        'namespace'    => 'Namespace',
        'strategyName' => 'StrategyName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->strategyName) {
            $res['StrategyName'] = $this->strategyName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCriteriaStrategyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['StrategyName'])) {
            $model->strategyName = $map['StrategyName'];
        }

        return $model;
    }
}
