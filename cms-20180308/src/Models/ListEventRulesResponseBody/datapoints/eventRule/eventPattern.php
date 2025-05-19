<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20180308\Models\ListEventRulesResponseBody\datapoints\eventRule;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20180308\Models\ListEventRulesResponseBody\datapoints\eventRule\eventPattern\eventPattern;

class eventPattern extends Model
{
    /**
     * @var eventPattern[]
     */
    public $eventPattern;
    protected $_name = [
        'eventPattern' => 'EventPattern',
    ];

    public function validate()
    {
        if (\is_array($this->eventPattern)) {
            Model::validateArray($this->eventPattern);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eventPattern) {
            if (\is_array($this->eventPattern)) {
                $res['EventPattern'] = [];
                $n1 = 0;
                foreach ($this->eventPattern as $item1) {
                    $res['EventPattern'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['EventPattern'])) {
            if (!empty($map['EventPattern'])) {
                $model->eventPattern = [];
                $n1 = 0;
                foreach ($map['EventPattern'] as $item1) {
                    $model->eventPattern[$n1++] = self::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
