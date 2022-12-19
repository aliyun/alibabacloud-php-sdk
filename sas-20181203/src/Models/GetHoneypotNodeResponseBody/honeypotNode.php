<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetHoneypotNodeResponseBody;

use AlibabaCloud\Tea\Model;

class honeypotNode extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $allowHoneypotAccessInternet;

    /**
     * @example 2022-12-02 17:13:43
     *
     * @var string
     */
    public $createTime;

    /**
     * @example i-2vccskxjunf1ag6wxxpj
     *
     * @var string
     */
    public $ecsInstanceId;

    /**
     * @example 10
     *
     * @var int
     */
    public $honeypotTotalCount;

    /**
     * @example 5
     *
     * @var int
     */
    public $honeypotUsedCount;

    /**
     * @example a7409a58-bc60-41af-9d36-080d58ae5d46
     *
     * @var string
     */
    public $nodeId;

    /**
     * @example 101.37.41.45
     *
     * @var string
     */
    public $nodeIp;

    /**
     * @example gmmc
     *
     * @var string
     */
    public $nodeName;

    /**
     * @example 20
     *
     * @var int
     */
    public $probeTotalCount;

    /**
     * @example 15
     *
     * @var int
     */
    public $probeUsedCount;

    /**
     * @var string[]
     */
    public $securityGroupProbeIpList;

    /**
     * @example 2
     *
     * @var int
     */
    public $totalStatus;

    /**
     * @example true
     *
     * @var bool
     */
    public $upgradeAvailable;
    protected $_name = [
        'allowHoneypotAccessInternet' => 'AllowHoneypotAccessInternet',
        'createTime'                  => 'CreateTime',
        'ecsInstanceId'               => 'EcsInstanceId',
        'honeypotTotalCount'          => 'HoneypotTotalCount',
        'honeypotUsedCount'           => 'HoneypotUsedCount',
        'nodeId'                      => 'NodeId',
        'nodeIp'                      => 'NodeIp',
        'nodeName'                    => 'NodeName',
        'probeTotalCount'             => 'ProbeTotalCount',
        'probeUsedCount'              => 'ProbeUsedCount',
        'securityGroupProbeIpList'    => 'SecurityGroupProbeIpList',
        'totalStatus'                 => 'TotalStatus',
        'upgradeAvailable'            => 'UpgradeAvailable',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowHoneypotAccessInternet) {
            $res['AllowHoneypotAccessInternet'] = $this->allowHoneypotAccessInternet;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->ecsInstanceId) {
            $res['EcsInstanceId'] = $this->ecsInstanceId;
        }
        if (null !== $this->honeypotTotalCount) {
            $res['HoneypotTotalCount'] = $this->honeypotTotalCount;
        }
        if (null !== $this->honeypotUsedCount) {
            $res['HoneypotUsedCount'] = $this->honeypotUsedCount;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->nodeIp) {
            $res['NodeIp'] = $this->nodeIp;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->probeTotalCount) {
            $res['ProbeTotalCount'] = $this->probeTotalCount;
        }
        if (null !== $this->probeUsedCount) {
            $res['ProbeUsedCount'] = $this->probeUsedCount;
        }
        if (null !== $this->securityGroupProbeIpList) {
            $res['SecurityGroupProbeIpList'] = $this->securityGroupProbeIpList;
        }
        if (null !== $this->totalStatus) {
            $res['TotalStatus'] = $this->totalStatus;
        }
        if (null !== $this->upgradeAvailable) {
            $res['UpgradeAvailable'] = $this->upgradeAvailable;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return honeypotNode
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllowHoneypotAccessInternet'])) {
            $model->allowHoneypotAccessInternet = $map['AllowHoneypotAccessInternet'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['EcsInstanceId'])) {
            $model->ecsInstanceId = $map['EcsInstanceId'];
        }
        if (isset($map['HoneypotTotalCount'])) {
            $model->honeypotTotalCount = $map['HoneypotTotalCount'];
        }
        if (isset($map['HoneypotUsedCount'])) {
            $model->honeypotUsedCount = $map['HoneypotUsedCount'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['NodeIp'])) {
            $model->nodeIp = $map['NodeIp'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['ProbeTotalCount'])) {
            $model->probeTotalCount = $map['ProbeTotalCount'];
        }
        if (isset($map['ProbeUsedCount'])) {
            $model->probeUsedCount = $map['ProbeUsedCount'];
        }
        if (isset($map['SecurityGroupProbeIpList'])) {
            if (!empty($map['SecurityGroupProbeIpList'])) {
                $model->securityGroupProbeIpList = $map['SecurityGroupProbeIpList'];
            }
        }
        if (isset($map['TotalStatus'])) {
            $model->totalStatus = $map['TotalStatus'];
        }
        if (isset($map['UpgradeAvailable'])) {
            $model->upgradeAvailable = $map['UpgradeAvailable'];
        }

        return $model;
    }
}
