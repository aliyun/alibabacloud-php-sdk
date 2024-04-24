<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tablestore\V20201209\Models;

use AlibabaCloud\SDK\Tablestore\V20201209\Models\CreateInstanceRequest\tags;
use AlibabaCloud\Tea\Model;

class CreateInstanceRequest extends Model
{
    /**
     * @example SSD vs HYBRID
     *
     * @var string
     */
    public $clusterType;

    /**
     * @var bool
     */
    public $disableReplication;

    /**
     * @example 实例描述
     *
     * @var string
     */
    public $instanceDescription;

    /**
     * @example first-ins
     *
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $network;

    /**
     * @var string[]
     */
    public $networkSourceACL;

    /**
     * @var string[]
     */
    public $networkTypeACL;

    /**
     * @var string
     */
    public $policy;

    /**
     * @example rg-acfmxh4em5jnbcd
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'clusterType'         => 'ClusterType',
        'disableReplication'  => 'DisableReplication',
        'instanceDescription' => 'InstanceDescription',
        'instanceName'        => 'InstanceName',
        'network'             => 'Network',
        'networkSourceACL'    => 'NetworkSourceACL',
        'networkTypeACL'      => 'NetworkTypeACL',
        'policy'              => 'Policy',
        'resourceGroupId'     => 'ResourceGroupId',
        'tags'                => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }
        if (null !== $this->disableReplication) {
            $res['DisableReplication'] = $this->disableReplication;
        }
        if (null !== $this->instanceDescription) {
            $res['InstanceDescription'] = $this->instanceDescription;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->network) {
            $res['Network'] = $this->network;
        }
        if (null !== $this->networkSourceACL) {
            $res['NetworkSourceACL'] = $this->networkSourceACL;
        }
        if (null !== $this->networkTypeACL) {
            $res['NetworkTypeACL'] = $this->networkTypeACL;
        }
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }
        if (isset($map['DisableReplication'])) {
            $model->disableReplication = $map['DisableReplication'];
        }
        if (isset($map['InstanceDescription'])) {
            $model->instanceDescription = $map['InstanceDescription'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['Network'])) {
            $model->network = $map['Network'];
        }
        if (isset($map['NetworkSourceACL'])) {
            if (!empty($map['NetworkSourceACL'])) {
                $model->networkSourceACL = $map['NetworkSourceACL'];
            }
        }
        if (isset($map['NetworkTypeACL'])) {
            if (!empty($map['NetworkTypeACL'])) {
                $model->networkTypeACL = $map['NetworkTypeACL'];
            }
        }
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
