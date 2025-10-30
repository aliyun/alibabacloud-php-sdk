<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetPipelineAsyncResultRequest\context;

class GetPipelineAsyncResultRequest extends Model
{
    /**
     * @var int
     */
    public $asyncId;

    /**
     * @var context
     */
    public $context;

    /**
     * @var int
     */
    public $opTenantId;
    protected $_name = [
        'asyncId' => 'AsyncId',
        'context' => 'Context',
        'opTenantId' => 'OpTenantId',
    ];

    public function validate()
    {
        if (null !== $this->context) {
            $this->context->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->asyncId) {
            $res['AsyncId'] = $this->asyncId;
        }

        if (null !== $this->context) {
            $res['Context'] = null !== $this->context ? $this->context->toArray($noStream) : $this->context;
        }

        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
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
        if (isset($map['AsyncId'])) {
            $model->asyncId = $map['AsyncId'];
        }

        if (isset($map['Context'])) {
            $model->context = context::fromMap($map['Context']);
        }

        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }

        return $model;
    }
}
