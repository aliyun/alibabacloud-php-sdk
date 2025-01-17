<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeHybridProxyClusterListResponseBody;

use AlibabaCloud\Dara\Model;

class clusterList extends Model
{
    /**
     * @var string
     */
    public $authKey;
    /**
     * @var string
     */
    public $authKeySecret;
    /**
     * @var int
     */
    public $clientCount;
    /**
     * @var string
     */
    public $clusterName;
    /**
     * @var string
     */
    public $installCommand;
    /**
     * @var string
     */
    public $ip;
    /**
     * @var int
     */
    public $lastHeartTime;
    /**
     * @var int
     */
    public $proxyCount;
    /**
     * @var string
     */
    public $remark;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
