<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Tea\Model;

class GetTableLineageByTaskIdShrinkRequest extends Model
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
     * @var string
     */
    public $tableLineageByTaskIdQueryShrink;
    protected $_name = [
        'opTenantId' => 'OpTenantId',
        'tableLineageByTaskIdQueryShrink' => 'TableLineageByTaskIdQuery',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }
        if (null !== $this->tableLineageByTaskIdQueryShrink) {
            $res['TableLineageByTaskIdQuery'] = $this->tableLineageByTaskIdQueryShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTableLineageByTaskIdShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }
        if (isset($map['TableLineageByTaskIdQuery'])) {
            $model->tableLineageByTaskIdQueryShrink = $map['TableLineageByTaskIdQuery'];
        }

        return $model;
    }
}
