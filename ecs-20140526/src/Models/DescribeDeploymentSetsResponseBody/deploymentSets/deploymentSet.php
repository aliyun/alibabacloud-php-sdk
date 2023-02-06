<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDeploymentSetsResponseBody\deploymentSets;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDeploymentSetsResponseBody\deploymentSets\deploymentSet\capacities;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDeploymentSetsResponseBody\deploymentSets\deploymentSet\instanceIds;
use AlibabaCloud\Tea\Model;

class deploymentSet extends Model
{
    /**
     * @description Details of the capacities of the deployment set. This parameter is valid only when the deployment set contains Elastic Compute Service (ECS) instances. The value contains the capacities of the deployment set in different zones.
     *
     * @var capacities
     */
    public $capacities;

    /**
     * @description The time when the deployment set was created.
     *
     * @example 2021-12-07T06:01:46Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The description of the deployment set.
     *
     * @example testDeploymentSetDescription
     *
     * @var string
     */
    public $deploymentSetDescription;

    /**
     * @description The ID of the deployment set.
     *
     * @example ds-bp67acfmxazb4ph****
     *
     * @var string
     */
    public $deploymentSetId;

    /**
     * @description The name of the deployment set.
     *
     * @example testDeploymentSetName
     *
     * @var string
     */
    public $deploymentSetName;

    /**
     * @description The deployment strategy. The value of this response parameter is that of the `Strategy` request parameter.
     *
     * @example Availability
     *
     * @var string
     */
    public $deploymentStrategy;

    /**
     * @description The deployment domain.
     *
     * @example default
     *
     * @var string
     */
    public $domain;

    /**
     * @description The deployment granularity.
     *
     * @example host
     *
     * @var string
     */
    public $granularity;

    /**
     * @description The number of deployment set groups in the deployment set.
     *
     * >  This parameter is valid only when the Strategy request parameter is set to AvailabilityGroup.
     * @example 3
     *
     * @var int
     */
    public $groupCount;

    /**
     * @description The number of instances in the deployment set.
     *
     * @example 3
     *
     * @var int
     */
    public $instanceAmount;

    /**
     * @description The IDs of the instances in the deployment set.
     *
     * @var instanceIds
     */
    public $instanceIds;

    /**
     * @description The deployment strategy.
     *
     * @example LooseDispersion
     *
     * @var string
     */
    public $strategy;
    protected $_name = [
        'capacities'               => 'Capacities',
        'creationTime'             => 'CreationTime',
        'deploymentSetDescription' => 'DeploymentSetDescription',
        'deploymentSetId'          => 'DeploymentSetId',
        'deploymentSetName'        => 'DeploymentSetName',
        'deploymentStrategy'       => 'DeploymentStrategy',
        'domain'                   => 'Domain',
        'granularity'              => 'Granularity',
        'groupCount'               => 'GroupCount',
        'instanceAmount'           => 'InstanceAmount',
        'instanceIds'              => 'InstanceIds',
        'strategy'                 => 'Strategy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->capacities) {
            $res['Capacities'] = null !== $this->capacities ? $this->capacities->toMap() : null;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->deploymentSetDescription) {
            $res['DeploymentSetDescription'] = $this->deploymentSetDescription;
        }
        if (null !== $this->deploymentSetId) {
            $res['DeploymentSetId'] = $this->deploymentSetId;
        }
        if (null !== $this->deploymentSetName) {
            $res['DeploymentSetName'] = $this->deploymentSetName;
        }
        if (null !== $this->deploymentStrategy) {
            $res['DeploymentStrategy'] = $this->deploymentStrategy;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->granularity) {
            $res['Granularity'] = $this->granularity;
        }
        if (null !== $this->groupCount) {
            $res['GroupCount'] = $this->groupCount;
        }
        if (null !== $this->instanceAmount) {
            $res['InstanceAmount'] = $this->instanceAmount;
        }
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = null !== $this->instanceIds ? $this->instanceIds->toMap() : null;
        }
        if (null !== $this->strategy) {
            $res['Strategy'] = $this->strategy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deploymentSet
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Capacities'])) {
            $model->capacities = capacities::fromMap($map['Capacities']);
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['DeploymentSetDescription'])) {
            $model->deploymentSetDescription = $map['DeploymentSetDescription'];
        }
        if (isset($map['DeploymentSetId'])) {
            $model->deploymentSetId = $map['DeploymentSetId'];
        }
        if (isset($map['DeploymentSetName'])) {
            $model->deploymentSetName = $map['DeploymentSetName'];
        }
        if (isset($map['DeploymentStrategy'])) {
            $model->deploymentStrategy = $map['DeploymentStrategy'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Granularity'])) {
            $model->granularity = $map['Granularity'];
        }
        if (isset($map['GroupCount'])) {
            $model->groupCount = $map['GroupCount'];
        }
        if (isset($map['InstanceAmount'])) {
            $model->instanceAmount = $map['InstanceAmount'];
        }
        if (isset($map['InstanceIds'])) {
            $model->instanceIds = instanceIds::fromMap($map['InstanceIds']);
        }
        if (isset($map['Strategy'])) {
            $model->strategy = $map['Strategy'];
        }

        return $model;
    }
}
