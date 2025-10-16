<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeInvadeEventNameListResponseBody;

use AlibabaCloud\Dara\Model;

class eventNameList extends Model
{
    /**
     * @var string
     */
    public $eventKey;

    /**
     * @var string
     */
    public $eventName;
    protected $_name = [
        'eventKey' => 'EventKey',
        'eventName' => 'EventName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eventKey) {
            $res['EventKey'] = $this->eventKey;
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
        if (isset($map['EventKey'])) {
            $model->eventKey = $map['EventKey'];
        }

        if (isset($map['EventName'])) {
            $model->eventName = $map['EventName'];
        }

        return $model;
    }
}
