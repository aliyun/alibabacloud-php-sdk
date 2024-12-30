<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetLatestSubmitDetailRequest\submitDetailQuery;
use AlibabaCloud\Tea\Model;

class GetLatestSubmitDetailRequest extends Model
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
     * @var submitDetailQuery
     */
    public $submitDetailQuery;
    protected $_name = [
        'opTenantId'        => 'OpTenantId',
        'submitDetailQuery' => 'SubmitDetailQuery',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }
        if (null !== $this->submitDetailQuery) {
            $res['SubmitDetailQuery'] = null !== $this->submitDetailQuery ? $this->submitDetailQuery->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetLatestSubmitDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }
        if (isset($map['SubmitDetailQuery'])) {
            $model->submitDetailQuery = submitDetailQuery::fromMap($map['SubmitDetailQuery']);
        }

        return $model;
    }
}
