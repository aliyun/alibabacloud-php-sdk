<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeHybridProxyClusterListResponseBody;

use AlibabaCloud\Tea\Model;

class clusterList extends Model
{
    /**
     * @description The ID of the credential that is used for cluster authentication.
     *
     * @example test
     *
     * @var string
     */
    public $authKey;

    /**
     * @description The key of the credential that is used for cluster authentication.
     *
     * @example test
     *
     * @var string
     */
    public $authKeySecret;

    /**
     * @description The number of servers that are connected to the proxy cluster.
     *
     * @example 10
     *
     * @var int
     */
    public $clientCount;

    /**
     * @description The name of the proxy cluster.
     *
     * @example idc-sas-proxy
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description The installation command for the node of the proxy cluster.
     *
     * @example test
     *
     * @var string
     */
    public $installCommand;

    /**
     * @description The endpoint of the cluster. An IP address or a domain name is specified.
     *
     * @example 114.115.XXX.XXX
     *
     * @var string
     */
    public $ip;

    /**
     * @description The timestamp when the cluster last sent a heartbeat message. Unit: milliseconds.
     *
     * @example 1608304654000
     *
     * @var int
     */
    public $lastHeartTime;

    /**
     * @description The number of proxy nodes.
     *
     * @example 3
     *
     * @var int
     */
    public $proxyCount;

    /**
     * @description The description of the proxy cluster.
     *
     * @example test
     *
     * @var string
     */
    public $remark;

    /**
     * @description The status of the cluster.
     *
     * @example offline
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'authKey' => 'AuthKey',
        'authKeySecret' => 'AuthKeySecret',
        'clientCount' => 'ClientCount',
        'clusterName' => 'ClusterName',
        'installCommand' => 'InstallCommand',
        'ip' => 'Ip',
        'lastHeartTime' => 'LastHeartTime',
        'proxyCount' => 'ProxyCount',
        'remark' => 'Remark',
        'status' => 'Status',
    ];

    public function validate() {}

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
