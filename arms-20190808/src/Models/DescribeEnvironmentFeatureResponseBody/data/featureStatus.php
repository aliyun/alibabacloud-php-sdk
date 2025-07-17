<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeEnvironmentFeatureResponseBody\data;

use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeEnvironmentFeatureResponseBody\data\featureStatus\featureContainers;
use AlibabaCloud\Tea\Model;

class featureStatus extends Model
{
    /**
     * @description The ID of the resource.
     *
     * @example c013823b55e4b4d6bb6b6f28682bd38a7
     *
     * @var string
     */
    public $bindResourceId;

    /**
     * @description The containers of the feature.
     *
     * @var featureContainers[]
     */
    public $featureContainers;

    /**
     * @description The IP address of the pod.
     *
     * @var string[]
     */
    public $ips;

    /**
     * @description The Kubernetes resource name of the feature.
     *
     * @example arms-prometheus-ack-arms-prometheus
     *
     * @var string
     */
    public $name;

    /**
     * @description The namespace.
     *
     * @example arms-prom
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The ID of the security group.
     *
     * @example sg-bp1c9fcexoalq9po6cp8
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description The status of the agent. Valid values:
     *
     *   Success: The agent is running.
     *   Failed: The agent failed to run.
     *   Not Found: The agent is not installed.
     *
     * @example Success
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the vSwitch.
     *
     * @example vsw-bp1qt6ict0dbxgv4wer8l
     *
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'bindResourceId' => 'BindResourceId',
        'featureContainers' => 'FeatureContainers',
        'ips' => 'Ips',
        'name' => 'Name',
        'namespace' => 'Namespace',
        'securityGroupId' => 'SecurityGroupId',
        'status' => 'Status',
        'vSwitchId' => 'VSwitchId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->bindResourceId) {
            $res['BindResourceId'] = $this->bindResourceId;
        }
        if (null !== $this->featureContainers) {
            $res['FeatureContainers'] = [];
            if (null !== $this->featureContainers && \is_array($this->featureContainers)) {
                $n = 0;
                foreach ($this->featureContainers as $item) {
                    $res['FeatureContainers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ips) {
            $res['Ips'] = $this->ips;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return featureStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BindResourceId'])) {
            $model->bindResourceId = $map['BindResourceId'];
        }
        if (isset($map['FeatureContainers'])) {
            if (!empty($map['FeatureContainers'])) {
                $model->featureContainers = [];
                $n = 0;
                foreach ($map['FeatureContainers'] as $item) {
                    $model->featureContainers[$n++] = null !== $item ? featureContainers::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Ips'])) {
            if (!empty($map['Ips'])) {
                $model->ips = $map['Ips'];
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        return $model;
    }
}
