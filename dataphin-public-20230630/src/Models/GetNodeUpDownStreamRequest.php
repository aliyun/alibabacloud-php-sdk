<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetNodeUpDownStreamRequest\nodeId;

class GetNodeUpDownStreamRequest extends Model
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
     * @var nodeId
     */
    public $nodeId;

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
        'nodeId' => 'NodeId',
        'opTenantId' => 'OpTenantId',
        'projectId' => 'ProjectId',
        'upStreamDepth' => 'UpStreamDepth',
    ];

    public function validate()
    {
        if (null !== $this->nodeId) {
            $this->nodeId->validate();
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

        if (null !== $this->nodeId) {
            $res['NodeId'] = null !== $this->nodeId ? $this->nodeId->toArray($noStream) : $this->nodeId;
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

        if (isset($map['NodeId'])) {
            $model->nodeId = nodeId::fromMap($map['NodeId']);
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
