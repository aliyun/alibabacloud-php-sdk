<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtrace\V20190808\Models\GetTraceResponseBody\spans\span;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Xtrace\V20190808\Models\GetTraceResponseBody\spans\span\logEventList\logEvent;

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
        if (\is_array($this->logEvent)) {
            Model::validateArray($this->logEvent);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->logEvent) {
            if (\is_array($this->logEvent)) {
                $res['LogEvent'] = [];
                $n1 = 0;
                foreach ($this->logEvent as $item1) {
                    $res['LogEvent'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['LogEvent'])) {
            if (!empty($map['LogEvent'])) {
                $model->logEvent = [];
                $n1 = 0;
                foreach ($map['LogEvent'] as $item1) {
                    $model->logEvent[$n1] = logEvent::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
