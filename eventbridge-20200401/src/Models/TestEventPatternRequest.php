<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Tea\Model;

class TestEventPatternRequest extends Model
{
    /**
     * @description The event.
     *
     * @example {
     * "datacontenttype": "application/json;charset=utf-8",
     * "aliyunaccountid": "*****",
     * "aliyunpublishtime": "2023-04-****:54:57.939Z",
     * "data": {
     * "resourceEventType": "****",
     * "resourceCreateTime": "****",
     * "resourceId": "sls-code-***-debug",
     * "captureTime": "***"
     * },
     * "aliyunoriginalaccountid": "****",
     * "specversion": "1.0",
     * "aliyuneventbusname": "****",
     * "id": "295e6bd2-bb72-4f70-****-204a0680ee41",
     * "source": "acs.sls",
     * "time": "2023-04-***:37:56Z",
     * "aliyunregionid": "cn-***",
     * "type": "sls:Config:****"
     * }
     * @var string
     */
    public $event;

    /**
     * @description The event pattern.
     *
     * @example {"key1": "value1"}
     *
     * @var string
     */
    public $eventPattern;
    protected $_name = [
        'event'        => 'Event',
        'eventPattern' => 'EventPattern',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->event) {
            $res['Event'] = $this->event;
        }
        if (null !== $this->eventPattern) {
            $res['EventPattern'] = $this->eventPattern;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TestEventPatternRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Event'])) {
            $model->event = $map['Event'];
        }
        if (isset($map['EventPattern'])) {
            $model->eventPattern = $map['EventPattern'];
        }

        return $model;
    }
}
