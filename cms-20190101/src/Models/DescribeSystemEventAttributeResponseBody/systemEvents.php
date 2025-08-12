<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSystemEventAttributeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSystemEventAttributeResponseBody\systemEvents\systemEvent;

class systemEvents extends Model
{
    /**
     * @var systemEvent[]
     */
    public $systemEvent;
    protected $_name = [
        'systemEvent' => 'SystemEvent',
    ];

    public function validate()
    {
        if (\is_array($this->systemEvent)) {
            Model::validateArray($this->systemEvent);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->systemEvent) {
            if (\is_array($this->systemEvent)) {
                $res['SystemEvent'] = [];
                $n1 = 0;
                foreach ($this->systemEvent as $item1) {
                    $res['SystemEvent'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SystemEvent'])) {
            if (!empty($map['SystemEvent'])) {
                $model->systemEvent = [];
                $n1 = 0;
                foreach ($map['SystemEvent'] as $item1) {
                    $model->systemEvent[$n1] = systemEvent::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
