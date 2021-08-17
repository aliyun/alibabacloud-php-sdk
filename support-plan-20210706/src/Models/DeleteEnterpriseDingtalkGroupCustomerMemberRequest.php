<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Supportplan\V20210706\Models;

use AlibabaCloud\Tea\Model;

class DeleteEnterpriseDingtalkGroupCustomerMemberRequest extends Model
{
    /**
     * @var string
     */
    public $openGroupId;

    /**
     * @var string[]
     */
    public $mobiles;
    protected $_name = [
        'openGroupId' => 'OpenGroupId',
        'mobiles'     => 'Mobiles',
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
        if (null !== $this->mobiles) {
            $res['Mobiles'] = $this->mobiles;
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
        if (isset($map['OpenGroupId'])) {
            $model->openGroupId = $map['OpenGroupId'];
        }
        if (isset($map['Mobiles'])) {
            if (!empty($map['Mobiles'])) {
                $model->mobiles = $map['Mobiles'];
            }
        }

        return $model;
    }
}
