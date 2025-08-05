<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\source;

use AlibabaCloud\Tea\Model;

class sourceEventBusParameters extends Model
{
    /**
     * @example demo
     *
     * @var string
     */
    public $eventBusName;

    /**
     * @example test
     *
     * @var string
     */
    public $eventRuleName;
    protected $_name = [
        'eventBusName' => 'EventBusName',
        'eventRuleName' => 'EventRuleName',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return sourceEventBusParameters
     */
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
