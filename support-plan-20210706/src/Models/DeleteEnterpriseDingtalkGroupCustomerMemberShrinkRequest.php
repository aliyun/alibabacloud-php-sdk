<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Supportplan\V20210706\Models;

use AlibabaCloud\Tea\Model;

class DeleteEnterpriseDingtalkGroupCustomerMemberShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $openGroupId;

    /**
     * @var string
     */
    public $mobilesShrink;
    protected $_name = [
        'openGroupId'   => 'OpenGroupId',
        'mobilesShrink' => 'Mobiles',
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
        if (null !== $this->mobilesShrink) {
            $res['Mobiles'] = $this->mobilesShrink;
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
        if (isset($map['OpenGroupId'])) {
            $model->openGroupId = $map['OpenGroupId'];
        }
        if (isset($map['Mobiles'])) {
            $model->mobilesShrink = $map['Mobiles'];
        }

        return $model;
    }
}
