<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListHoneypotNodeResponseBody;

use AlibabaCloud\Tea\Model;

class honeypotNodeList extends Model
{
    /**
     * @var bool
     */
    public $allowHoneypotAccessInternet;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var bool
     */
    public $defaultNode;

    /**
     * @var string
     */
    public $ecsInstanceId;

    /**
     * @var int
     */
    public $honeypotTotalCount;

    /**
     * @var int
     */
    public $honeypotUsedCount;

    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var string
     */
    public $nodeIp;

    /**
     * @var string
     */
    public $nodeName;

    /**
     * @var int
     */
    public $probeTotalCount;

    /**
     * @var int
     */
    public $probeUsedCount;

    /**
     * @var string[]
     */
    public $securityGroupProbeIpList;

    /**
     * @var int
     */
    public $totalStatus;
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

        return $model;
    }
}
