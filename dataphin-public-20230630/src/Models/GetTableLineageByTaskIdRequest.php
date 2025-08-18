<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetTableLineageByTaskIdRequest\tableLineageByTaskIdQuery;

class GetTableLineageByTaskIdRequest extends Model
{
    /**
     * @var int
     */
    public $opTenantId;

    /**
     * @var tableLineageByTaskIdQuery
     */
    public $tableLineageByTaskIdQuery;
    protected $_name = [
        'opTenantId' => 'OpTenantId',
        'tableLineageByTaskIdQuery' => 'TableLineageByTaskIdQuery',
    ];

    public function validate()
    {
        if (null !== $this->tableLineageByTaskIdQuery) {
            $this->tableLineageByTaskIdQuery->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }

        if (null !== $this->tableLineageByTaskIdQuery) {
            $res['TableLineageByTaskIdQuery'] = null !== $this->tableLineageByTaskIdQuery ? $this->tableLineageByTaskIdQuery->toArray($noStream) : $this->tableLineageByTaskIdQuery;
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
        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }

        if (isset($map['TableLineageByTaskIdQuery'])) {
            $model->tableLineageByTaskIdQuery = tableLineageByTaskIdQuery::fromMap($map['TableLineageByTaskIdQuery']);
        }

        return $model;
    }
}
