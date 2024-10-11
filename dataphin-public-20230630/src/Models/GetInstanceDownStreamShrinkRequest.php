<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Tea\Model;

class GetInstanceDownStreamShrinkRequest extends Model
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
     * @var string
     */
    public $instanceGetShrink;

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
        'downStreamDepth'   => 'DownStreamDepth',
        'env'               => 'Env',
        'instanceGetShrink' => 'InstanceGet',
        'opTenantId'        => 'OpTenantId',
        'runStatus'         => 'RunStatus',
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
        if (null !== $this->instanceGetShrink) {
            $res['InstanceGet'] = $this->instanceGetShrink;
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
     * @return GetInstanceDownStreamShrinkRequest
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
            $model->instanceGetShrink = $map['InstanceGet'];
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
