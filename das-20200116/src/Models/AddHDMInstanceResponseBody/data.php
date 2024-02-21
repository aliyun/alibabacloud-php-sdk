<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\AddHDMInstanceResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The user ID of the caller.
     *
     * @example 31063db679****
     *
     * @var string
     */
    public $callerUid;

    /**
     * @description The HTTP status code returned.
     *
     * @example 200
     *
     * @var int
     */
    public $code;

    /**
     * @description The error message returned if the request failed.
     *
     * @example InvalidRequestURL
     *
     * @var string
     */
    public $error;

    /**
     * @description The instance ID.
     *
     * @example rm-2ze1jdv45i7l6****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The endpoint of the instance.
     *
     * @example rm-de21209****.mysql.rds.aliyuncs.com
     *
     * @var string
     */
    public $ip;

    /**
     * @description The ID of the instance owner.
     *
     * @example 325352345
     *
     * @var string
     */
    public $ownerId;

    /**
     * @description The port number of the instance that you want to access.
     *
     * @example 3306
     *
     * @var int
     */
    public $port;

    /**
     * @description The role of the current API caller.
     *
     * @example master
     *
     * @var string
     */
    public $role;

    /**
     * @description The tenant ID.
     *
     * @example L0EPfLS****=SCE00000*****
     *
     * @var string
     */
    public $tenantId;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * @example tokenID
     *
     * @var string
     */
    public $token;

    /**
     * @description The unique identifier of the instance.
     *
     * @example hdm_3063db6792965c080a4bcb6e6304****
     *
     * @var string
     */
    public $uuid;

    /**
     * @description The VPC ID.
     *
     * @example vpc-m5e666n89m2bx8jar****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'callerUid'  => 'CallerUid',
        'code'       => 'Code',
        'error'      => 'Error',
        'instanceId' => 'InstanceId',
        'ip'         => 'Ip',
        'ownerId'    => 'OwnerId',
        'port'       => 'Port',
        'role'       => 'Role',
        'tenantId'   => 'TenantId',
        'token'      => 'Token',
        'uuid'       => 'Uuid',
        'vpcId'      => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callerUid) {
            $res['CallerUid'] = $this->callerUid;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->error) {
            $res['Error'] = $this->error;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallerUid'])) {
            $model->callerUid = $map['CallerUid'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Error'])) {
            $model->error = $map['Error'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
