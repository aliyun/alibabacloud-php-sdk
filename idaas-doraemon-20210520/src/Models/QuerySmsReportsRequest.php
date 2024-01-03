<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models;

use AlibabaCloud\Tea\Model;

class QuerySmsReportsRequest extends Model
{
    /**
     * @example doraemon_xxxxx
     *
     * @var string
     */
    public $appId;

    /**
     * @example eventId_xxxxxx
     *
     * @var string
     */
    public $eventId;
    protected $_name = [
        'appId'   => 'AppId',
        'eventId' => 'EventId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QuerySmsReportsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }

        return $model;
    }
}
