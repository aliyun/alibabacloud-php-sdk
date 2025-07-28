<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tablestore\V20201209\Models;

use AlibabaCloud\SDK\Tablestore\V20201209\Models\CreateInstanceRequest\tags;
use AlibabaCloud\Tea\Model;

class CreateInstanceRequest extends Model
{
    /**
     * @description The type of the instance.
     *
     * This parameter is required.
     *
     * @example SSD
     *
     * @var string
     */
    public $clusterType;

    /**
     * @description (Deprecated) Specifies whether to enable disaster recovery for the instance.
     *
     * Valid values:
     *
     *   false
     *   true
     *
     * @example false
     *
     * @deprecated
     *
     * @var bool
     */
    public $disableReplication;

    /**
     * @description The description of the instance. The instance description must be 3 to 256 characters in length.
     *
     * @example the test instance
     *
     * @var string
     */
    public $instanceDescription;

    /**
     * @description The name of the instance. Instance naming conventions:
     *
     *   The name can contain only letters, digits, and hyphens (-).
     *   The name must start with a letter.
     *   The name cannot end with a hyphen (-).
     *   The name is case-insensitive.
     *   The name must be 3 to 16 characters in length.
     *   The name cannot contain the following words: ali, ay, ots, taobao, and admin.
     *
     * This parameter is required.
     *
     * @example instance-test
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description (Deprecated) The network type of the instance. Valid values: NORMAL and VPC_CONSOLE. Default value: NORMAL.
     *
     * @example NORMAL
     *
     * @var string
     */
    public $network;

    /**
     * @description The types of the source from which access is allowed. By default, the following source type is allowed:
     *
     * TRUST_PROXY: console
     *
     * @var string[]
     */
    public $networkSourceACL;

    /**
     * @description The types of the network from which access is allowed. By default, the following network types are allowed:
     *
     *   INTERNET: Internet
     *   VPC: virtual private cloud (VPC)
     *   CLASSIC: classic network
     *
     * @var string[]
     */
    public $networkTypeACL;

    /**
     * @description The instance policy in the JSON format.
     *
     * @example {
     * "Version": "1",
     * "Statement": [
     * {
     * "Action": [
     * "ots:*"
     * ],
     * "Resource": [
     * "acs:ots:*:13791xxxxxxxxxxx:instance/myinstance*"
     * ],
     * "Principal": [
     * "*"
     * ],
     * "Effect": "Allow",
     * "Condition": {
     * "StringEquals": {
     * "ots:TLSVersion": [
     * "1.2"
     * ]
     * },
     * "IpAddress": {
     * "acs:SourceIp": [
     * "192.168.0.1",
     * "198.51.100.1"
     * ]
     * }
     * }
     * }
     * ]
     * }
     *
     * @var string
     */
    public $policy;

    /**
     * @description The ID of the resource group to which the instance belongs.
     *
     * @example rg-acfmxh4em5jnbcd
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The tags.
     *
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'clusterType' => 'ClusterType',
        'disableReplication' => 'DisableReplication',
        'instanceDescription' => 'InstanceDescription',
        'instanceName' => 'InstanceName',
        'network' => 'Network',
        'networkSourceACL' => 'NetworkSourceACL',
        'networkTypeACL' => 'NetworkTypeACL',
        'policy' => 'Policy',
        'resourceGroupId' => 'ResourceGroupId',
        'tags' => 'Tags',
    ];

    public function validate() {}

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
                $n = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
