<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models;

use AlibabaCloud\Tea\Model;

class GetUserIdByPhoneNumberRequest extends Model
{
    /**
     * @var string
     */
    public $phoneNumber;
    protected $_name = [
        'phoneNumber' => 'phoneNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->phoneNumber) {
            $res['phoneNumber'] = $this->phoneNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUserIdByPhoneNumberRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['phoneNumber'])) {
            $model->phoneNumber = $map['phoneNumber'];
        }

        return $model;
    }
}
