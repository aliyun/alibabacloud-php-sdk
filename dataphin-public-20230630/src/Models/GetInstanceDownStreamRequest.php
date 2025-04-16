<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetInstanceDownStreamRequest\instanceGet;

class GetInstanceDownStreamRequest extends Model
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
     * @var instanceGet
     */
    public $instanceGet;

    /**
     * @var int
     */
    public $opTenantId;

    /**
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

    public function validate()
    {
        if (null !== $this->instanceGet) {
            $this->instanceGet->validate();
        }
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

        if (null !== $this->instanceGet) {
            $res['InstanceGet'] = null !== $this->instanceGet ? $this->instanceGet->toArray($noStream) : $this->instanceGet;
        }

        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }

        if (null !== $this->runStatus) {
            $res['RunStatus'] = $this->runStatus;
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
