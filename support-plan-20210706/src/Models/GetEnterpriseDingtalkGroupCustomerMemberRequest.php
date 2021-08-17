<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Supportplan\V20210706\Models;

use AlibabaCloud\Tea\Model;

class GetEnterpriseDingtalkGroupCustomerMemberRequest extends Model
{
    /**
     * @var string
     */
    public $openGroupId;

    /**
     * @var string
     */
    public $mobile;
    protected $_name = [
        'openGroupId' => 'OpenGroupId',
        'mobile'      => 'Mobile',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->openGroupId) {
            $res['OpenGroupId'] = $this->openGroupId;
        }
        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
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
        if (isset($map['OpenGroupId'])) {
            $model->openGroupId = $map['OpenGroupId'];
        }
        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }

        return $model;
    }
}
