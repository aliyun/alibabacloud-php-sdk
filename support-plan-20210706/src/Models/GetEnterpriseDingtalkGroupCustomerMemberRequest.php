<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Supportplan\V20210706\Models;

use AlibabaCloud\Tea\Model;

class GetEnterpriseDingtalkGroupCustomerMemberRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 13900001111
     *
     * @var string
     */
    public $mobile;

    /**
     * @description This parameter is required.
     *
     * @example 123
     *
     * @var string
     */
    public $openGroupId;
    protected $_name = [
        'mobile'      => 'Mobile',
        'openGroupId' => 'OpenGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
        }
        if (null !== $this->openGroupId) {
            $res['OpenGroupId'] = $this->openGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetEnterpriseDingtalkGroupCustomerMemberRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }
        if (isset($map['OpenGroupId'])) {
            $model->openGroupId = $map['OpenGroupId'];
        }

        return $model;
    }
}
