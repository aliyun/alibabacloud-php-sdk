<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtrace\V20190808\Models\GetTraceResponseBody\spans\span;

use AlibabaCloud\SDK\Xtrace\V20190808\Models\GetTraceResponseBody\spans\span\logEventList\logEvent;
use AlibabaCloud\Tea\Model;

class logEventList extends Model
{
    /**
     * @var logEvent[]
     */
    public $logEvent;
    protected $_name = [
        'logEvent' => 'LogEvent',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logEvent) {
            $res['LogEvent'] = [];
            if (null !== $this->logEvent && \is_array($this->logEvent)) {
                $n = 0;
                foreach ($this->logEvent as $item) {
                    $res['LogEvent'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logEventList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogEvent'])) {
            if (!empty($map['LogEvent'])) {
                $model->logEvent = [];
                $n               = 0;
                foreach ($map['LogEvent'] as $item) {
                    $model->logEvent[$n++] = null !== $item ? logEvent::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
