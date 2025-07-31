<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListProjectMembersRequest\listQuery;
use AlibabaCloud\Tea\Model;

class ListProjectMembersRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 1030111021
     *
     * @var int
     */
    public $id;

    /**
     * @description This parameter is required.
     *
     * @example 1030111021
     *
     * @var listQuery
     */
    public $listQuery;

    /**
     * @description This parameter is required.
     *
     * @example 30001011
     *
     * @var int
     */
    public $opTenantId;
    protected $_name = [
        'id' => 'Id',
        'listQuery' => 'ListQuery',
        'opTenantId' => 'OpTenantId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->listQuery) {
            $res['ListQuery'] = null !== $this->listQuery ? $this->listQuery->toMap() : null;
        }
        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListProjectMembersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
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
