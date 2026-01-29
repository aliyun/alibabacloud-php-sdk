<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\QueryChatappPhoneNumbersResponseBody\phoneNumbers\callingConfigure;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cams\V20200606\Models\QueryChatappPhoneNumbersResponseBody\phoneNumbers\callingConfigure\calling\callHours;

class calling extends Model
{
    /**
     * @var callHours
     */
    public $callHours;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'callHours' => 'CallHours',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (null !== $this->callHours) {
            $this->callHours->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callHours) {
            $res['CallHours'] = null !== $this->callHours ? $this->callHours->toArray($noStream) : $this->callHours;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['CallHours'])) {
            $model->callHours = callHours::fromMap($map['CallHours']);
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
