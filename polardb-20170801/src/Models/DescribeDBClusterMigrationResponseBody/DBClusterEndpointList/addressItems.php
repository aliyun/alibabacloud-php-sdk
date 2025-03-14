<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterMigrationResponseBody\DBClusterEndpointList;

use AlibabaCloud\Tea\Model;

class addressItems extends Model
{
    /**
     * @description Indicates whether SSL encryption is enabled. Valid values:
     *
     *   **Enabled**
     *   **Disabled**
     *
     * @example pc-**************.rwlb.rds.aliyuncs.com
     *
     * @var string
     */
    public $connectionString;

    /**
     * @description The description of a migration exception. If no exception occurs during the migration, an empty string is returned.
     *
     * @example 192.***.***.10
     *
     * @var string
     */
    public $IPAddress;

    /**
     * @description The ID of the endpoint.
     *
     * @example Private
     *
     * @var string
     */
    public $netType;

    /**
     * @description The type of the endpoint. Valid values:
     *
     *   **Cluster**: the default cluster endpoint
     *   **Primary**: the primary endpoint
     *   **Custom**: the custom endpoint
     *
     * @example 3306
     *
     * @var string
     */
    public $port;

    /**
     * @description The ID of the request.
     *
     * @example Enabled
     *
     * @var string
     */
    public $SSLEnabled;

    /**
     * @description The read/write mode. Valid values:
     *
     *   ReadWrite: receives and forwards read and write requests (automatic read-write splitting).
     *   ReadOnly (default): receives and forwards read requests only.
     *
     * @example vpc-**********
     *
     * @var string
     */
    public $VPCId;

    /**
     * @description The IP address of the endpoint.
     *
     * @example vsw-**********
     *
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'connectionString' => 'ConnectionString',
        'IPAddress' => 'IPAddress',
        'netType' => 'NetType',
        'port' => 'Port',
        'SSLEnabled' => 'SSLEnabled',
        'VPCId' => 'VPCId',
        'vSwitchId' => 'VSwitchId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectionString) {
            $res['ConnectionString'] = $this->connectionString;
        }
        if (null !== $this->IPAddress) {
            $res['IPAddress'] = $this->IPAddress;
        }
        if (null !== $this->netType) {
            $res['NetType'] = $this->netType;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->SSLEnabled) {
            $res['SSLEnabled'] = $this->SSLEnabled;
        }
        if (null !== $this->VPCId) {
            $res['VPCId'] = $this->VPCId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return addressItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectionString'])) {
            $model->connectionString = $map['ConnectionString'];
        }
        if (isset($map['IPAddress'])) {
            $model->IPAddress = $map['IPAddress'];
        }
        if (isset($map['NetType'])) {
            $model->netType = $map['NetType'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['SSLEnabled'])) {
            $model->SSLEnabled = $map['SSLEnabled'];
        }
        if (isset($map['VPCId'])) {
            $model->VPCId = $map['VPCId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        return $model;
    }
}
