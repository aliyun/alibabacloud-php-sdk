<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDeploymentSetsResponseBody;

use AlibabaCloud\Tea\Model;

class deploymentSets extends Model
{
    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $strategy;

    /**
     * @var string
     */
    public $deploymentSetId;

    /**
     * @var string
     */
    public $deploymentStrategy;

    /**
     * @var string
     */
    public $deploymentSetDescription;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var int
     */
    public $groupCount;

    /**
     * @var string
     */
    public $granularity;

    /**
     * @var string[]
     */
    public $instanceIds;

    /**
     * @var string
     */
    public $deploymentSetName;

    /**
     * @var int
     */
    public $instanceAmount;
    protected $_name = [
        'creationTime'             => 'CreationTime',
        'strategy'                 => 'Strategy',
        'deploymentSetId'          => 'DeploymentSetId',
        'deploymentStrategy'       => 'DeploymentStrategy',
        'deploymentSetDescription' => 'DeploymentSetDescription',
        'domain'                   => 'Domain',
        'groupCount'               => 'GroupCount',
        'granularity'              => 'Granularity',
        'instanceIds'              => 'InstanceIds',
        'deploymentSetName'        => 'DeploymentSetName',
        'instanceAmount'           => 'InstanceAmount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->strategy) {
            $res['Strategy'] = $this->strategy;
        }
        if (null !== $this->deploymentSetId) {
            $res['DeploymentSetId'] = $this->deploymentSetId;
        }
        if (null !== $this->deploymentStrategy) {
            $res['DeploymentStrategy'] = $this->deploymentStrategy;
        }
        if (null !== $this->deploymentSetDescription) {
            $res['DeploymentSetDescription'] = $this->deploymentSetDescription;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->groupCount) {
            $res['GroupCount'] = $this->groupCount;
        }
        if (null !== $this->granularity) {
            $res['Granularity'] = $this->granularity;
        }
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }
        if (null !== $this->deploymentSetName) {
            $res['DeploymentSetName'] = $this->deploymentSetName;
        }
        if (null !== $this->instanceAmount) {
            $res['InstanceAmount'] = $this->instanceAmount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deploymentSets
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Strategy'])) {
            $model->strategy = $map['Strategy'];
        }
        if (isset($map['DeploymentSetId'])) {
            $model->deploymentSetId = $map['DeploymentSetId'];
        }
        if (isset($map['DeploymentStrategy'])) {
            $model->deploymentStrategy = $map['DeploymentStrategy'];
        }
        if (isset($map['DeploymentSetDescription'])) {
            $model->deploymentSetDescription = $map['DeploymentSetDescription'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['GroupCount'])) {
            $model->groupCount = $map['GroupCount'];
        }
        if (isset($map['Granularity'])) {
            $model->granularity = $map['Granularity'];
        }
        if (isset($map['InstanceIds'])) {
            if (!empty($map['InstanceIds'])) {
                $model->instanceIds = $map['InstanceIds'];
            }
        }
        if (isset($map['DeploymentSetName'])) {
            $model->deploymentSetName = $map['DeploymentSetName'];
        }
        if (isset($map['InstanceAmount'])) {
            $model->instanceAmount = $map['InstanceAmount'];
        }

        return $model;
    }
}
