<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRCDeploymentSetsResponseBody\deploymentSets;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRCDeploymentSetsResponseBody\deploymentSets\deploymentSet\capacities;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRCDeploymentSetsResponseBody\deploymentSets\deploymentSet\instanceIds;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRCDeploymentSetsResponseBody\deploymentSets\deploymentSet\tags;

class deploymentSet extends Model
{
    /**
     * @var capacities
     */
    public $capacities;
    /**
     * @var string
     */
    public $createTime;
    /**
     * @var string
     */
    public $deploymentSetDescription;
    /**
     * @var string
     */
    public $deploymentSetId;
    /**
     * @var string
     */
    public $deploymentSetName;
    /**
     * @var string
     */
    public $deploymentStrategy;
    /**
     * @var string
     */
    public $domain;
    /**
     * @var string
     */
    public $granularity;
    /**
     * @var int
     */
    public $groupCount;
    /**
     * @var int
     */
    public $instanceAmount;
    /**
     * @var instanceIds
     */
    public $instanceIds;
    /**
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
        if (null !== $this->capacities) {
            $this->capacities->validate();
        }
        if (null !== $this->instanceIds) {
            $this->instanceIds->validate();
        }
        if (null !== $this->tags) {
            $this->tags->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->capacities) {
            $res['Capacities'] = null !== $this->capacities ? $this->capacities->toArray($noStream) : $this->capacities;
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
            $res['InstanceIds'] = null !== $this->instanceIds ? $this->instanceIds->toArray($noStream) : $this->instanceIds;
        }

        if (null !== $this->strategy) {
            $res['Strategy'] = $this->strategy;
        }

        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toArray($noStream) : $this->tags;
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
