<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListAlertNotificationsRequest\listQuery;
use AlibabaCloud\Tea\Model;

class ListAlertNotificationsRequest extends Model
{
    /**
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
        'listQuery'  => 'ListQuery',
        'opTenantId' => 'OpTenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
     * @return ListAlertNotificationsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ListQuery'])) {
            $model->listQuery = listQuery::fromMap($map['ListQuery']);
        }
        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }

        return $model;
    }
}
