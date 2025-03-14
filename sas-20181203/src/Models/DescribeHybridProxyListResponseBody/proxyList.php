<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeHybridProxyListResponseBody;

use AlibabaCloud\Tea\Model;

class proxyList extends Model
{
    /**
     * @description The number of servers that are connected to the proxy instance.
     *
     * @example 10
     *
     * @var int
     */
    public $clientCount;

    /**
     * @description The version of the proxy instance.
     *
     * @example proxy_01_05
     *
     * @var string
     */
    public $currentVersion;

    /**
     * @description The instance ID.
     *
     * @example i-uf61q03boqhhmeai1XXX
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The instance name.
     *
     * @example dev
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The public IP address of the server.
     *
     * @example 47.76.XXX.XXX
     *
     * @var string
     */
    public $internetIp;

    /**
     * @description The private IP address of the server.
     *
     * @example 172.23.XXX.XXX
     *
     * @var string
     */
    public $intranetIp;

    /**
     * @description The UUID of the proxy node.
     *
     * @example inet-proxy-3bb11fad-37d6-4aee-9c37-b0ad1612a18e
     *
     * @var string
     */
    public $proxyUuid;

    /**
     * @description The status of the proxy server. Valid values:
     *
     *   **online**
     *   **offline**
     *
     * @example online
     *
     * @var string
     */
    public $status;

    /**
     * @description The UUID of the server that is connected to the proxy instance.
     *
     * @example 59a9d158-b2f0-4766-a893-ae67b943XXXX
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'clientCount' => 'ClientCount',
        'currentVersion' => 'CurrentVersion',
        'instanceId' => 'InstanceId',
        'instanceName' => 'InstanceName',
        'internetIp' => 'InternetIp',
        'intranetIp' => 'IntranetIp',
        'proxyUuid' => 'ProxyUuid',
        'status' => 'Status',
        'uuid' => 'Uuid',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientCount) {
            $res['ClientCount'] = $this->clientCount;
        }
        if (null !== $this->currentVersion) {
            $res['CurrentVersion'] = $this->currentVersion;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }
        if (null !== $this->intranetIp) {
            $res['IntranetIp'] = $this->intranetIp;
        }
        if (null !== $this->proxyUuid) {
            $res['ProxyUuid'] = $this->proxyUuid;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return proxyList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientCount'])) {
            $model->clientCount = $map['ClientCount'];
        }
        if (isset($map['CurrentVersion'])) {
            $model->currentVersion = $map['CurrentVersion'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }
        if (isset($map['IntranetIp'])) {
            $model->intranetIp = $map['IntranetIp'];
        }
        if (isset($map['ProxyUuid'])) {
            $model->proxyUuid = $map['ProxyUuid'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
