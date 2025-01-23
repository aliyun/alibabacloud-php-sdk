<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListExtensionsResponseBody\pagingInfo\extensions;

use AlibabaCloud\Dara\Model;

class bindEventList extends Model
{
    /**
     * @var string
     */
    public $eventCode;
    /**
     * @var string
     */
    public $eventName;
    protected $_name = [
        'eventCode' => 'EventCode',
        'eventName' => 'EventName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
