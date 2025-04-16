<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;

class GetInstanceDownStreamShrinkRequest extends Model
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
    public $instanceGetShrink;

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
        'instanceGetShrink' => 'InstanceGet',
        'opTenantId' => 'OpTenantId',
        'runStatus' => 'RunStatus',
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
