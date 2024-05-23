<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class CreateOceanBaseDataSourceRequest extends Model
{
    /**
     * @example cluster_name
     *
     * @var string
     */
    public $cluster;

    /**
     * @example http://xxx.xxx.xxx.2:2883/services?Action=ObRootServiceInfo&User_ID=alibaba&UID=ocpmaster&ObRegion=ob_1***29.admin
     *
     * @var string
     */
    public $configUrl;

    /**
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @example pas***
     *
     * @var string
     */
    public $drcPassword;

    /**
     * @example user_na***
     *
     * @var string
     */
    public $drcUserName;

    /**
     * @example in***
     *
     * @var string
     */
    public $innerDrcPassword;

    /**
     * @example xxx.xxx.xxx.1
     *
     * @var string
     */
    public $ip;

    /**
     * @description LogProxy IP。
     *
     * @example null
     *
     * @var string
     */
    public $logProxyIp;

    /**
     * @example null
     *
     * @var string
     */
    public $logProxyPort;

    /**
     * @description This parameter is required.
     *
     * @example source_name
     *
     * @var string
     */
    public $name;

    /**
     * @description This parameter is required.
     *
     * @example pass_word
     *
     * @var string
     */
    public $password;

    /**
     * @example 2883
     *
     * @var int
     */
    public $port;

    /**
     * @description This parameter is required.
     *
     * @example tenant_name
     *
     * @var string
     */
    public $tenant;

    /**
     * @description This parameter is required.
     *
     * @example OB_MYSQL_VPC
     *
     * @var string
     */
    public $type;

    /**
     * @description This parameter is required.
     *
     * @example user_name
     *
     * @var string
     */
    public $userName;

    /**
     * @example vpc-bp1d2q3mhg9i23ofi****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'cluster'          => 'Cluster',
        'configUrl'        => 'ConfigUrl',
        'description'      => 'Description',
        'drcPassword'      => 'DrcPassword',
        'drcUserName'      => 'DrcUserName',
        'innerDrcPassword' => 'InnerDrcPassword',
        'ip'               => 'Ip',
        'logProxyIp'       => 'LogProxyIp',
        'logProxyPort'     => 'LogProxyPort',
        'name'             => 'Name',
        'password'         => 'Password',
        'port'             => 'Port',
        'tenant'           => 'Tenant',
        'type'             => 'Type',
        'userName'         => 'UserName',
        'vpcId'            => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cluster) {
            $res['Cluster'] = $this->cluster;
        }
        if (null !== $this->configUrl) {
            $res['ConfigUrl'] = $this->configUrl;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->drcPassword) {
            $res['DrcPassword'] = $this->drcPassword;
        }
        if (null !== $this->drcUserName) {
            $res['DrcUserName'] = $this->drcUserName;
        }
        if (null !== $this->innerDrcPassword) {
            $res['InnerDrcPassword'] = $this->innerDrcPassword;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->logProxyIp) {
            $res['LogProxyIp'] = $this->logProxyIp;
        }
        if (null !== $this->logProxyPort) {
            $res['LogProxyPort'] = $this->logProxyPort;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->tenant) {
            $res['Tenant'] = $this->tenant;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateOceanBaseDataSourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cluster'])) {
            $model->cluster = $map['Cluster'];
        }
        if (isset($map['ConfigUrl'])) {
            $model->configUrl = $map['ConfigUrl'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DrcPassword'])) {
            $model->drcPassword = $map['DrcPassword'];
        }
        if (isset($map['DrcUserName'])) {
            $model->drcUserName = $map['DrcUserName'];
        }
        if (isset($map['InnerDrcPassword'])) {
            $model->innerDrcPassword = $map['InnerDrcPassword'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['LogProxyIp'])) {
            $model->logProxyIp = $map['LogProxyIp'];
        }
        if (isset($map['LogProxyPort'])) {
            $model->logProxyPort = $map['LogProxyPort'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Tenant'])) {
            $model->tenant = $map['Tenant'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
