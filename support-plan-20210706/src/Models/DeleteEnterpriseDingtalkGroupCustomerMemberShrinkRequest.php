<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Supportplan\V20210706\Models;

use AlibabaCloud\Tea\Model;

class DeleteEnterpriseDingtalkGroupCustomerMemberShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $mobilesShrink;

    /**
     * @var string
     */
    public $openGroupId;
    protected $_name = [
        'mobilesShrink' => 'Mobiles',
        'openGroupId'   => 'OpenGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mobilesShrink) {
            $res['Mobiles'] = $this->mobilesShrink;
        }
        if (null !== $this->openGroupId) {
            $res['OpenGroupId'] = $this->openGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteEnterpriseDingtalkGroupCustomerMemberShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Mobiles'])) {
            $model->mobilesShrink = $map['Mobiles'];
        }
        if (isset($map['OpenGroupId'])) {
            $model->openGroupId = $map['OpenGroupId'];
        }

        return $model;
    }
}
