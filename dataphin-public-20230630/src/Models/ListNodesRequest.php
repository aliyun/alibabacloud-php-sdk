<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListNodesRequest\listQuery;

class ListNodesRequest extends Model
{
    /**
     * @var string
     */
    public $env;

    /**
     * @var listQuery
     */
    public $listQuery;

    /**
     * @var int
     */
    public $opTenantId;
    protected $_name = [
        'env' => 'Env',
        'listQuery' => 'ListQuery',
        'opTenantId' => 'OpTenantId',
    ];

    public function validate()
    {
        if (null !== $this->listQuery) {
            $this->listQuery->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->env) {
            $res['Env'] = $this->env;
        }

        if (null !== $this->listQuery) {
            $res['ListQuery'] = null !== $this->listQuery ? $this->listQuery->toArray($noStream) : $this->listQuery;
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
        if (isset($map['Env'])) {
            $model->env = $map['Env'];
        }

        if (isset($map['ListQuery'])) {
            $model->listQuery = listQuery::fromMap($map['ListQuery']);
        }

        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }

        return $model;
    }
}
