<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeCustomEventAttributeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeCustomEventAttributeResponseBody\customEvents\customEvent;

class customEvents extends Model
{
    /**
     * @var customEvent[]
     */
    public $customEvent;
    protected $_name = [
        'customEvent' => 'CustomEvent',
    ];

    public function validate()
    {
        if (\is_array($this->customEvent)) {
            Model::validateArray($this->customEvent);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customEvent) {
            if (\is_array($this->customEvent)) {
                $res['CustomEvent'] = [];
                $n1 = 0;
                foreach ($this->customEvent as $item1) {
                    $res['CustomEvent'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CustomEvent'])) {
            if (!empty($map['CustomEvent'])) {
                $model->customEvent = [];
                $n1 = 0;
                foreach ($map['CustomEvent'] as $item1) {
                    $model->customEvent[$n1] = customEvent::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
