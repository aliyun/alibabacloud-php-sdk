<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListHoneypotNodeResponseBody;

use AlibabaCloud\Tea\Model;

class honeypotNodeList extends Model
{
    /**
     * @description Indicates whether a honeypot is allowed to access the Internet. Valid values:
     *
     *   **true**: The honeypot is allowed to access the Internet.
     *   **false**: The honeypot is not allowed to access the Internet.
     *
     * @example true
     *
     * @var bool
     */
    public $allowHoneypotAccessInternet;

    /**
     * @description The time when the management node was created.
     *
     * @example 2022-08-04 15:52:56
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The type of the management node. Default value: **false**. Valid values:
     *
     *   **false**: non-default type
     *   **true**: default type
     *
     * @example false
     *
     * @var bool
     */
    public $defaultNode;

    /**
     * @description The ID of the instance.
     *
     * @example i-bp1fs3qsc1msa3512k****
     *
     * @var string
     */
    public $ecsInstanceId;

    /**
     * @description The maximum number of honeypots that can be deployed to the management node.
     *
     * @example 10
     *
     * @var int
     */
    public $honeypotTotalCount;

    /**
     * @description The number of honeypots that are deployed to the management node.
     *
     * @example 2
     *
     * @var int
     */
    public $honeypotUsedCount;

    /**
     * @description The ID of the management node.
     *
     * @example 7d110ca6-05ee-4149-8042-13ad1a41fd****
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The IP address of the management node.
     *
     * @example 119.180.XX.XX
     *
     * @var string
     */
    public $nodeIp;

    /**
     * @description The name of the management node.
     *
     * @example cyct_cnymu
     *
     * @var string
     */
    public $nodeName;

    /**
     * @description The maximum number of probes that can be deployed for the management node.
     *
     * @example 5
     *
     * @var int
     */
    public $probeTotalCount;

    /**
     * @description The number of probes that are deployed for the management node.
     *
     * @example 2
     *
     * @var int
     */
    public $probeUsedCount;

    /**
     * @description An array consisting of the CIDR blocks that are allowed to access the management node.
     *
     * @var string[]
     */
    public $securityGroupProbeIpList;

    /**
     * @description The status of the management node. Valid values:
     *
     *   **1**: normal
     *   **2**: abnormal
     *
     * @example 1
     *
     * @var int
     */
    public $totalStatus;

    /**
     * @description Indicates whether the management node can be upgraded. Valid values:
     *
     *   **false**: no
     *   **true**: yes
     *
     * @example true
     *
     * @var bool
     */
    public $upgradeAvailable;
    protected $_name = [
        'allowHoneypotAccessInternet' => 'AllowHoneypotAccessInternet',
        'createTime'                  => 'CreateTime',
        'defaultNode'                 => 'DefaultNode',
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
        if (null !== $this->defaultNode) {
            $res['DefaultNode'] = $this->defaultNode;
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
     * @return honeypotNodeList
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
        if (isset($map['DefaultNode'])) {
            $model->defaultNode = $map['DefaultNode'];
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
