<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBInstanceViaEndpointResponseBody\DBInstance;

use AlibabaCloud\Tea\Model;

class connAddrs extends Model
{
    /**
     * @example polardbx-xxx.aliyuncs.com
     *
     * @var string
     */
    public $connectionString;

    /**
     * @example 3306
     *
     * @var int
     */
    public $port;

    /**
     * @example VPC
     *
     * @var string
     */
    public $type;

    /**
     * @description VPC ID。
     *
     * @example vpc-xxxxxx
     *
     * @var string
     */
    public $VPCId;

    /**
     * @example vsw-*********
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @example pxc-zkralxpc5d****
     *
     * @var string
     */
    public $vpcInstanceId;
    protected $_name = [
        'connectionString' => 'ConnectionString',
        'port'             => 'Port',
        'type'             => 'Type',
        'VPCId'            => 'VPCId',
        'vSwitchId'        => 'VSwitchId',
        'vpcInstanceId'    => 'VpcInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectionString) {
            $res['ConnectionString'] = $this->connectionString;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->VPCId) {
            $res['VPCId'] = $this->VPCId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcInstanceId) {
            $res['VpcInstanceId'] = $this->vpcInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return connAddrs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectionString'])) {
            $model->connectionString = $map['ConnectionString'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['VPCId'])) {
            $model->VPCId = $map['VPCId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VpcInstanceId'])) {
            $model->vpcInstanceId = $map['VpcInstanceId'];
        }

        return $model;
    }
}
