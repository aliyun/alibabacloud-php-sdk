<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListClusterHealthCheckTaskResponseBody\data;

use AlibabaCloud\SDK\Mse\V20190531\Models\ListClusterHealthCheckTaskResponseBody\data\result\riskList;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The complete version number.
     *
     * @example 1.2.1
     *
     * @var string
     */
    public $appVersion;

    /**
     * @description The billing method.
     *
     * @example PREPAY
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The type of the cluster.
     *
     * @example Nacos-Ans
     *
     * @var string
     */
    public $clusterType;

    /**
     * @description The time when the task was created.
     *
     * @example 2022-06-20T06:51:46Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The serial number.
     *
     * @example 1
     *
     * @var int
     */
    public $id;

    /**
     * @description A redundant parameter.
     *
     * @example null
     *
     * @var string
     */
    public $imageVersion;

    /**
     * @description The instance ID.
     *
     * @example mse_ingresspost-cn-0jbvrcex****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the user to which the cluster belongs.
     *
     * @example 123456
     *
     * @var string
     */
    public $primaryUser;

    /**
     * @description The number of nodes in the cluster.
     *
     * @example 3
     *
     * @var string
     */
    public $replica;

    /**
     * @description The risk items.
     *
     * @var riskList[]
     */
    public $riskList;

    /**
     * @description The total score.
     *
     * @example 60
     *
     * @var int
     */
    public $score;

    /**
     * @description The specifications.
     *
     * @example MSE_SC_2_4_200_c
     *
     * @var string
     */
    public $spec;

    /**
     * @description The task state.
     *
     * @example FINISH
     *
     * @var string
     */
    public $status;

    /**
     * @description The total number of check items.
     *
     * @example 10
     *
     * @var int
     */
    public $totalItem;

    /**
     * @description The total number of risk items.
     *
     * @example 3
     *
     * @var int
     */
    public $totalRisk;

    /**
     * @description A redundant parameter.
     *
     * @example null
     *
     * @var string
     */
    public $type;

    /**
     * @description The time when the task was last updated.
     *
     * @example 2022-11-12 15:07:55
     *
     * @var string
     */
    public $updateTime;

    /**
     * @description The version number.
     *
     * @example NACOS_ANS_1_2_1_3
     *
     * @var string
     */
    public $versionCode;
    protected $_name = [
        'appVersion'   => 'AppVersion',
        'chargeType'   => 'ChargeType',
        'clusterType'  => 'ClusterType',
        'createTime'   => 'CreateTime',
        'id'           => 'Id',
        'imageVersion' => 'ImageVersion',
        'instanceId'   => 'InstanceId',
        'primaryUser'  => 'PrimaryUser',
        'replica'      => 'Replica',
        'riskList'     => 'RiskList',
        'score'        => 'Score',
        'spec'         => 'Spec',
        'status'       => 'Status',
        'totalItem'    => 'TotalItem',
        'totalRisk'    => 'TotalRisk',
        'type'         => 'Type',
        'updateTime'   => 'UpdateTime',
        'versionCode'  => 'VersionCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appVersion) {
            $res['AppVersion'] = $this->appVersion;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->imageVersion) {
            $res['ImageVersion'] = $this->imageVersion;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->primaryUser) {
            $res['PrimaryUser'] = $this->primaryUser;
        }
        if (null !== $this->replica) {
            $res['Replica'] = $this->replica;
        }
        if (null !== $this->riskList) {
            $res['RiskList'] = [];
            if (null !== $this->riskList && \is_array($this->riskList)) {
                $n = 0;
                foreach ($this->riskList as $item) {
                    $res['RiskList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->totalItem) {
            $res['TotalItem'] = $this->totalItem;
        }
        if (null !== $this->totalRisk) {
            $res['TotalRisk'] = $this->totalRisk;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->versionCode) {
            $res['VersionCode'] = $this->versionCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppVersion'])) {
            $model->appVersion = $map['AppVersion'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ImageVersion'])) {
            $model->imageVersion = $map['ImageVersion'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PrimaryUser'])) {
            $model->primaryUser = $map['PrimaryUser'];
        }
        if (isset($map['Replica'])) {
            $model->replica = $map['Replica'];
        }
        if (isset($map['RiskList'])) {
            if (!empty($map['RiskList'])) {
                $model->riskList = [];
                $n               = 0;
                foreach ($map['RiskList'] as $item) {
                    $model->riskList[$n++] = null !== $item ? riskList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TotalItem'])) {
            $model->totalItem = $map['TotalItem'];
        }
        if (isset($map['TotalRisk'])) {
            $model->totalRisk = $map['TotalRisk'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['VersionCode'])) {
            $model->versionCode = $map['VersionCode'];
        }

        return $model;
    }
}
