<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\AddBulkPhoneNumbersResponseBody;

use AlibabaCloud\Tea\Model;

class userdPhoneNumbers extends Model
{
    /**
     * @var string[]
     */
    public $userdPhoneNumber;
    protected $_name = [
        'userdPhoneNumber' => 'UserdPhoneNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userdPhoneNumber) {
            $res['UserdPhoneNumber'] = $this->userdPhoneNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userdPhoneNumbers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserdPhoneNumber'])) {
            if (!empty($map['UserdPhoneNumber'])) {
                $model->userdPhoneNumber = $map['UserdPhoneNumber'];
            }
        }

        return $model;
    }
}
