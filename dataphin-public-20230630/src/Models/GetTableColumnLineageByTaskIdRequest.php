<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetTableColumnLineageByTaskIdRequest\tableColumnLineageByTaskIdQuery;

class GetTableColumnLineageByTaskIdRequest extends Model
{
    /**
     * @var int
     */
    public $opTenantId;

    /**
     * @var tableColumnLineageByTaskIdQuery
     */
    public $tableColumnLineageByTaskIdQuery;
    protected $_name = [
        'opTenantId' => 'OpTenantId',
        'tableColumnLineageByTaskIdQuery' => 'TableColumnLineageByTaskIdQuery',
    ];

    public function validate()
    {
        if (null !== $this->tableColumnLineageByTaskIdQuery) {
            $this->tableColumnLineageByTaskIdQuery->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }

        if (null !== $this->tableColumnLineageByTaskIdQuery) {
            $res['TableColumnLineageByTaskIdQuery'] = null !== $this->tableColumnLineageByTaskIdQuery ? $this->tableColumnLineageByTaskIdQuery->toArray($noStream) : $this->tableColumnLineageByTaskIdQuery;
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

        if (isset($map['TableColumnLineageByTaskIdQuery'])) {
            $model->tableColumnLineageByTaskIdQuery = tableColumnLineageByTaskIdQuery::fromMap($map['TableColumnLineageByTaskIdQuery']);
        }

        return $model;
    }
}
