<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetInstanceUpDownStreamRequest\instanceId;
use AlibabaCloud\Tea\Model;

class GetInstanceUpDownStreamRequest extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $downStreamDepth;

    /**
     * @example PROD
     *
     * @var string
     */
    public $env;

    /**
     * @description This parameter is required.
     *
     * @var instanceId
     */
    public $instanceId;

    /**
     * @description This parameter is required.
     *
     * @example 30001011
     *
     * @var int
     */
    public $opTenantId;

    /**
     * @description This parameter is required.
     *
     * @example 1001121
     *
     * @var int
     */
    public $projectId;

    /**
     * @example 1
     *
     * @var int
     */
    public $upStreamDepth;
    protected $_name = [
        'downStreamDepth' => 'DownStreamDepth',
        'env'             => 'Env',
        'instanceId'      => 'InstanceId',
        'opTenantId'      => 'OpTenantId',
        'projectId'       => 'ProjectId',
        'upStreamDepth'   => 'UpStreamDepth',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->downStreamDepth) {
            $res['DownStreamDepth'] = $this->downStreamDepth;
        }
        if (null !== $this->env) {
            $res['Env'] = $this->env;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = null !== $this->instanceId ? $this->instanceId->toMap() : null;
        }
        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->upStreamDepth) {
            $res['UpStreamDepth'] = $this->upStreamDepth;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetInstanceUpDownStreamRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DownStreamDepth'])) {
            $model->downStreamDepth = $map['DownStreamDepth'];
        }
        if (isset($map['Env'])) {
            $model->env = $map['Env'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = instanceId::fromMap($map['InstanceId']);
        }
        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['UpStreamDepth'])) {
            $model->upStreamDepth = $map['UpStreamDepth'];
        }

        return $model;
    }
}
