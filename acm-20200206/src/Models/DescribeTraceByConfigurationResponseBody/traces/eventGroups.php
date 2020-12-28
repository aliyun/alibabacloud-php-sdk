<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Acm\V20200206\Models\DescribeTraceByConfigurationResponseBody\traces;

use AlibabaCloud\SDK\Acm\V20200206\Models\DescribeTraceByConfigurationResponseBody\traces\eventGroups\eventDetails;
use AlibabaCloud\Tea\Model;

class eventGroups extends Model
{
    /**
     * @var string
     */
    public $eventType;

    /**
     * @var eventDetails[]
     */
    public $eventDetails;
    protected $_name = [
        'eventType'    => 'EventType',
        'eventDetails' => 'EventDetails',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }
        if (null !== $this->eventDetails) {
            $res['EventDetails'] = [];
            if (null !== $this->eventDetails && \is_array($this->eventDetails)) {
                $n = 0;
                foreach ($this->eventDetails as $item) {
                    $res['EventDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eventGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }
        if (isset($map['EventDetails'])) {
            if (!empty($map['EventDetails'])) {
                $model->eventDetails = [];
                $n                   = 0;
                foreach ($map['EventDetails'] as $item) {
                    $model->eventDetails[$n++] = null !== $item ? eventDetails::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
