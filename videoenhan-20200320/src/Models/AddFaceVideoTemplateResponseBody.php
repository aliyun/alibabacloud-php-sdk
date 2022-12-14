<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Models;

use AlibabaCloud\SDK\Videoenhan\V20200320\Models\AddFaceVideoTemplateResponseBody\date;
use AlibabaCloud\Tea\Model;

class AddFaceVideoTemplateResponseBody extends Model
{
    /**
     * @var date
     */
    public $date;

    /**
     * @var string
     */
    public $message;

    /**
     * @example F61182AE-515B-5B0A-A877-1C9AE908FF15
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'date'      => 'Date',
        'message'   => 'Message',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->date) {
            $res['Date'] = null !== $this->date ? $this->date->toMap() : null;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddFaceVideoTemplateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Date'])) {
            $model->date = date::fromMap($map['Date']);
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
