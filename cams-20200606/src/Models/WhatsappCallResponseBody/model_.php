<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\WhatsappCallResponseBody;

use AlibabaCloud\Dara\Model;

class model_ extends Model
{
    /**
     * @var string
     */
    public $callId;
    protected $_name = [
        'callId' => 'CallId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callId) {
            $res['CallId'] = $this->callId;
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
        if (isset($map['CallId'])) {
            $model->callId = $map['CallId'];
        }

        return $model;
    }
}
