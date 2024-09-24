<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\SDK\CS\V20151215\Models\DeleteClusterRequest\deleteOptions;
use AlibabaCloud\Tea\Model;

class DeleteClusterRequest extends Model
{
    /**
     * @description The type of cluster resource that you want to delete or retain.
     *
     * @var deleteOptions[]
     */
    public $deleteOptions;

    /**
     * @description Specifies whether to retain the Server Load Balancer (SLB) resources that are created by the cluster.
     *
     *   `true`: retains the SLB instances that are created by the cluster.
     *   `false`: does not retain the SLB instances that are created by the cluster.
     *
     * Default value: `false`. Set resource_type to `SLB` in the `delete_options` parameter to manage SLB instances.
     * @example false
     *
     * @deprecated
     *
     * @var bool
     */
    public $keepSlb;

    /**
     * @description Specifies whether to retain all resources. If you set the parameter to `true`, the `retain_resources` parameter is ignored. The cloud resources that are created by the cluster are retained. You can call the `DescribeClusterResources` operation to query cloud resources created by the cluster. If you set the parameter to `false`, resources to be retained by default in the `delete_options` parameter are still retained. To delete these resources, set `delete_mode` to `delete` in `delete_options`.
     *
     *   `true`: retains all resources, including cloud resources created by the cluster.
     *   `false`: does not retain all resources. Resources to be retained by default in the `delete_options` parameter are retained. For example, `ALB` instances are retained when this parameter is set to `false`.
     *
     * Default value: `false`.
     * @example false
     *
     * @var bool
     */
    public $retainAllResources;

    /**
     * @description The list of resources. To retain resources when you delete a cluster, you need to specify the IDs of the resources to be retained.
     *
     * @var string[]
     */
    public $retainResources;
    protected $_name = [
        'deleteOptions'      => 'delete_options',
        'keepSlb'            => 'keep_slb',
        'retainAllResources' => 'retain_all_resources',
        'retainResources'    => 'retain_resources',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deleteOptions) {
            $res['delete_options'] = [];
            if (null !== $this->deleteOptions && \is_array($this->deleteOptions)) {
                $n = 0;
                foreach ($this->deleteOptions as $item) {
                    $res['delete_options'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->keepSlb) {
            $res['keep_slb'] = $this->keepSlb;
        }
        if (null !== $this->retainAllResources) {
            $res['retain_all_resources'] = $this->retainAllResources;
        }
        if (null !== $this->retainResources) {
            $res['retain_resources'] = $this->retainResources;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteClusterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['delete_options'])) {
            if (!empty($map['delete_options'])) {
                $model->deleteOptions = [];
                $n                    = 0;
                foreach ($map['delete_options'] as $item) {
                    $model->deleteOptions[$n++] = null !== $item ? deleteOptions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['keep_slb'])) {
            $model->keepSlb = $map['keep_slb'];
        }
        if (isset($map['retain_all_resources'])) {
            $model->retainAllResources = $map['retain_all_resources'];
        }
        if (isset($map['retain_resources'])) {
            if (!empty($map['retain_resources'])) {
                $model->retainResources = $map['retain_resources'];
            }
        }

        return $model;
    }
}
