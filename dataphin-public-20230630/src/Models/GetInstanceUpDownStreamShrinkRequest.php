<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;

class GetInstanceUpDownStreamShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $downStreamDepth;

    /**
     * @var string
     */
    public $env;

    /**
     * @var string
     */
    public $instanceIdShrink;

    /**
     * @var int
     */
    public $opTenantId;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var int
     */
    public $upStreamDepth;
    protected $_name = [
        'downStreamDepth' => 'DownStreamDepth',
        'env' => 'Env',
        'instanceIdShrink' => 'InstanceId',
        'opTenantId' => 'OpTenantId',
        'projectId' => 'ProjectId',
        'upStreamDepth' => 'UpStreamDepth',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->downStreamDepth) {
            $res['DownStreamDepth'] = $this->downStreamDepth;
        }

        if (null !== $this->env) {
            $res['Env'] = $this->env;
        }

        if (null !== $this->instanceIdShrink) {
            $res['InstanceId'] = $this->instanceIdShrink;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
            $model->instanceIdShrink = $map['InstanceId'];
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
