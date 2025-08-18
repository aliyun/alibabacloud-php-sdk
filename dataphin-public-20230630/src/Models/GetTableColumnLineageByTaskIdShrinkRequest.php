<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;

class GetTableColumnLineageByTaskIdShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $opTenantId;

    /**
     * @var string
     */
    public $tableColumnLineageByTaskIdQueryShrink;
    protected $_name = [
        'opTenantId' => 'OpTenantId',
        'tableColumnLineageByTaskIdQueryShrink' => 'TableColumnLineageByTaskIdQuery',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }

        if (null !== $this->tableColumnLineageByTaskIdQueryShrink) {
            $res['TableColumnLineageByTaskIdQuery'] = $this->tableColumnLineageByTaskIdQueryShrink;
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
            $model->tableColumnLineageByTaskIdQueryShrink = $map['TableColumnLineageByTaskIdQuery'];
        }

        return $model;
    }
}
