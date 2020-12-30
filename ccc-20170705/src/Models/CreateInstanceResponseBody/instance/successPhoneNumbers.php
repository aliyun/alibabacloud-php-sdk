<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\CreateInstanceResponseBody\instance;

use AlibabaCloud\Tea\Model;

class successPhoneNumbers extends Model
{
    /**
     * @var string[]
     */
    public $successPhoneNumber;
    protected $_name = [
        'successPhoneNumber' => 'SuccessPhoneNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->successPhoneNumber) {
            $res['SuccessPhoneNumber'] = $this->successPhoneNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return successPhoneNumbers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SuccessPhoneNumber'])) {
            if (!empty($map['SuccessPhoneNumber'])) {
                $model->successPhoneNumber = $map['SuccessPhoneNumber'];
            }
        }

        return $model;
    }
}
