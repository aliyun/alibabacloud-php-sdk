<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Tea\Model;

class GetUsersShrinkRequest extends Model
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
    public $userIdListShrink;
    protected $_name = [
        'opTenantId'       => 'OpTenantId',
        'userIdListShrink' => 'UserIdList',
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
        if (null !== $this->userIdListShrink) {
            $res['UserIdList'] = $this->userIdListShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUsersShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }
        if (isset($map['UserIdList'])) {
            $model->userIdListShrink = $map['UserIdList'];
        }

        return $model;
    }
}
