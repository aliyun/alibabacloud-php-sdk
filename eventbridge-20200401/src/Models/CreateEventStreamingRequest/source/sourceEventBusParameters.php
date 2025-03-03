<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\source;

use AlibabaCloud\Dara\Model;

class sourceEventBusParameters extends Model
{
    /**
     * @var string
     */
    public $eventBusName;
    /**
     * @var string
     */
    public $eventRuleName;
    protected $_name = [
        'eventBusName'  => 'EventBusName',
        'eventRuleName' => 'EventRuleName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eventBusName) {
            $res['EventBusName'] = $this->eventBusName;
        }

        if (null !== $this->eventRuleName) {
            $res['EventRuleName'] = $this->eventRuleName;
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
        if (isset($map['EventBusName'])) {
            $model->eventBusName = $map['EventBusName'];
        }

        if (isset($map['EventRuleName'])) {
            $model->eventRuleName = $map['EventRuleName'];
        }

        return $model;
    }
}
