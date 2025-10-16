<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeAckClusterConnectorsResponseBody;

use AlibabaCloud\Dara\Model;

class ackClusterConnectors extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $clusterName;

    /**
     * @var string
     */
    public $connectorHealthCheckStatus;

    /**
     * @var string
     */
    public $connectorId;

    /**
     * @var string
     */
    public $connectorName;

    /**
     * @var string
     */
    public $connectorStatus;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string[]
     */
    public $groupUuids;

    /**
     * @var string
     */
    public $memberUid;

    /**
     * @var string
     */
    public $primaryVswitchId;

    /**
     * @var string
     */
    public $primaryVswitchIp;

    /**
     * @var string
     */
    public $primaryVswitchZoneId;

    /**
     * @var string
     */
    public $regionNo;

    /**
     * @var string
     */
    public $standbyVswitchId;

    /**
     * @var string
     */
    public $standbyVswitchIp;

    /**
     * @var string
     */
    public $standbyVswitchZoneId;

    /**
     * @var int
     */
    public $ttl;

    /**
     * @var string
     */
    public $unhealthyReason;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'clusterName' => 'ClusterName',
        'connectorHealthCheckStatus' => 'ConnectorHealthCheckStatus',
        'connectorId' => 'ConnectorId',
        'connectorName' => 'ConnectorName',
        'connectorStatus' => 'ConnectorStatus',
        'createTime' => 'CreateTime',
        'groupUuids' => 'GroupUuids',
        'memberUid' => 'MemberUid',
        'primaryVswitchId' => 'PrimaryVswitchId',
        'primaryVswitchIp' => 'PrimaryVswitchIp',
        'primaryVswitchZoneId' => 'PrimaryVswitchZoneId',
        'regionNo' => 'RegionNo',
        'standbyVswitchId' => 'StandbyVswitchId',
        'standbyVswitchIp' => 'StandbyVswitchIp',
        'standbyVswitchZoneId' => 'StandbyVswitchZoneId',
        'ttl' => 'Ttl',
        'unhealthyReason' => 'UnhealthyReason',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        if (\is_array($this->groupUuids)) {
            Model::validateArray($this->groupUuids);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }

        if (null !== $this->connectorHealthCheckStatus) {
            $res['ConnectorHealthCheckStatus'] = $this->connectorHealthCheckStatus;
        }

        if (null !== $this->connectorId) {
            $res['ConnectorId'] = $this->connectorId;
        }

        if (null !== $this->connectorName) {
            $res['ConnectorName'] = $this->connectorName;
        }

        if (null !== $this->connectorStatus) {
            $res['ConnectorStatus'] = $this->connectorStatus;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->groupUuids) {
            if (\is_array($this->groupUuids)) {
                $res['GroupUuids'] = [];
                $n1 = 0;
                foreach ($this->groupUuids as $item1) {
                    $res['GroupUuids'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->memberUid) {
            $res['MemberUid'] = $this->memberUid;
        }

        if (null !== $this->primaryVswitchId) {
            $res['PrimaryVswitchId'] = $this->primaryVswitchId;
        }

        if (null !== $this->primaryVswitchIp) {
            $res['PrimaryVswitchIp'] = $this->primaryVswitchIp;
        }

        if (null !== $this->primaryVswitchZoneId) {
            $res['PrimaryVswitchZoneId'] = $this->primaryVswitchZoneId;
        }

        if (null !== $this->regionNo) {
            $res['RegionNo'] = $this->regionNo;
        }

        if (null !== $this->standbyVswitchId) {
            $res['StandbyVswitchId'] = $this->standbyVswitchId;
        }

        if (null !== $this->standbyVswitchIp) {
            $res['StandbyVswitchIp'] = $this->standbyVswitchIp;
        }

        if (null !== $this->standbyVswitchZoneId) {
            $res['StandbyVswitchZoneId'] = $this->standbyVswitchZoneId;
        }

        if (null !== $this->ttl) {
            $res['Ttl'] = $this->ttl;
        }

        if (null !== $this->unhealthyReason) {
            $res['UnhealthyReason'] = $this->unhealthyReason;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }

        if (isset($map['ConnectorHealthCheckStatus'])) {
            $model->connectorHealthCheckStatus = $map['ConnectorHealthCheckStatus'];
        }

        if (isset($map['ConnectorId'])) {
            $model->connectorId = $map['ConnectorId'];
        }

        if (isset($map['ConnectorName'])) {
            $model->connectorName = $map['ConnectorName'];
        }

        if (isset($map['ConnectorStatus'])) {
            $model->connectorStatus = $map['ConnectorStatus'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['GroupUuids'])) {
            if (!empty($map['GroupUuids'])) {
                $model->groupUuids = [];
                $n1 = 0;
                foreach ($map['GroupUuids'] as $item1) {
                    $model->groupUuids[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['MemberUid'])) {
            $model->memberUid = $map['MemberUid'];
        }

        if (isset($map['PrimaryVswitchId'])) {
            $model->primaryVswitchId = $map['PrimaryVswitchId'];
        }

        if (isset($map['PrimaryVswitchIp'])) {
            $model->primaryVswitchIp = $map['PrimaryVswitchIp'];
        }

        if (isset($map['PrimaryVswitchZoneId'])) {
            $model->primaryVswitchZoneId = $map['PrimaryVswitchZoneId'];
        }

        if (isset($map['RegionNo'])) {
            $model->regionNo = $map['RegionNo'];
        }

        if (isset($map['StandbyVswitchId'])) {
            $model->standbyVswitchId = $map['StandbyVswitchId'];
        }

        if (isset($map['StandbyVswitchIp'])) {
            $model->standbyVswitchIp = $map['StandbyVswitchIp'];
        }

        if (isset($map['StandbyVswitchZoneId'])) {
            $model->standbyVswitchZoneId = $map['StandbyVswitchZoneId'];
        }

        if (isset($map['Ttl'])) {
            $model->ttl = $map['Ttl'];
        }

        if (isset($map['UnhealthyReason'])) {
            $model->unhealthyReason = $map['UnhealthyReason'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
