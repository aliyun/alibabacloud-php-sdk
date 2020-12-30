<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeEnvResourceResponseBody;

use AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeEnvResourceResponseBody\envResource\defaultSecurityGroups;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeEnvResourceResponseBody\envResource\domains;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeEnvResourceResponseBody\envResource\instances;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeEnvResourceResponseBody\envResource\loadBalancers;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeEnvResourceResponseBody\envResource\monitorGroup;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeEnvResourceResponseBody\envResource\rdsInstances;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeEnvResourceResponseBody\envResource\scalingGroup;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeEnvResourceResponseBody\envResource\vpc;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeEnvResourceResponseBody\envResource\vSwitches;
use AlibabaCloud\Tea\Model;

class envResource extends Model
{
    /**
     * @var string
     */
    public $launchTemplateId;

    /**
     * @var string
     */
    public $envName;

    /**
     * @var vSwitches
     */
    public $vSwitches;

    /**
     * @var vpc
     */
    public $vpc;

    /**
     * @var monitorGroup
     */
    public $monitorGroup;

    /**
     * @var string
     */
    public $launchConfigurationId;

    /**
     * @var loadBalancers
     */
    public $loadBalancers;

    /**
     * @var instances
     */
    public $instances;

    /**
     * @var defaultSecurityGroups
     */
    public $defaultSecurityGroups;

    /**
     * @var scalingGroup
     */
    public $scalingGroup;

    /**
     * @var domains
     */
    public $domains;

    /**
     * @var rdsInstances
     */
    public $rdsInstances;

    /**
     * @var string
     */
    public $envId;
    protected $_name = [
        'launchTemplateId'      => 'LaunchTemplateId',
        'envName'               => 'EnvName',
        'vSwitches'             => 'VSwitches',
        'vpc'                   => 'Vpc',
        'monitorGroup'          => 'MonitorGroup',
        'launchConfigurationId' => 'LaunchConfigurationId',
        'loadBalancers'         => 'LoadBalancers',
        'instances'             => 'Instances',
        'defaultSecurityGroups' => 'DefaultSecurityGroups',
        'scalingGroup'          => 'ScalingGroup',
        'domains'               => 'Domains',
        'rdsInstances'          => 'RdsInstances',
        'envId'                 => 'EnvId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->launchTemplateId) {
            $res['LaunchTemplateId'] = $this->launchTemplateId;
        }
        if (null !== $this->envName) {
            $res['EnvName'] = $this->envName;
        }
        if (null !== $this->vSwitches) {
            $res['VSwitches'] = null !== $this->vSwitches ? $this->vSwitches->toMap() : null;
        }
        if (null !== $this->vpc) {
            $res['Vpc'] = null !== $this->vpc ? $this->vpc->toMap() : null;
        }
        if (null !== $this->monitorGroup) {
            $res['MonitorGroup'] = null !== $this->monitorGroup ? $this->monitorGroup->toMap() : null;
        }
        if (null !== $this->launchConfigurationId) {
            $res['LaunchConfigurationId'] = $this->launchConfigurationId;
        }
        if (null !== $this->loadBalancers) {
            $res['LoadBalancers'] = null !== $this->loadBalancers ? $this->loadBalancers->toMap() : null;
        }
        if (null !== $this->instances) {
            $res['Instances'] = null !== $this->instances ? $this->instances->toMap() : null;
        }
        if (null !== $this->defaultSecurityGroups) {
            $res['DefaultSecurityGroups'] = null !== $this->defaultSecurityGroups ? $this->defaultSecurityGroups->toMap() : null;
        }
        if (null !== $this->scalingGroup) {
            $res['ScalingGroup'] = null !== $this->scalingGroup ? $this->scalingGroup->toMap() : null;
        }
        if (null !== $this->domains) {
            $res['Domains'] = null !== $this->domains ? $this->domains->toMap() : null;
        }
        if (null !== $this->rdsInstances) {
            $res['RdsInstances'] = null !== $this->rdsInstances ? $this->rdsInstances->toMap() : null;
        }
        if (null !== $this->envId) {
            $res['EnvId'] = $this->envId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return envResource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LaunchTemplateId'])) {
            $model->launchTemplateId = $map['LaunchTemplateId'];
        }
        if (isset($map['EnvName'])) {
            $model->envName = $map['EnvName'];
        }
        if (isset($map['VSwitches'])) {
            $model->vSwitches = vSwitches::fromMap($map['VSwitches']);
        }
        if (isset($map['Vpc'])) {
            $model->vpc = vpc::fromMap($map['Vpc']);
        }
        if (isset($map['MonitorGroup'])) {
            $model->monitorGroup = monitorGroup::fromMap($map['MonitorGroup']);
        }
        if (isset($map['LaunchConfigurationId'])) {
            $model->launchConfigurationId = $map['LaunchConfigurationId'];
        }
        if (isset($map['LoadBalancers'])) {
            $model->loadBalancers = loadBalancers::fromMap($map['LoadBalancers']);
        }
        if (isset($map['Instances'])) {
            $model->instances = instances::fromMap($map['Instances']);
        }
        if (isset($map['DefaultSecurityGroups'])) {
            $model->defaultSecurityGroups = defaultSecurityGroups::fromMap($map['DefaultSecurityGroups']);
        }
        if (isset($map['ScalingGroup'])) {
            $model->scalingGroup = scalingGroup::fromMap($map['ScalingGroup']);
        }
        if (isset($map['Domains'])) {
            $model->domains = domains::fromMap($map['Domains']);
        }
        if (isset($map['RdsInstances'])) {
            $model->rdsInstances = rdsInstances::fromMap($map['RdsInstances']);
        }
        if (isset($map['EnvId'])) {
            $model->envId = $map['EnvId'];
        }

        return $model;
    }
}
