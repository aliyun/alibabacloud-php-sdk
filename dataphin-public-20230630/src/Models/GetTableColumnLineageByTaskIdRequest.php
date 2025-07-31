<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetTableColumnLineageByTaskIdRequest\tableColumnLineageByTaskIdQuery;
use AlibabaCloud\Tea\Model;

class GetTableColumnLineageByTaskIdRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 30001011
     *
     * @var int
     */
    public $opTenantId;

    /**
     * @description This parameter is required.
     *
     * @var tableColumnLineageByTaskIdQuery
     */
    public $tableColumnLineageByTaskIdQuery;
    protected $_name = [
        'opTenantId' => 'OpTenantId',
        'tableColumnLineageByTaskIdQuery' => 'TableColumnLineageByTaskIdQuery',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }
        if (null !== $this->tableColumnLineageByTaskIdQuery) {
            $res['TableColumnLineageByTaskIdQuery'] = null !== $this->tableColumnLineageByTaskIdQuery ? $this->tableColumnLineageByTaskIdQuery->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTableColumnLineageByTaskIdRequest
     */
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
