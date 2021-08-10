<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20190620\Models\DescribeDBInstancesForDmsResponseBody;

use AlibabaCloud\Tea\Model;

class instances extends Model
{
    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $aliUid;

    /**
     * @var string
     */
    public $port;

    /**
     * @var string
     */
    public $bid;

    /**
     * @var string
     */
    public $vpcCloudInstanceId;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $dbType;

    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $connectionString;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $instanceNetworkType;

    /**
     * @var string
     */
    public $dbInstanceName;

    /**
     * @var string
     */
    public $vpcIp;
    protected $_name = [
        'vpcId'               => 'VpcId',
        'aliUid'              => 'AliUid',
        'port'                => 'Port',
        'bid'                 => 'Bid',
        'vpcCloudInstanceId'  => 'VpcCloudInstanceId',
        'vSwitchId'           => 'VSwitchId',
        'description'         => 'Description',
        'dbType'              => 'DbType',
        'version'             => 'Version',
        'connectionString'    => 'ConnectionString',
        'region'              => 'Region',
        'instanceNetworkType' => 'InstanceNetworkType',
        'dbInstanceName'      => 'DbInstanceName',
        'vpcIp'               => 'VpcIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->bid) {
            $res['Bid'] = $this->bid;
        }
        if (null !== $this->vpcCloudInstanceId) {
            $res['VpcCloudInstanceId'] = $this->vpcCloudInstanceId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->connectionString) {
            $res['ConnectionString'] = $this->connectionString;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->instanceNetworkType) {
            $res['InstanceNetworkType'] = $this->instanceNetworkType;
        }
        if (null !== $this->dbInstanceName) {
            $res['DbInstanceName'] = $this->dbInstanceName;
        }
        if (null !== $this->vpcIp) {
            $res['VpcIp'] = $this->vpcIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Bid'])) {
            $model->bid = $map['Bid'];
        }
        if (isset($map['VpcCloudInstanceId'])) {
            $model->vpcCloudInstanceId = $map['VpcCloudInstanceId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['ConnectionString'])) {
            $model->connectionString = $map['ConnectionString'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['InstanceNetworkType'])) {
            $model->instanceNetworkType = $map['InstanceNetworkType'];
        }
        if (isset($map['DbInstanceName'])) {
            $model->dbInstanceName = $map['DbInstanceName'];
        }
        if (isset($map['VpcIp'])) {
            $model->vpcIp = $map['VpcIp'];
        }

        return $model;
    }
}
