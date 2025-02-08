<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tablestore\V20201209\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Tablestore\V20201209\Models\CreateInstanceRequest\tags;

class CreateInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $clusterType;
    /**
     * @var bool
     */
    public $disableReplication;
    /**
     * @var string
     */
    public $instanceDescription;
    /**
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
        if (\is_array($this->networkSourceACL)) {
            Model::validateArray($this->networkSourceACL);
        }
        if (\is_array($this->networkTypeACL)) {
            Model::validateArray($this->networkTypeACL);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->networkSourceACL)) {
                $res['NetworkSourceACL'] = [];
                $n1                      = 0;
                foreach ($this->networkSourceACL as $item1) {
                    $res['NetworkSourceACL'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->networkTypeACL) {
            if (\is_array($this->networkTypeACL)) {
                $res['NetworkTypeACL'] = [];
                $n1                    = 0;
                foreach ($this->networkTypeACL as $item1) {
                    $res['NetworkTypeACL'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1          = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
                $model->networkSourceACL = [];
                $n1                      = 0;
                foreach ($map['NetworkSourceACL'] as $item1) {
                    $model->networkSourceACL[$n1++] = $item1;
                }
            }
        }

        if (isset($map['NetworkTypeACL'])) {
            if (!empty($map['NetworkTypeACL'])) {
                $model->networkTypeACL = [];
                $n1                    = 0;
                foreach ($map['NetworkTypeACL'] as $item1) {
                    $model->networkTypeACL[$n1++] = $item1;
                }
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
                $n1          = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
