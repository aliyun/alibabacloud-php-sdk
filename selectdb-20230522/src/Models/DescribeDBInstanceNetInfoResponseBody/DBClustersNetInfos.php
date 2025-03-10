<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Selectdb\V20230522\Models\DescribeDBInstanceNetInfoResponseBody;

use AlibabaCloud\SDK\Selectdb\V20230522\Models\DescribeDBInstanceNetInfoResponseBody\DBClustersNetInfos\portList;
use AlibabaCloud\Tea\Model;

class DBClustersNetInfos extends Model
{
    /**
     * @description The cluster ID.
     *
     * @example selectdb-cn-****-be
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The connection string of the BE cluster.
     *
     * @example selectdb-cn-****-fe.selectdbfe.pre.rds.aliyuncs.com
     *
     * @var string
     */
    public $connectionString;

    /**
     * @description The IP address of the BE cluster.
     *
     * @example 8.131.***.***
     *
     * @var string
     */
    public $ip;

    /**
     * @description The network type of the BE cluster.
     *
     * @example VPC/PUBLIC
     *
     * @var string
     */
    public $netType;

    /**
     * @var portList[]
     */
    public $portList;

    /**
     * @description Indicates whether the network information is visible to users.
     *
     * @example true/false
     *
     * @var bool
     */
    public $userVisible;

    /**
     * @description VPC ID
     *
     * @example vpc-****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The VPC ID.
     *
     * @example selectdb-cn-****-fe-20230816101006
     *
     * @var string
     */
    public $vpcInstanceId;

    /**
     * @description The vSwitch ID.
     *
     * @example vsw-****
     *
     * @var string
     */
    public $vswitchId;
    protected $_name = [
        'clusterId'        => 'ClusterId',
        'connectionString' => 'ConnectionString',
        'ip'               => 'Ip',
        'netType'          => 'NetType',
        'portList'         => 'PortList',
        'userVisible'      => 'UserVisible',
        'vpcId'            => 'VpcId',
        'vpcInstanceId'    => 'VpcInstanceId',
        'vswitchId'        => 'VswitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->connectionString) {
            $res['ConnectionString'] = $this->connectionString;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->netType) {
            $res['NetType'] = $this->netType;
        }
        if (null !== $this->portList) {
            $res['PortList'] = [];
            if (null !== $this->portList && \is_array($this->portList)) {
                $n = 0;
                foreach ($this->portList as $item) {
                    $res['PortList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->userVisible) {
            $res['UserVisible'] = $this->userVisible;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vpcInstanceId) {
            $res['VpcInstanceId'] = $this->vpcInstanceId;
        }
        if (null !== $this->vswitchId) {
            $res['VswitchId'] = $this->vswitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBClustersNetInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ConnectionString'])) {
            $model->connectionString = $map['ConnectionString'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['NetType'])) {
            $model->netType = $map['NetType'];
        }
        if (isset($map['PortList'])) {
            if (!empty($map['PortList'])) {
                $model->portList = [];
                $n               = 0;
                foreach ($map['PortList'] as $item) {
                    $model->portList[$n++] = null !== $item ? portList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UserVisible'])) {
            $model->userVisible = $map['UserVisible'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VpcInstanceId'])) {
            $model->vpcInstanceId = $map['VpcInstanceId'];
        }
        if (isset($map['VswitchId'])) {
            $model->vswitchId = $map['VswitchId'];
        }

        return $model;
    }
}
