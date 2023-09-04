<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20190620\Models\DescribeDBInstanceForDmsResponseBody;

use AlibabaCloud\Tea\Model;

class instance extends Model
{
    /**
     * @example 253460731706911258
     *
     * @var string
     */
    public $aliUid;

    /**
     * @example *****
     *
     * @var string
     */
    public $bid;

    /**
     * @example gp-bp12ga6v69h86****-master.gpdbmaster.singapore.rds.aliyuncs.com
     *
     * @var string
     */
    public $connectionString;

    /**
     * @example gp-bp12ga6v69h86****
     *
     * @var string
     */
    public $dbInstanceName;

    /**
     * @example gpdb
     *
     * @var string
     */
    public $dbType;

    /**
     * @example ”“
     *
     * @var string
     */
    public $description;

    /**
     * @example vpc
     *
     * @var string
     */
    public $instanceNetworkType;

    /**
     * @example 5432
     *
     * @var string
     */
    public $port;

    /**
     * @example ap-southeast-1
     *
     * @var string
     */
    public $region;

    /**
     * @example vsw-bp1cpq8mr64paltkb****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @example 6.0
     *
     * @var string
     */
    public $version;

    /**
     * @example vpc-bp19ame5m1r3oejns****
     *
     * @var string
     */
    public $vpcCloudInstanceId;

    /**
     * @example vpc-bp19ame5m1r3oejns****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @example 172.16.0.140
     *
     * @var string
     */
    public $vpcIp;
    protected $_name = [
        'aliUid'              => 'AliUid',
        'bid'                 => 'Bid',
        'connectionString'    => 'ConnectionString',
        'dbInstanceName'      => 'DbInstanceName',
        'dbType'              => 'DbType',
        'description'         => 'Description',
        'instanceNetworkType' => 'InstanceNetworkType',
        'port'                => 'Port',
        'region'              => 'Region',
        'vSwitchId'           => 'VSwitchId',
        'version'             => 'Version',
        'vpcCloudInstanceId'  => 'VpcCloudInstanceId',
        'vpcId'               => 'VpcId',
        'vpcIp'               => 'VpcIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->bid) {
            $res['Bid'] = $this->bid;
        }
        if (null !== $this->connectionString) {
            $res['ConnectionString'] = $this->connectionString;
        }
        if (null !== $this->dbInstanceName) {
            $res['DbInstanceName'] = $this->dbInstanceName;
        }
        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->instanceNetworkType) {
            $res['InstanceNetworkType'] = $this->instanceNetworkType;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->vpcCloudInstanceId) {
            $res['VpcCloudInstanceId'] = $this->vpcCloudInstanceId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vpcIp) {
            $res['VpcIp'] = $this->vpcIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['Bid'])) {
            $model->bid = $map['Bid'];
        }
        if (isset($map['ConnectionString'])) {
            $model->connectionString = $map['ConnectionString'];
        }
        if (isset($map['DbInstanceName'])) {
            $model->dbInstanceName = $map['DbInstanceName'];
        }
        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['InstanceNetworkType'])) {
            $model->instanceNetworkType = $map['InstanceNetworkType'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['VpcCloudInstanceId'])) {
            $model->vpcCloudInstanceId = $map['VpcCloudInstanceId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VpcIp'])) {
            $model->vpcIp = $map['VpcIp'];
        }

        return $model;
    }
}
