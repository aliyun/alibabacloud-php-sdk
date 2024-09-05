<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Supportplan\V20210706\Models;

use AlibabaCloud\Tea\Model;

class DeleteEnterpriseDingtalkGroupCustomerMemberRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $mobiles;

    /**
     * @description This parameter is required.
     *
     * @example 12345
     *
     * @var string
     */
    public $openGroupId;
    protected $_name = [
        'mobiles'     => 'Mobiles',
        'openGroupId' => 'OpenGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mobiles) {
            $res['Mobiles'] = $this->mobiles;
        }
        if (null !== $this->openGroupId) {
            $res['OpenGroupId'] = $this->openGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteEnterpriseDingtalkGroupCustomerMemberRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Mobiles'])) {
            if (!empty($map['Mobiles'])) {
                $model->mobiles = $map['Mobiles'];
            }
        }
        if (isset($map['OpenGroupId'])) {
            $model->openGroupId = $map['OpenGroupId'];
        }

        return $model;
    }
}
