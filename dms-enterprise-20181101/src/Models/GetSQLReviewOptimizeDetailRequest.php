<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class GetSQLReviewOptimizeDetailRequest extends Model
{
    /**
     * @description The key that is used to query the details of optimization suggestions. You can call the [ListSQLReviewOriginSQL](https://help.aliyun.com/document_detail/257870.html) operation to query the key.
     *
     * This parameter is required.
     *
     * @example a57e54ec5433475ea3082d882fdb****
     *
     * @var string
     */
    public $SQLReviewQueryKey;

    /**
     * @description The ID of the tenant. You can call the [GetUserActiveTenant](https://help.aliyun.com/document_detail/198073.html) or [ListUserTenants](https://help.aliyun.com/document_detail/198074.html) operation to query the ID of the tenant.
     *
     * @example 1
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'SQLReviewQueryKey' => 'SQLReviewQueryKey',
        'tid' => 'Tid',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->SQLReviewQueryKey) {
            $res['SQLReviewQueryKey'] = $this->SQLReviewQueryKey;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSQLReviewOptimizeDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SQLReviewQueryKey'])) {
            $model->SQLReviewQueryKey = $map['SQLReviewQueryKey'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
