<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class DescribeProcessStatsCompositionRequest extends Model
{
    /**
     * @description The IP address of the client.
     *
     * @example 127.*.*.*
     *
     * @var string
     */
    public $clientIp;

    /**
     * @description The ID of the OceanBase cluster.
     *
     * This parameter is required.
     * @example ob317v4uif****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The IP address of the server.
     *
     * @example 127.*.*.*
     *
     * @var string
     */
    public $serverIp;

    /**
     * @description The SQL statement. It supports LIKE clauses, and you may specify only part of the clauses in the SQL statement.
     *
     * @example SELECT  ****   FROM ****   WHERE **** = ? AND **** = ?   ORDER BY **** ASC
     *
     * @var string
     */
    public $sqlText;

    /**
     * @description The state of the session.
     *
     * @example ACTIVE
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the tenant.
     *
     * @example t33h8y08k****
     *
     * @var string
     */
    public $tenantId;

    /**
     * @description The user identifier (UID) of OceanBase Database.
     *
     * @example 139*************
     *
     * @var string
     */
    public $UId;

    /**
     * @description The username that you use to log in to the database.
     *
     * @example test1
     *
     * @var string
     */
    public $users;
    protected $_name = [
        'clientIp'   => 'ClientIp',
        'instanceId' => 'InstanceId',
        'serverIp'   => 'ServerIp',
        'sqlText'    => 'SqlText',
        'status'     => 'Status',
        'tenantId'   => 'TenantId',
        'UId'        => 'UId',
        'users'      => 'Users',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientIp) {
            $res['ClientIp'] = $this->clientIp;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->serverIp) {
            $res['ServerIp'] = $this->serverIp;
        }
        if (null !== $this->sqlText) {
            $res['SqlText'] = $this->sqlText;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->UId) {
            $res['UId'] = $this->UId;
        }
        if (null !== $this->users) {
            $res['Users'] = $this->users;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeProcessStatsCompositionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientIp'])) {
            $model->clientIp = $map['ClientIp'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ServerIp'])) {
            $model->serverIp = $map['ServerIp'];
        }
        if (isset($map['SqlText'])) {
            $model->sqlText = $map['SqlText'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['UId'])) {
            $model->UId = $map['UId'];
        }
        if (isset($map['Users'])) {
            $model->users = $map['Users'];
        }

        return $model;
    }
}
