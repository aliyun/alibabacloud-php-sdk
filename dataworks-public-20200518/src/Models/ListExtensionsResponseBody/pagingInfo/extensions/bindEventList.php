<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListExtensionsResponseBody\pagingInfo\extensions;

use AlibabaCloud\Tea\Model;

class bindEventList extends Model
{
    /**
     * @description The code of the event.
     *
     * @example commit-file
     *
     * @var string
     */
    public $eventCode;

    /**
     * @description The name of the event.
     *
     * @var string
     */
    public $eventName;
    protected $_name = [
        'eventCode' => 'EventCode',
        'eventName' => 'EventName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventCode) {
            $res['EventCode'] = $this->eventCode;
        }
        if (null !== $this->eventName) {
            $res['EventName'] = $this->eventName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bindEventList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventCode'])) {
            $model->eventCode = $map['EventCode'];
        }
        if (isset($map['EventName'])) {
            $model->eventName = $map['EventName'];
        }

        return $model;
    }
}
