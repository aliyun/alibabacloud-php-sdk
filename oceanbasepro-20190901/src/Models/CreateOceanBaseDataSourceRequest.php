<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Dara\Model;

class CreateOceanBaseDataSourceRequest extends Model
{
    /**
     * @var string
     */
    public $cluster;

    /**
     * @var string
     */
    public $configUrl;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $drcPassword;

    /**
     * @var string
     */
    public $drcUserName;

    /**
     * @var string
     */
    public $innerDrcPassword;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $logProxyIp;

    /**
     * @var string
     */
    public $logProxyPort;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $password;

    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $tenant;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'cluster' => 'Cluster',
        'configUrl' => 'ConfigUrl',
        'description' => 'Description',
        'drcPassword' => 'DrcPassword',
        'drcUserName' => 'DrcUserName',
        'innerDrcPassword' => 'InnerDrcPassword',
        'ip' => 'Ip',
        'logProxyIp' => 'LogProxyIp',
        'logProxyPort' => 'LogProxyPort',
        'name' => 'Name',
        'password' => 'Password',
        'port' => 'Port',
        'tenant' => 'Tenant',
        'type' => 'Type',
        'userName' => 'UserName',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
