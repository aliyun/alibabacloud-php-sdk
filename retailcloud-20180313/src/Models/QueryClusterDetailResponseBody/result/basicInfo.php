<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailcloud\V20180313\Models\QueryClusterDetailResponseBody\result;

use AlibabaCloud\Tea\Model;

class basicInfo extends Model
{
    /**
     * @var string
     */
    public $businessCode;

    /**
     * @var int
     */
    public $clusterId;

    /**
     * @var string
     */
    public $clusterInstanceId;

    /**
     * @var string
     */
    public $clusterName;

    /**
     * @var string[]
     */
    public $ecsIds;

    /**
     * @var string
     */
    public $envType;

    /**
     * @var bool
     */
    public $hasInstallArmsPilot;

    /**
     * @var bool
     */
    public $hasInstallLogController;

    /**
     * @var bool
     */
    public $installArmsInProcess;

    /**
     * @var bool
     */
    public $installLogInProcess;

    /**
     * @var string
     */
    public $mainUserId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $regionName;

    /**
     * @var string
     */
    public $userNick;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string[]
     */
    public $vswitchs;
    protected $_name = [
        'businessCode'            => 'BusinessCode',
        'clusterId'               => 'ClusterId',
        'clusterInstanceId'       => 'ClusterInstanceId',
        'clusterName'             => 'ClusterName',
        'ecsIds'                  => 'EcsIds',
        'envType'                 => 'EnvType',
        'hasInstallArmsPilot'     => 'HasInstallArmsPilot',
        'hasInstallLogController' => 'HasInstallLogController',
        'installArmsInProcess'    => 'InstallArmsInProcess',
        'installLogInProcess'     => 'InstallLogInProcess',
        'mainUserId'              => 'MainUserId',
        'regionId'                => 'RegionId',
        'regionName'              => 'RegionName',
        'userNick'                => 'UserNick',
        'vpcId'                   => 'VpcId',
        'vswitchs'                => 'Vswitchs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessCode) {
            $res['BusinessCode'] = $this->businessCode;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->clusterInstanceId) {
            $res['ClusterInstanceId'] = $this->clusterInstanceId;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->ecsIds) {
            $res['EcsIds'] = $this->ecsIds;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->hasInstallArmsPilot) {
            $res['HasInstallArmsPilot'] = $this->hasInstallArmsPilot;
        }
        if (null !== $this->hasInstallLogController) {
            $res['HasInstallLogController'] = $this->hasInstallLogController;
        }
        if (null !== $this->installArmsInProcess) {
            $res['InstallArmsInProcess'] = $this->installArmsInProcess;
        }
        if (null !== $this->installLogInProcess) {
            $res['InstallLogInProcess'] = $this->installLogInProcess;
        }
        if (null !== $this->mainUserId) {
            $res['MainUserId'] = $this->mainUserId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->regionName) {
            $res['RegionName'] = $this->regionName;
        }
        if (null !== $this->userNick) {
            $res['UserNick'] = $this->userNick;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vswitchs) {
            $res['Vswitchs'] = $this->vswitchs;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return basicInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessCode'])) {
            $model->businessCode = $map['BusinessCode'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ClusterInstanceId'])) {
            $model->clusterInstanceId = $map['ClusterInstanceId'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['EcsIds'])) {
            if (!empty($map['EcsIds'])) {
                $model->ecsIds = $map['EcsIds'];
            }
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['HasInstallArmsPilot'])) {
            $model->hasInstallArmsPilot = $map['HasInstallArmsPilot'];
        }
        if (isset($map['HasInstallLogController'])) {
            $model->hasInstallLogController = $map['HasInstallLogController'];
        }
        if (isset($map['InstallArmsInProcess'])) {
            $model->installArmsInProcess = $map['InstallArmsInProcess'];
        }
        if (isset($map['InstallLogInProcess'])) {
            $model->installLogInProcess = $map['InstallLogInProcess'];
        }
        if (isset($map['MainUserId'])) {
            $model->mainUserId = $map['MainUserId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RegionName'])) {
            $model->regionName = $map['RegionName'];
        }
        if (isset($map['UserNick'])) {
            $model->userNick = $map['UserNick'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['Vswitchs'])) {
            if (!empty($map['Vswitchs'])) {
                $model->vswitchs = $map['Vswitchs'];
            }
        }

        return $model;
    }
}
