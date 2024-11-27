<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ListClustersResponseBody\data;

use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ListClustersResponseBody\data\records\vSwitches;
use AlibabaCloud\Tea\Model;

class records extends Model
{
    /**
     * @example PREPAY
     *
     * @var string
     */
    public $chargeType;

    /**
     * @example xxljob-c20f7ec9a78
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example xxl-job-test-1730427510169
     *
     * @var string
     */
    public $clusterName;

    /**
     * @example scx.small.x2
     *
     * @var string
     */
    public $clusterSpec;

    /**
     * @example 2024-10-29 15:56:36
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 2024-10-29 15:56:36
     *
     * @var string
     */
    public $endTime;

    /**
     * @example xxljob
     *
     * @var string
     */
    public $engineType;

    /**
     * @example 2.0.0
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @var string
     */
    public $internetDomain;

    /**
     * @example http://xxljob-b9e19e46c4e.schedulerx.mse.aliyuncs.com
     *
     * @var string
     */
    public $intranetDomain;

    /**
     * @example 1
     *
     * @var int
     */
    public $productType;

    /**
     * @var string
     */
    public $spInstanceId;

    /**
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @var vSwitches[]
     */
    public $vSwitches;

    /**
     * @description VPC ID
     *
     * @example vpc-bp1fxort6ag5h9752i305
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'chargeType'     => 'ChargeType',
        'clusterId'      => 'ClusterId',
        'clusterName'    => 'ClusterName',
        'clusterSpec'    => 'ClusterSpec',
        'createTime'     => 'CreateTime',
        'endTime'        => 'EndTime',
        'engineType'     => 'EngineType',
        'engineVersion'  => 'EngineVersion',
        'internetDomain' => 'InternetDomain',
        'intranetDomain' => 'IntranetDomain',
        'productType'    => 'ProductType',
        'spInstanceId'   => 'SpInstanceId',
        'status'         => 'Status',
        'vSwitches'      => 'VSwitches',
        'vpcId'          => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->clusterSpec) {
            $res['ClusterSpec'] = $this->clusterSpec;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->engineType) {
            $res['EngineType'] = $this->engineType;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->internetDomain) {
            $res['InternetDomain'] = $this->internetDomain;
        }
        if (null !== $this->intranetDomain) {
            $res['IntranetDomain'] = $this->intranetDomain;
        }
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }
        if (null !== $this->spInstanceId) {
            $res['SpInstanceId'] = $this->spInstanceId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->vSwitches) {
            $res['VSwitches'] = [];
            if (null !== $this->vSwitches && \is_array($this->vSwitches)) {
                $n = 0;
                foreach ($this->vSwitches as $item) {
                    $res['VSwitches'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return records
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['ClusterSpec'])) {
            $model->clusterSpec = $map['ClusterSpec'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['EngineType'])) {
            $model->engineType = $map['EngineType'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['InternetDomain'])) {
            $model->internetDomain = $map['InternetDomain'];
        }
        if (isset($map['IntranetDomain'])) {
            $model->intranetDomain = $map['IntranetDomain'];
        }
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }
        if (isset($map['SpInstanceId'])) {
            $model->spInstanceId = $map['SpInstanceId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['VSwitches'])) {
            if (!empty($map['VSwitches'])) {
                $model->vSwitches = [];
                $n                = 0;
                foreach ($map['VSwitches'] as $item) {
                    $model->vSwitches[$n++] = null !== $item ? vSwitches::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
