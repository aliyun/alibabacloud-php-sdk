<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetInstanceDownStreamRequest\instanceGet;
use AlibabaCloud\Tea\Model;

class GetInstanceDownStreamRequest extends Model
{
    /**
     * @description This parameter is required.
     *
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
     * @var instanceGet
     */
    public $instanceGet;

    /**
     * @description This parameter is required.
     *
     * @example 30001011
     *
     * @var int
     */
    public $opTenantId;

    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $runStatus;
    protected $_name = [
        'downStreamDepth' => 'DownStreamDepth',
        'env' => 'Env',
        'instanceGet' => 'InstanceGet',
        'opTenantId' => 'OpTenantId',
        'runStatus' => 'RunStatus',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->downStreamDepth) {
            $res['DownStreamDepth'] = $this->downStreamDepth;
        }
        if (null !== $this->env) {
            $res['Env'] = $this->env;
        }
        if (null !== $this->instanceGet) {
            $res['InstanceGet'] = null !== $this->instanceGet ? $this->instanceGet->toMap() : null;
        }
        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }
        if (null !== $this->runStatus) {
            $res['RunStatus'] = $this->runStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetInstanceDownStreamRequest
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
        if (isset($map['InstanceGet'])) {
            $model->instanceGet = instanceGet::fromMap($map['InstanceGet']);
        }
        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }
        if (isset($map['RunStatus'])) {
            $model->runStatus = $map['RunStatus'];
        }

        return $model;
    }
}
