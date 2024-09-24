<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeHybridProxyClusterListResponseBody;

use AlibabaCloud\Tea\Model;

class clusterList extends Model
{
    /**
     * @example test
     *
     * @var string
     */
    public $authKey;

    /**
     * @example test
     *
     * @var string
     */
    public $authKeySecret;

    /**
     * @example 10
     *
     * @var int
     */
    public $clientCount;

    /**
     * @example idc-sas-proxy
     *
     * @var string
     */
    public $clusterName;

    /**
     * @example test
     *
     * @var string
     */
    public $installCommand;

    /**
     * @example 114.115.218.145
     *
     * @var string
     */
    public $ip;

    /**
     * @example 1608304654000
     *
     * @var int
     */
    public $lastHeartTime;

    /**
     * @example 3
     *
     * @var int
     */
    public $proxyCount;

    /**
     * @example test
     *
     * @var string
     */
    public $remark;

    /**
     * @example offline
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'authKey'        => 'AuthKey',
        'authKeySecret'  => 'AuthKeySecret',
        'clientCount'    => 'ClientCount',
        'clusterName'    => 'ClusterName',
        'installCommand' => 'InstallCommand',
        'ip'             => 'Ip',
        'lastHeartTime'  => 'LastHeartTime',
        'proxyCount'     => 'ProxyCount',
        'remark'         => 'Remark',
        'status'         => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authKey) {
            $res['AuthKey'] = $this->authKey;
        }
        if (null !== $this->authKeySecret) {
            $res['AuthKeySecret'] = $this->authKeySecret;
        }
        if (null !== $this->clientCount) {
            $res['ClientCount'] = $this->clientCount;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->installCommand) {
            $res['InstallCommand'] = $this->installCommand;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->lastHeartTime) {
            $res['LastHeartTime'] = $this->lastHeartTime;
        }
        if (null !== $this->proxyCount) {
            $res['ProxyCount'] = $this->proxyCount;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clusterList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthKey'])) {
            $model->authKey = $map['AuthKey'];
        }
        if (isset($map['AuthKeySecret'])) {
            $model->authKeySecret = $map['AuthKeySecret'];
        }
        if (isset($map['ClientCount'])) {
            $model->clientCount = $map['ClientCount'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['InstallCommand'])) {
            $model->installCommand = $map['InstallCommand'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['LastHeartTime'])) {
            $model->lastHeartTime = $map['LastHeartTime'];
        }
        if (isset($map['ProxyCount'])) {
            $model->proxyCount = $map['ProxyCount'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
