<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListClusterInterceptionConfigResponseBody;

use AlibabaCloud\Tea\Model;

class clusterConfigList extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $clusterCNNFStatus;

    /**
     * @example c9051d30d8a044b4d99e1cb5d25ac****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example container-opa-kill-02
     *
     * @var string
     */
    public $clusterName;

    /**
     * @example ManagedKubernetes
     *
     * @var string
     */
    public $clusterType;

    /**
     * @example 1
     *
     * @var int
     */
    public $interceptionSwitch;

    /**
     * @example 12
     *
     * @var int
     */
    public $openRuleCount;

    /**
     * @example false
     *
     * @var bool
     */
    public $supportCNNF;

    /**
     * @example 123
     *
     * @var int
     */
    public $totalRuleCount;
    protected $_name = [
        'clusterCNNFStatus'  => 'ClusterCNNFStatus',
        'clusterId'          => 'ClusterId',
        'clusterName'        => 'ClusterName',
        'clusterType'        => 'ClusterType',
        'interceptionSwitch' => 'InterceptionSwitch',
        'openRuleCount'      => 'OpenRuleCount',
        'supportCNNF'        => 'SupportCNNF',
        'totalRuleCount'     => 'TotalRuleCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterCNNFStatus) {
            $res['ClusterCNNFStatus'] = $this->clusterCNNFStatus;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }
        if (null !== $this->interceptionSwitch) {
            $res['InterceptionSwitch'] = $this->interceptionSwitch;
        }
        if (null !== $this->openRuleCount) {
            $res['OpenRuleCount'] = $this->openRuleCount;
        }
        if (null !== $this->supportCNNF) {
            $res['SupportCNNF'] = $this->supportCNNF;
        }
        if (null !== $this->totalRuleCount) {
            $res['TotalRuleCount'] = $this->totalRuleCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clusterConfigList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterCNNFStatus'])) {
            $model->clusterCNNFStatus = $map['ClusterCNNFStatus'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }
        if (isset($map['InterceptionSwitch'])) {
            $model->interceptionSwitch = $map['InterceptionSwitch'];
        }
        if (isset($map['OpenRuleCount'])) {
            $model->openRuleCount = $map['OpenRuleCount'];
        }
        if (isset($map['SupportCNNF'])) {
            $model->supportCNNF = $map['SupportCNNF'];
        }
        if (isset($map['TotalRuleCount'])) {
            $model->totalRuleCount = $map['TotalRuleCount'];
        }

        return $model;
    }
}
