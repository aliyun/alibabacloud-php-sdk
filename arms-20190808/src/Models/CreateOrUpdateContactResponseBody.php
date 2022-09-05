<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateOrUpdateContactResponseBody\alertContact;
use AlibabaCloud\Tea\Model;

class CreateOrUpdateContactResponseBody extends Model
{
    /**
     * @var alertContact
     */
    public $alertContact;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'alertContact' => 'AlertContact',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertContact) {
            $res['AlertContact'] = null !== $this->alertContact ? $this->alertContact->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateOrUpdateContactResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertContact'])) {
            $model->alertContact = alertContact::fromMap($map['AlertContact']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
