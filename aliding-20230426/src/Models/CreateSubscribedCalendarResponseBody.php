<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class CreateSubscribedCalendarResponseBody extends Model
{
    /**
     * @example M5MjkxNDUxQHVzZXJzLmRpbmd0YWxrLmxxxxxxx
     *
     * @var string
     */
    public $calendarId;

    /**
     * @description requestId
     *
     * @example 0FAAEC9C-C6C8-5C87-AF8E-1195889BBXXX
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'calendarId' => 'calendarId',
        'requestId'  => 'requestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->calendarId) {
            $res['calendarId'] = $this->calendarId;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSubscribedCalendarResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['calendarId'])) {
            $model->calendarId = $map['calendarId'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
