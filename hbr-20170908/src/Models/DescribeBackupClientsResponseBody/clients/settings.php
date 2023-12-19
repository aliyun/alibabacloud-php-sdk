<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeBackupClientsResponseBody\clients;

use AlibabaCloud\Tea\Model;

class settings extends Model
{
    /**
     * @var bool
     */
    public $alertOnPartialComplete;

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
     *   **DISABLE**: The proxy is not used.
     *   \*\*USE_CONTROL_PROXY \*\* (default value): The configuration is the same as that on the control plane.
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
     * @var string
     */
    public $maxCpuCore;

    /**
     * @var int
     */
    public $maxMemory;

    /**
     * @description The number of concurrent backup jobs. The value 0 indicates that the number is unlimited.
     *
     * @example 1
     *
     * @var string
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
     * @description Indicates whether data on the data plane is transmitted over HTTPS. Valid values:
     *
     *   true: Data is transmitted over HTTPS.
     *   false: Data is transmitted over HTTP.
     *
     * @example false
     *
     * @var string
     */
    public $useHttps;
    protected $_name = [
        'alertOnPartialComplete' => 'AlertOnPartialComplete',
        'dataNetworkType'        => 'DataNetworkType',
        'dataProxySetting'       => 'DataProxySetting',
        'maxCpuCore'             => 'MaxCpuCore',
        'maxMemory'              => 'MaxMemory',
        'maxWorker'              => 'MaxWorker',
        'proxyHost'              => 'ProxyHost',
        'proxyPassword'          => 'ProxyPassword',
        'proxyPort'              => 'ProxyPort',
        'proxyUser'              => 'ProxyUser',
        'useHttps'               => 'UseHttps',
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
        if (null !== $this->useHttps) {
            $res['UseHttps'] = $this->useHttps;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return settings
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertOnPartialComplete'])) {
            $model->alertOnPartialComplete = $map['AlertOnPartialComplete'];
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
        if (isset($map['UseHttps'])) {
            $model->useHttps = $map['UseHttps'];
        }

        return $model;
    }
}
