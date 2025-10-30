<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;

class GetPipelineByIdShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $contextShrink;

    /**
     * @var int
     */
    public $opTenantId;

    /**
     * @var string
     */
    public $queryIdShrink;
    protected $_name = [
        'contextShrink' => 'Context',
        'opTenantId' => 'OpTenantId',
        'queryIdShrink' => 'QueryId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contextShrink) {
            $res['Context'] = $this->contextShrink;
        }

        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }

        if (null !== $this->queryIdShrink) {
            $res['QueryId'] = $this->queryIdShrink;
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
            $model->contextShrink = $map['Context'];
        }

        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }

        if (isset($map['QueryId'])) {
            $model->queryIdShrink = $map['QueryId'];
        }

        return $model;
    }
}
