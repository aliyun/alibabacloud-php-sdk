<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class SendTTSVerifyLinkRequest extends Model
{
    /**
     * @description The ID of the alert contact.
     *
     * @example 123
     *
     * @var int
     */
    public $contactId;

    /**
     * @description The mobile number of the alert contact.
     *
     * @example 1381111****
     *
     * @var string
     */
    public $phone;
    protected $_name = [
        'contactId' => 'ContactId',
        'phone'     => 'Phone',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactId) {
            $res['ContactId'] = $this->contactId;
        }
        if (null !== $this->phone) {
            $res['Phone'] = $this->phone;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SendTTSVerifyLinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContactId'])) {
            $model->contactId = $map['ContactId'];
        }
        if (isset($map['Phone'])) {
            $model->phone = $map['Phone'];
        }

        return $model;
    }
}
