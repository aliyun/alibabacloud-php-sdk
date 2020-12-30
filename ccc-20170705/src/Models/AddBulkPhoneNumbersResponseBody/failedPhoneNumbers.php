<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\AddBulkPhoneNumbersResponseBody;

use AlibabaCloud\Tea\Model;

class failedPhoneNumbers extends Model
{
    /**
     * @var string[]
     */
    public $failedPhoneNumber;
    protected $_name = [
        'failedPhoneNumber' => 'FailedPhoneNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failedPhoneNumber) {
            $res['FailedPhoneNumber'] = $this->failedPhoneNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return failedPhoneNumbers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FailedPhoneNumber'])) {
            if (!empty($map['FailedPhoneNumber'])) {
                $model->failedPhoneNumber = $map['FailedPhoneNumber'];
            }
        }

        return $model;
    }
}
