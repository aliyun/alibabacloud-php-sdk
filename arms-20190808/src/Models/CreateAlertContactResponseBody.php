<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class CreateAlertContactResponseBody extends Model
{
    /**
     * @description The ID of the alert contact.
     *
     * @example 102**
     *
     * @var string
     */
    public $contactId;

    /**
     * @description The ID of the request.
     *
     * @example E9C9DA3D-10FE-472E-9EEF-2D0A3E41****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'contactId' => 'ContactId',
        'requestId' => 'RequestId',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAlertContactResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContactId'])) {
            $model->contactId = $map['ContactId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
