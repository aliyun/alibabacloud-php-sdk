<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\AddBulkPhoneNumbersResponseBody;

use AlibabaCloud\Tea\Model;

class arrearagePhoneNumbers extends Model
{
    /**
     * @var string[]
     */
    public $arrearagePhoneNumber;
    protected $_name = [
        'arrearagePhoneNumber' => 'ArrearagePhoneNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->arrearagePhoneNumber) {
            $res['ArrearagePhoneNumber'] = $this->arrearagePhoneNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return arrearagePhoneNumbers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ArrearagePhoneNumber'])) {
            if (!empty($map['ArrearagePhoneNumber'])) {
                $model->arrearagePhoneNumber = $map['ArrearagePhoneNumber'];
            }
        }

        return $model;
    }
}
