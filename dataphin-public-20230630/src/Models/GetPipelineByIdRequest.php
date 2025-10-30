<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetPipelineByIdRequest\context;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetPipelineByIdRequest\queryId;

class GetPipelineByIdRequest extends Model
{
    /**
     * @var context
     */
    public $context;

    /**
     * @var int
     */
    public $opTenantId;

    /**
     * @var queryId
     */
    public $queryId;
    protected $_name = [
        'context' => 'Context',
        'opTenantId' => 'OpTenantId',
        'queryId' => 'QueryId',
    ];

    public function validate()
    {
        if (null !== $this->context) {
            $this->context->validate();
        }
        if (null !== $this->queryId) {
            $this->queryId->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->context) {
            $res['Context'] = null !== $this->context ? $this->context->toArray($noStream) : $this->context;
        }

        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }

        if (null !== $this->queryId) {
            $res['QueryId'] = null !== $this->queryId ? $this->queryId->toArray($noStream) : $this->queryId;
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
        if (isset($map['Context'])) {
            $model->context = context::fromMap($map['Context']);
        }

        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }

        if (isset($map['QueryId'])) {
            $model->queryId = queryId::fromMap($map['QueryId']);
        }

        return $model;
    }
}
