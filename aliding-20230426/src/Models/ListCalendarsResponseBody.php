<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListCalendarsResponseBody\response;

class ListCalendarsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var response
     */
    public $response;
    protected $_name = [
        'requestId' => 'requestId',
        'response'  => 'response',
    ];

    public function validate()
    {
        if (null !== $this->response) {
            $this->response->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->response) {
            $res['response'] = null !== $this->response ? $this->response->toArray($noStream) : $this->response;
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
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['response'])) {
            $model->response = response::fromMap($map['response']);
        }

        return $model;
    }
}
