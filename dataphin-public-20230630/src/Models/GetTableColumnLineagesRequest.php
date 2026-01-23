<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetTableColumnLineagesRequest\filterQuery;

class GetTableColumnLineagesRequest extends Model
{
    /**
     * @var filterQuery
     */
    public $filterQuery;

    /**
     * @var int
     */
    public $opTenantId;

    /**
     * @var string
     */
    public $tableGuid;
    protected $_name = [
        'filterQuery' => 'FilterQuery',
        'opTenantId' => 'OpTenantId',
        'tableGuid' => 'TableGuid',
    ];

    public function validate()
    {
        if (null !== $this->filterQuery) {
            $this->filterQuery->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->filterQuery) {
            $res['FilterQuery'] = null !== $this->filterQuery ? $this->filterQuery->toArray($noStream) : $this->filterQuery;
        }

        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }

        if (null !== $this->tableGuid) {
            $res['TableGuid'] = $this->tableGuid;
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
        if (isset($map['FilterQuery'])) {
            $model->filterQuery = filterQuery::fromMap($map['FilterQuery']);
        }

        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }

        if (isset($map['TableGuid'])) {
            $model->tableGuid = $map['TableGuid'];
        }

        return $model;
    }
}
