<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeClientsResponseBody\clients;

use AlibabaCloud\Dara\Model;

class client extends Model
{
    /**
     * @var string
     */
    public $alertSetting;
    /**
     * @var string
     */
    public $clientId;
    /**
     * @var string
     */
    public $clientName;
    /**
     * @var string
     */
    public $clientType;
    /**
     * @var string
     */
    public $clientVersion;
    /**
     * @var string
     */
    public $clusterId;
    /**
     * @var int
     */
    public $createdTime;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $instanceName;
    /**
     * @var string
     */
    public $maxVersion;
    /**
     * @var string
     */
    public $networkType;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $statusMessage;
    /**
     * @var int
     */
    public $updatedTime;
    /**
     * @var bool
     */
    public $useHttps;
    /**
     * @var string
     */
    public $vaultId;
    protected $_name = [
        'alertSetting'  => 'AlertSetting',
        'clientId'      => 'ClientId',
        'clientName'    => 'ClientName',
        'clientType'    => 'ClientType',
        'clientVersion' => 'ClientVersion',
        'clusterId'     => 'ClusterId',
        'createdTime'   => 'CreatedTime',
        'instanceId'    => 'InstanceId',
        'instanceName'  => 'InstanceName',
        'maxVersion'    => 'MaxVersion',
        'networkType'   => 'NetworkType',
        'status'        => 'Status',
        'statusMessage' => 'StatusMessage',
        'updatedTime'   => 'UpdatedTime',
        'useHttps'      => 'UseHttps',
        'vaultId'       => 'VaultId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertSetting) {
            $res['AlertSetting'] = $this->alertSetting;
        }

        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }

        if (null !== $this->clientName) {
            $res['ClientName'] = $this->clientName;
        }

        if (null !== $this->clientType) {
            $res['ClientType'] = $this->clientType;
        }

        if (null !== $this->clientVersion) {
            $res['ClientVersion'] = $this->clientVersion;
        }

        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->maxVersion) {
            $res['MaxVersion'] = $this->maxVersion;
        }

        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->statusMessage) {
            $res['StatusMessage'] = $this->statusMessage;
        }

        if (null !== $this->updatedTime) {
            $res['UpdatedTime'] = $this->updatedTime;
        }

        if (null !== $this->useHttps) {
            $res['UseHttps'] = $this->useHttps;
        }

        if (null !== $this->vaultId) {
            $res['VaultId'] = $this->vaultId;
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
        if (isset($map['AlertSetting'])) {
            $model->alertSetting = $map['AlertSetting'];
        }

        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }

        if (isset($map['ClientName'])) {
            $model->clientName = $map['ClientName'];
        }

        if (isset($map['ClientType'])) {
            $model->clientType = $map['ClientType'];
        }

        if (isset($map['ClientVersion'])) {
            $model->clientVersion = $map['ClientVersion'];
        }

        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['MaxVersion'])) {
            $model->maxVersion = $map['MaxVersion'];
        }

        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['StatusMessage'])) {
            $model->statusMessage = $map['StatusMessage'];
        }

        if (isset($map['UpdatedTime'])) {
            $model->updatedTime = $map['UpdatedTime'];
        }

        if (isset($map['UseHttps'])) {
            $model->useHttps = $map['UseHttps'];
        }

        if (isset($map['VaultId'])) {
            $model->vaultId = $map['VaultId'];
        }

        return $model;
    }
}
