<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imarketing\V20220704\Models;

use AlibabaCloud\Tea\Model;

class SendSmsRequest extends Model
{
    /**
     * @var string
     */
    public $phoneNumbers;
    protected $_name = [
        'phoneNumbers' => 'PhoneNumbers',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->phoneNumbers) {
            $res['PhoneNumbers'] = $this->phoneNumbers;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SendSmsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PhoneNumbers'])) {
            $model->phoneNumbers = $map['PhoneNumbers'];
        }

        return $model;
    }
}
