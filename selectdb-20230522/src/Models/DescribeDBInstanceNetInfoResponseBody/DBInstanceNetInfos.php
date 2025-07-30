<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Selectdb\V20230522\Models\DescribeDBInstanceNetInfoResponseBody;

use AlibabaCloud\SDK\Selectdb\V20230522\Models\DescribeDBInstanceNetInfoResponseBody\DBInstanceNetInfos\portList;
use AlibabaCloud\Tea\Model;

class DBInstanceNetInfos extends Model
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
     * @description The connection string of the instance.
     *
     * @example selectdb-cn-h033cnd****-fe.selectdbfe.pre.rds.aliyuncs.com
     *
     * @var string
     */
    public $connectionString;

    /**
     * @description The IP address of the instance.
     *
     * @example 172.16.XX.XX
     *
     * @var string
     */
    public $ip;

    /**
     * @description The network type of the instance. Valid values:
     *
     *   **VPC**: indicates a virtual private cloud (VPC)-connected instance.
     *   **PUBLIC**: indicates an Internet-connected instance.
     *
     * @example VPC
     *
     * @var string
     */
    public $netType;

    /**
     * @description The ports.
     *
     * @var portList[]
     */
    public $portList;

    /**
     * @description Indicates whether the network information is visible to users. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $userVisible;

    /**
     * @description The VPC ID.
     *
     * @example vpc-wz90scxq6ods388ft****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The ID of the VPC-connected instance.
     *
     * @example selectdb-cn-h033cnd****-fe-20230816101006
     *
     * @var string
     */
    public $vpcInstanceId;

    /**
     * @description The vSwitch ID.
     *
     * @example vsw-uf6mlqti065rer6m0****
     *
     * @var string
     */
    public $vswitchId;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'connectionString' => 'ConnectionString',
        'ip' => 'Ip',
        'netType' => 'NetType',
        'portList' => 'PortList',
        'userVisible' => 'UserVisible',
        'vpcId' => 'VpcId',
        'vpcInstanceId' => 'VpcInstanceId',
        'vswitchId' => 'VswitchId',
    ];

    public function validate() {}

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
     * @return DBInstanceNetInfos
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
                $n = 0;
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
