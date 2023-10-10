<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class DeleteClusterRequest extends Model
{
    /**
     * @description Specifies whether to retain the Server Load Balancer (SLB) resources that are created by the cluster.
     *
     *   `true`: retains the SLB resources that are created by the cluster.
     *   `false`: does not retain the SLB resources that are created by the cluster.
     *
     * Default value: `false`.
     * @example false
     *
     * @var bool
     */
    public $keepSlb;

    /**
     * @description Specifies whether to retain all resources. If you set the parameter to `true`, the `retain_resources` parameter is ignored.
     *
     *   `true`: retains all resources.
     *   `false`: does not retain all resources.
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
