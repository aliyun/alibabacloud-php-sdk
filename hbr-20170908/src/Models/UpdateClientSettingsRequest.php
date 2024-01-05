<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Tea\Model;

class UpdateClientSettingsRequest extends Model
{
    /**
     * @description Specifies whether to generate alert for partially completed jobs. This parameter is valid only for on-premises file backup and ECS file backup.
     *
     * @example false
     *
     * @var bool
     */
    public $alertOnPartialComplete;

    /**
     * @description The ID of the HBR client.
     *
     * @example c-*********************
     *
     * @var string
     */
    public $clientId;

    /**
     * @description The type of the endpoint on the data plane. Valid values:
     *
     *   **PUBLIC**: Internet
     *   **VPC**: virtual private cloud (VPC)
     *   **CLASSIC**: classic network
     *
     * @example VPC
     *
     * @var string
     */
    public $dataNetworkType;

    /**
     * @description The proxy configuration on the data plane. Valid values:
     *
     *   **DISABLE**: No proxy is used.
     *   **USE_CONTROL_PROXY** (default): The configuration is the same as that on the control plane.
     *   **CUSTOM**: The configuration is customized (HTTP).
     *
     * @example USE_CONTROL_PROXY
     *
     * @var string
     */
    public $dataProxySetting;

    /**
     * @description The number of CPU cores used by a single backup job. The value 0 indicates that the number is unlimited.
     *
     * @example 1
     *
     * @var int
     */
    public $maxCpuCore;

    /**
     * @description The maximum memory that can be used by the client. Unit: bytes. Only V2.13.0 and later are supported.
     *
     * @example 4096
     *
     * @var int
     */
    public $maxMemory;

    /**
     * @description The number of concurrent backup jobs. The value 0 indicates that the number is unlimited.
     *
     * @example 1
     *
     * @var int
     */
    public $maxWorker;

    /**
     * @description The custom host IP address of the proxy server on the data plane.
     *
     * @example 192.168.11.100
     *
     * @var string
     */
    public $proxyHost;

    /**
     * @description The custom password of the proxy server on the data plane.
     *
     * @example ******
     *
     * @var string
     */
    public $proxyPassword;

    /**
     * @description The custom host port of the proxy server on the data plane.
     *
     * @example 3128
     *
     * @var int
     */
    public $proxyPort;

    /**
     * @description The custom username of the proxy server on the data plane.
     *
     * @example user
     *
     * @var string
     */
    public $proxyUser;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-*********************
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description Specifies whether to transmit the data on the data plane over HTTPS. Valid values:
     *
     *   true: Data is transmitted over HTTPS.
     *   false: Data is transmitted over HTTP.
     *
     * @example false
     *
     * @var bool
     */
    public $useHttps;

    /**
     * @description The ID of the backup vault. This parameter is required for the old HBR client.
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
