<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models\CreateAlertDestinationResponseBody\data;

use AlibabaCloud\Dara\Model;

class params extends Model
{
    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $phone;

    /**
     * @var string
     */
    public $sec;

    /**
     * @var string
     */
    public $webhook;
    protected $_name = [
        'email' => 'email',
        'phone' => 'phone',
        'sec' => 'sec',
        'webhook' => 'webhook',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->email) {
            $res['email'] = $this->email;
        }

        if (null !== $this->phone) {
            $res['phone'] = $this->phone;
        }

        if (null !== $this->sec) {
            $res['sec'] = $this->sec;
        }

        if (null !== $this->webhook) {
            $res['webhook'] = $this->webhook;
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
        if (isset($map['email'])) {
            $model->email = $map['email'];
        }

        if (isset($map['phone'])) {
            $model->phone = $map['phone'];
        }

        if (isset($map['sec'])) {
            $model->sec = $map['sec'];
        }

        if (isset($map['webhook'])) {
            $model->webhook = $map['webhook'];
        }

        return $model;
    }
}
