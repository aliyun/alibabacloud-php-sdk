<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Dara\Model;

class UpdateClientSettingsRequest extends Model
{
    /**
     * @var bool
     */
    public $alertOnPartialComplete;

    /**
     * @var string
     */
    public $clientId;

    /**
     * @var string
     */
    public $dataNetworkType;

    /**
     * @var string
     */
    public $dataProxySetting;

    /**
     * @var int
     */
    public $maxCpuCore;

    /**
     * @var int
     */
    public $maxMemory;

    /**
     * @var int
     */
    public $maxWorker;

    /**
     * @var string
     */
    public $proxyHost;

    /**
     * @var string
     */
    public $proxyPassword;

    /**
     * @var int
     */
    public $proxyPort;

    /**
     * @var string
     */
    public $proxyUser;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var bool
     */
    public $useHttps;

    /**
     * @var string
     */
    public $vaultId;
    protected $_name = [
        'alertOnPartialComplete' => 'AlertOnPartialComplete',
        'clientId' => 'ClientId',
        'dataNetworkType' => 'DataNetworkType',
        'dataProxySetting' => 'DataProxySetting',
        'maxCpuCore' => 'MaxCpuCore',
        'maxMemory' => 'MaxMemory',
        'maxWorker' => 'MaxWorker',
        'proxyHost' => 'ProxyHost',
        'proxyPassword' => 'ProxyPassword',
        'proxyPort' => 'ProxyPort',
        'proxyUser' => 'ProxyUser',
        'resourceGroupId' => 'ResourceGroupId',
        'useHttps' => 'UseHttps',
        'vaultId' => 'VaultId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertOnPartialComplete) {
            $res['AlertOnPartialComplete'] = $this->alertOnPartialComplete;
        }

        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }

        if (null !== $this->dataNetworkType) {
            $res['DataNetworkType'] = $this->dataNetworkType;
        }

        if (null !== $this->dataProxySetting) {
            $res['DataProxySetting'] = $this->dataProxySetting;
        }

        if (null !== $this->maxCpuCore) {
            $res['MaxCpuCore'] = $this->maxCpuCore;
        }

        if (null !== $this->maxMemory) {
            $res['MaxMemory'] = $this->maxMemory;
        }

        if (null !== $this->maxWorker) {
            $res['MaxWorker'] = $this->maxWorker;
        }

        if (null !== $this->proxyHost) {
            $res['ProxyHost'] = $this->proxyHost;
        }

        if (null !== $this->proxyPassword) {
            $res['ProxyPassword'] = $this->proxyPassword;
        }

        if (null !== $this->proxyPort) {
            $res['ProxyPort'] = $this->proxyPort;
        }

        if (null !== $this->proxyUser) {
            $res['ProxyUser'] = $this->proxyUser;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
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
        if (isset($map['AlertOnPartialComplete'])) {
            $model->alertOnPartialComplete = $map['AlertOnPartialComplete'];
        }

        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }

        if (isset($map['DataNetworkType'])) {
            $model->dataNetworkType = $map['DataNetworkType'];
        }

        if (isset($map['DataProxySetting'])) {
            $model->dataProxySetting = $map['DataProxySetting'];
        }

        if (isset($map['MaxCpuCore'])) {
            $model->maxCpuCore = $map['MaxCpuCore'];
        }

        if (isset($map['MaxMemory'])) {
            $model->maxMemory = $map['MaxMemory'];
        }

        if (isset($map['MaxWorker'])) {
            $model->maxWorker = $map['MaxWorker'];
        }

        if (isset($map['ProxyHost'])) {
            $model->proxyHost = $map['ProxyHost'];
        }

        if (isset($map['ProxyPassword'])) {
            $model->proxyPassword = $map['ProxyPassword'];
        }

        if (isset($map['ProxyPort'])) {
            $model->proxyPort = $map['ProxyPort'];
        }

        if (isset($map['ProxyUser'])) {
            $model->proxyUser = $map['ProxyUser'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
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
