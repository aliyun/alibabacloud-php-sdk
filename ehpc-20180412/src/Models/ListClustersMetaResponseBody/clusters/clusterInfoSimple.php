<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListClustersMetaResponseBody\clusters;

use AlibabaCloud\Tea\Model;

class clusterInfoSimple extends Model
{
    /**
     * @description The server type of the account. Valid values:
     *
     *   nis
     *   ldap
     *
     * @example nis
     *
     * @var string
     */
    public $accountType;

    /**
     * @description The version of the client.
     *
     * @example 1.0.64
     *
     * @var string
     */
    public $clientVersion;

    /**
     * @description The mode in which the cluster is deployed. Valid values:
     *
     *   Standard: An account node, a scheduling node, a logon node, and multiple compute nodes are separately deployed.
     *   Advanced: Two high availability (HA) account nodes, two HA scheduler nodes, one logon node, and multiple compute nodes are separately deployed.
     *   Simple: A management node, a logon node, and multiple compute nodes are deployed. The management node consists of an account node and a scheduling node. The logon node and compute nodes are separately deployed.
     *   Tiny: A management node and multiple compute nodes are deployed. The management node consists of an account node, a scheduling node, and a logon node. The compute nodes are separately deployed.
     *
     * @example Standard
     *
     * @var string
     */
    public $deployMode;

    /**
     * @description The description of the cluster.
     *
     * @example clusterdescription
     *
     * @var string
     */
    public $description;

    /**
     * @description Indicates whether the cluster uses a plug-in. Valid values:
     *
     *   true
     *   false
     *
     * Default value: false
     * @example false
     *
     * @var bool
     */
    public $hasPlugin;

    /**
     * @description The ID of the cluster.
     *
     * @example ehpc-hz-jeJki6****
     *
     * @var string
     */
    public $id;

    /**
     * @description Indicates whether a scaling group is enabled. Valid values:
     *
     *   true: A scaling group is enabled.
     *   false: No scaling group is enabled.
     *
     * @example false
     *
     * @var bool
     */
    public $isComputeEss;

    /**
     * @description The location where the cluster is deployed. Valid values:
     *
     *   OnPremise: The cluster is deployed on a hybrid cloud.
     *   PublicCloud: The cluster is deployed on a public cloud.
     *
     * @example PublicCloud
     *
     * @var string
     */
    public $location;

    /**
     * @description The name of the cluster.
     *
     * @example cluster1
     *
     * @var string
     */
    public $name;

    /**
     * @description The image tag of the operating system.
     *
     * @example CentOS_7.2_64
     *
     * @var string
     */
    public $osTag;

    /**
     * @description The type of the scheduler. Valid values:
     *
     *   pbs
     *   slurm
     *   opengridscheduler
     *   deadline
     *
     * @example pbs
     *
     * @var string
     */
    public $schedulerType;

    /**
     * @description The status of the cluster. Valid values:
     *
     *   uninit: The cluster is not initialized.
     *   creating: The cluster is being created.
     *   init: The cluster is being initialized.
     *   running: The cluster is running.
     *   exception: The cluster encounters an exception.
     *   releasing: The cluster is being released.
     *
     * @example running
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the virtual private cloud (VPC).
     *
     * @example vpc-b3f3edefefeep0760yju****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'accountType'   => 'AccountType',
        'clientVersion' => 'ClientVersion',
        'deployMode'    => 'DeployMode',
        'description'   => 'Description',
        'hasPlugin'     => 'HasPlugin',
        'id'            => 'Id',
        'isComputeEss'  => 'IsComputeEss',
        'location'      => 'Location',
        'name'          => 'Name',
        'osTag'         => 'OsTag',
        'schedulerType' => 'SchedulerType',
        'status'        => 'Status',
        'vpcId'         => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountType) {
            $res['AccountType'] = $this->accountType;
        }
        if (null !== $this->clientVersion) {
            $res['ClientVersion'] = $this->clientVersion;
        }
        if (null !== $this->deployMode) {
            $res['DeployMode'] = $this->deployMode;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->hasPlugin) {
            $res['HasPlugin'] = $this->hasPlugin;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->isComputeEss) {
            $res['IsComputeEss'] = $this->isComputeEss;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->osTag) {
            $res['OsTag'] = $this->osTag;
        }
        if (null !== $this->schedulerType) {
            $res['SchedulerType'] = $this->schedulerType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clusterInfoSimple
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
        }
        if (isset($map['ClientVersion'])) {
            $model->clientVersion = $map['ClientVersion'];
        }
        if (isset($map['DeployMode'])) {
            $model->deployMode = $map['DeployMode'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['HasPlugin'])) {
            $model->hasPlugin = $map['HasPlugin'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['IsComputeEss'])) {
            $model->isComputeEss = $map['IsComputeEss'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OsTag'])) {
            $model->osTag = $map['OsTag'];
        }
        if (isset($map['SchedulerType'])) {
            $model->schedulerType = $map['SchedulerType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
