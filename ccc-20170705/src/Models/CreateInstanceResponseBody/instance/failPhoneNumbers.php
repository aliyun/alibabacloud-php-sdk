<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\CreateInstanceResponseBody\instance;

use AlibabaCloud\Tea\Model;

class failPhoneNumbers extends Model
{
    /**
     * @var string[]
     */
    public $failPhoneNumber;
    protected $_name = [
        'failPhoneNumber' => 'FailPhoneNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failPhoneNumber) {
            $res['FailPhoneNumber'] = $this->failPhoneNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return failPhoneNumbers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FailPhoneNumber'])) {
            if (!empty($map['FailPhoneNumber'])) {
                $model->failPhoneNumber = $map['FailPhoneNumber'];
            }
        }

        return $model;
    }
}
