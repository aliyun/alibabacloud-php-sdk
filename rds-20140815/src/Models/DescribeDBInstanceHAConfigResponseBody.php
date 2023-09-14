<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceHAConfigResponseBody\hostInstanceInfos;
use AlibabaCloud\Tea\Model;

class DescribeDBInstanceHAConfigResponseBody extends Model
{
    /**
     * @description The instance ID.
     *
     * @example rm-uf6wjk5xxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The high availability mode of the instance. Valid values:
     *
     *   **RPO**: Data consistency is preferred. The instance ensures data reliability to minimize data losses. If you have high requirements on data consistency, select this mode.
     *   **RTO**: Service availability is preferred. The instance restores the database service at the earliest opportunity to ensure service availability. If you have high requirements on instance availability, select this mode.
     *
     * > This parameter is returned only for instances that run MySQL.
     * @example RPO
     *
     * @var string
     */
    public $HAMode;

    /**
     * @description An array that consists of the information of the primary and secondary instances.
     *
     * @var hostInstanceInfos
     */
    public $hostInstanceInfos;

    /**
     * @description The request ID.
     *
     * @example 1AD222E9-E606-4A42-BF6D-8A4442913CEF
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The data replication mode of the instance. Valid values:
     *
     *   **Sync**: the synchronous mode
     *   **Semi-sync**: the semi-synchronous replication mode
     *   **Async**: the asynchronous mode
     *
     * > This parameter is returned only for instances that run MySQL.
     * @example Sync
     *
     * @var string
     */
    public $syncMode;
    protected $_name = [
        'DBInstanceId'      => 'DBInstanceId',
        'HAMode'            => 'HAMode',
        'hostInstanceInfos' => 'HostInstanceInfos',
        'requestId'         => 'RequestId',
        'syncMode'          => 'SyncMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->HAMode) {
            $res['HAMode'] = $this->HAMode;
        }
        if (null !== $this->hostInstanceInfos) {
            $res['HostInstanceInfos'] = null !== $this->hostInstanceInfos ? $this->hostInstanceInfos->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->syncMode) {
            $res['SyncMode'] = $this->syncMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBInstanceHAConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['HAMode'])) {
            $model->HAMode = $map['HAMode'];
        }
        if (isset($map['HostInstanceInfos'])) {
            $model->hostInstanceInfos = hostInstanceInfos::fromMap($map['HostInstanceInfos']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SyncMode'])) {
            $model->syncMode = $map['SyncMode'];
        }

        return $model;
    }
}
