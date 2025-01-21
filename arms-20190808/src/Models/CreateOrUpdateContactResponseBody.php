<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateOrUpdateContactResponseBody\alertContact;

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
        if (null !== $this->alertContact) {
            $this->alertContact->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertContact) {
            $res['AlertContact'] = null !== $this->alertContact ? $this->alertContact->toArray($noStream) : $this->alertContact;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
