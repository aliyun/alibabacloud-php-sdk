<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetStandardTemplateRequest\filterQuery;

class GetStandardTemplateRequest extends Model
{
    /**
     * @var filterQuery
     */
    public $filterQuery;

    /**
     * @var int
     */
    public $id;

    /**
     * @var bool
     */
    public $nullable;

    /**
     * @var int
     */
    public $opTenantId;

    /**
     * @var string
     */
    public $opUserId;
    protected $_name = [
        'filterQuery' => 'FilterQuery',
        'id' => 'Id',
        'nullable' => 'Nullable',
        'opTenantId' => 'OpTenantId',
        'opUserId' => 'OpUserId',
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

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->nullable) {
            $res['Nullable'] = $this->nullable;
        }

        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }

        if (null !== $this->opUserId) {
            $res['OpUserId'] = $this->opUserId;
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

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Nullable'])) {
            $model->nullable = $map['Nullable'];
        }

        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }

        if (isset($map['OpUserId'])) {
            $model->opUserId = $map['OpUserId'];
        }

        return $model;
    }
}
