<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Acm\V20200206\Models\DescribeTraceByConfigurationResponseBody;

use AlibabaCloud\SDK\Acm\V20200206\Models\DescribeTraceByConfigurationResponseBody\traces\eventGroups;
use AlibabaCloud\Tea\Model;

class traces extends Model
{
    /**
     * @var eventGroups[]
     */
    public $eventGroups;

    /**
     * @var int
     */
    public $timestamp;
    protected $_name = [
        'eventGroups' => 'EventGroups',
        'timestamp'   => 'Timestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventGroups) {
            $res['EventGroups'] = [];
            if (null !== $this->eventGroups && \is_array($this->eventGroups)) {
                $n = 0;
                foreach ($this->eventGroups as $item) {
                    $res['EventGroups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return traces
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventGroups'])) {
            if (!empty($map['EventGroups'])) {
                $model->eventGroups = [];
                $n                  = 0;
                foreach ($map['EventGroups'] as $item) {
                    $model->eventGroups[$n++] = null !== $item ? eventGroups::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        return $model;
    }
}
