<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Tea\Model;

class GetNodeUpDownStreamShrinkRequest extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $downStreamDepth;

    /**
     * @example DEV
     *
     * @var string
     */
    public $env;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $nodeIdShrink;

    /**
     * @description This parameter is required.
     *
     * @example 30001011
     *
     * @var int
     */
    public $opTenantId;

    /**
     * @example 113123
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
        'env' => 'Env',
        'nodeIdShrink' => 'NodeId',
        'opTenantId' => 'OpTenantId',
        'projectId' => 'ProjectId',
        'upStreamDepth' => 'UpStreamDepth',
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
        if (null !== $this->nodeIdShrink) {
            $res['NodeId'] = $this->nodeIdShrink;
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
     * @return GetNodeUpDownStreamShrinkRequest
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
        if (isset($map['NodeId'])) {
            $model->nodeIdShrink = $map['NodeId'];
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
