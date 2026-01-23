<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;

class GetTableLineagesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $filterQueryShrink;

    /**
     * @var int
     */
    public $opTenantId;

    /**
     * @var string
     */
    public $tableGuid;
    protected $_name = [
        'filterQueryShrink' => 'FilterQuery',
        'opTenantId' => 'OpTenantId',
        'tableGuid' => 'TableGuid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->filterQueryShrink) {
            $res['FilterQuery'] = $this->filterQueryShrink;
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
            $model->filterQueryShrink = $map['FilterQuery'];
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
