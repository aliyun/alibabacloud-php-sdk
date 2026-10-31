<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;

class GetGranularityBySummaryIdRequest extends Model
{
    /**
     * @var string
     */
    public $env;

    /**
     * @var int
     */
    public $modelId;

    /**
     * @var int
     */
    public $opTenantId;

    /**
     * @var string
     */
    public $opUserId;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var bool
     */
    public $queryDraft;
    protected $_name = [
        'env' => 'Env',
        'modelId' => 'ModelId',
        'opTenantId' => 'OpTenantId',
        'opUserId' => 'OpUserId',
        'projectId' => 'ProjectId',
        'queryDraft' => 'QueryDraft',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->env) {
            $res['Env'] = $this->env;
        }

        if (null !== $this->modelId) {
            $res['ModelId'] = $this->modelId;
        }

        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }

        if (null !== $this->opUserId) {
            $res['OpUserId'] = $this->opUserId;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->queryDraft) {
            $res['QueryDraft'] = $this->queryDraft;
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
        if (isset($map['Env'])) {
            $model->env = $map['Env'];
        }

        if (isset($map['ModelId'])) {
            $model->modelId = $map['ModelId'];
        }

        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }

        if (isset($map['OpUserId'])) {
            $model->opUserId = $map['OpUserId'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['QueryDraft'])) {
            $model->queryDraft = $map['QueryDraft'];
        }

        return $model;
    }
}
