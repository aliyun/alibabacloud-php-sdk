<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\GetAlertResponseBody\alert;

class GetAlertResponseBody extends Model
{
    /**
     * @var alert
     */
    public $alert;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'alert' => 'Alert',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->alert) {
            $this->alert->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alert) {
            $res['Alert'] = null !== $this->alert ? $this->alert->toArray($noStream) : $this->alert;
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
        if (isset($map['Alert'])) {
            $model->alert = alert::fromMap($map['Alert']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
