<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetBizMetricByNameRequest\bizMetricByNameQuery;

class GetBizMetricByNameRequest extends Model
{
    /**
     * @var bizMetricByNameQuery
     */
    public $bizMetricByNameQuery;

    /**
     * @var int
     */
    public $opTenantId;

    /**
     * @var string
     */
    public $opUserId;
    protected $_name = [
        'bizMetricByNameQuery' => 'BizMetricByNameQuery',
        'opTenantId' => 'OpTenantId',
        'opUserId' => 'OpUserId',
    ];

    public function validate()
    {
        if (null !== $this->bizMetricByNameQuery) {
            $this->bizMetricByNameQuery->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizMetricByNameQuery) {
            $res['BizMetricByNameQuery'] = null !== $this->bizMetricByNameQuery ? $this->bizMetricByNameQuery->toArray($noStream) : $this->bizMetricByNameQuery;
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
        if (isset($map['BizMetricByNameQuery'])) {
            $model->bizMetricByNameQuery = bizMetricByNameQuery::fromMap($map['BizMetricByNameQuery']);
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
