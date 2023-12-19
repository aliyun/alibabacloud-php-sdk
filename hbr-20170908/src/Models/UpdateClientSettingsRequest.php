<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Tea\Model;

class UpdateClientSettingsRequest extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $alertOnPartialComplete;

    /**
     * @description The ID of the backup client.
     *
     * @example c-*********************
     *
     * @var string
     */
    public $clientId;

    /**
     * @description The network type of the backup client. Valid values:
     *
     *   **PUBLIC**: public network
     *   **VPC**: VPC.
     *   **CLASSIC**: classic network
     *
     * @example VPC
     *
     * @var string
     */
    public $dataNetworkType;

    /**
     * @description The proxy settings of the backup client. Valid values:
     *
     *   **DISABLE**: No proxy is configured.
     *   **USE_CONTROL_PROXY**: The proxy settings are the same as the settings that are predefined by the system. Default value: USE_CONTROL_PROXY.
     *   **CUSTOM**: Custom HTTP proxy settings are configured.
     *
     * @example USE_CONTROL_PROXY
     *
     * @var string
     */
    public $dataProxySetting;

    /**
     * @description The number of CPU cores that can be used by a single backup job. A value of 0 indicates no limits.
     *
     * @example 1
     *
     * @var int
     */
    public $maxCpuCore;

    /**
     * @example 4096
     *
     * @var int
     */
    public $maxMemory;

    /**
     * @description The number of concurrent tasks that can be included in a backup job. A value of 0 indicates no limits.
     *
     * @example 1
     *
     * @var int
     */
    public $maxWorker;

    /**
     * @description The custom IP address of the proxy server.
     *
     * @example 192.168.11.100
     *
     * @var string
     */
    public $proxyHost;

    /**
     * @description The custom password of the proxy server.
     *
     * @example ******
     *
     * @var string
     */
    public $proxyPassword;

    /**
     * @description The custom port number of the proxy server.
     *
     * @example 3128
     *
     * @var int
     */
    public $proxyPort;

    /**
     * @description The custom username of the proxy server.
     *
     * @example user
     *
     * @var string
     */
    public $proxyUser;

    /**
     * @description The ID of resource group.
     *
     * @example rg-*********************
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description Specifies whether to transmit data over HTTPS.
     *
     *   true: The system transmits data over HTTPS.
     *   false: The system transmits data over HTTP.
     *
     * @example false
     *
     * @var bool
     */
    public $useHttps;

    /**
     * @description The ID of the backup vault. If you use a backup client of an earlier version, you must set this parameter.
     *
     * @example v-*********************
     *
     * @var string
     */
    public $vaultId;
    protected $_name = [
        'alertOnPartialComplete' => 'AlertOnPartialComplete',
        'clientId'               => 'ClientId',
        'dataNetworkType'        => 'DataNetworkType',
        'dataProxySetting'       => 'DataProxySetting',
        'maxCpuCore'             => 'MaxCpuCore',
        'maxMemory'              => 'MaxMemory',
        'maxWorker'              => 'MaxWorker',
        'proxyHost'              => 'ProxyHost',
        'proxyPassword'          => 'ProxyPassword',
        'proxyPort'              => 'ProxyPort',
        'proxyUser'              => 'ProxyUser',
        'resourceGroupId'        => 'ResourceGroupId',
        'useHttps'               => 'UseHttps',
        'vaultId'                => 'VaultId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return UpdateClientSettingsRequest
     */
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
