<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRCDeploymentSetsResponseBody\deploymentSets;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRCDeploymentSetsResponseBody\deploymentSets\deploymentSet\capacities;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRCDeploymentSetsResponseBody\deploymentSets\deploymentSet\instanceIds;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRCDeploymentSetsResponseBody\deploymentSets\deploymentSet\tags;
use AlibabaCloud\Tea\Model;

class deploymentSet extends Model
{
    /**
     * @description The details of the capacities of the deployment set. This parameter is valid only when the deployment set contains existing RDS Custom instances. The value contains the details of the capacities of the deployment set in different zones.
     *
     * @var capacities
     */
    public $capacities;

    /**
     * @description The time when the deployment set was created. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2024-06-19T07:15:44Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The deployment set description.
     *
     * @example test
     *
     * @var string
     */
    public $deploymentSetDescription;

    /**
     * @description The deployment set ID.
     *
     * @example ds-ob5n4rbgy****
     *
     * @var string
     */
    public $deploymentSetId;

    /**
     * @description The deployment set name.
     *
     * @example deployment_test
     *
     * @var string
     */
    public $deploymentSetName;

    /**
     * @description The deployment strategy. The return value of this parameter is the value of the `Strategy` request parameter.
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
     * @example None
     *
     * @var string
     */
    public $granularity;

    /**
     * @description The number of groups in the deployment set.
     *
     * >  This parameter is valid only when the Strategy request parameter is set to AvailabilityGroup.
     * @example 3
     *
     * @var int
     */
    public $groupCount;

    /**
     * @description The number of RDS Custom instances in the deployment set.
     *
     * @example 1
     *
     * @var int
     */
    public $instanceAmount;

    /**
     * @description The ID of the RDS Custom instance in the deployment set.
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

    /**
     * @var tags
     */
    public $tags;
    protected $_name = [
        'capacities'               => 'Capacities',
        'createTime'               => 'CreateTime',
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
        'tags'                     => 'Tags',
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
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
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
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
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
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }

        return $model;
    }
}
