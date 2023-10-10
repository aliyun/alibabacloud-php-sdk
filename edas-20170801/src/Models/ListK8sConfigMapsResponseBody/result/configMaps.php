<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListK8sConfigMapsResponseBody\result;

use AlibabaCloud\SDK\Edas\V20170801\Models\ListK8sConfigMapsResponseBody\result\configMaps\data;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListK8sConfigMapsResponseBody\result\configMaps\relatedApps;
use AlibabaCloud\Tea\Model;

class configMaps extends Model
{
    /**
     * @description The ID of the Kubernetes cluster. You can obtain the cluster ID by calling the GetK8sCluster operation. For more information, see [GetK8sCluster](~~181437~~).
     *
     * @example d73918f4-3b08-4c17-bb07-eaf8********
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The name of the cluster.
     *
     * @example my-cluster
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description The time when the ConfigMaps were created. The time follows the ISO 8601 standard in the yyyy-MM-ddThh:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2022-01-31T02:46:14Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The information about ConfigMaps.
     *
     * @var data[]
     */
    public $data;

    /**
     * @description The name of the ConfigMap.
     *
     * @example my-config
     *
     * @var string
     */
    public $name;

    /**
     * @description The namespace of the Kubernetes cluster.
     *
     * @example default
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The related applications.
     *
     * @var relatedApps[]
     */
    public $relatedApps;
    protected $_name = [
        'clusterId'    => 'ClusterId',
        'clusterName'  => 'ClusterName',
        'creationTime' => 'CreationTime',
        'data'         => 'Data',
        'name'         => 'Name',
        'namespace'    => 'Namespace',
        'relatedApps'  => 'RelatedApps',
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
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->data) {
            $res['Data'] = [];
            if (null !== $this->data && \is_array($this->data)) {
                $n = 0;
                foreach ($this->data as $item) {
                    $res['Data'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->relatedApps) {
            $res['RelatedApps'] = [];
            if (null !== $this->relatedApps && \is_array($this->relatedApps)) {
                $n = 0;
                foreach ($this->relatedApps as $item) {
                    $res['RelatedApps'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configMaps
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Data'])) {
            if (!empty($map['Data'])) {
                $model->data = [];
                $n           = 0;
                foreach ($map['Data'] as $item) {
                    $model->data[$n++] = null !== $item ? data::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['RelatedApps'])) {
            if (!empty($map['RelatedApps'])) {
                $model->relatedApps = [];
                $n                  = 0;
                foreach ($map['RelatedApps'] as $item) {
                    $model->relatedApps[$n++] = null !== $item ? relatedApps::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
