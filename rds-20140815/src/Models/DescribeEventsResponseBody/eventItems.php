<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeEventsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeEventsResponseBody\eventItems\eventItems;

class eventItems extends Model
{
    /**
     * @var eventItems[]
     */
    public $eventItems;
    protected $_name = [
        'eventItems' => 'EventItems',
    ];

    public function validate()
    {
        if (\is_array($this->eventItems)) {
            Model::validateArray($this->eventItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eventItems) {
            if (\is_array($this->eventItems)) {
                $res['EventItems'] = [];
                $n1 = 0;
                foreach ($this->eventItems as $item1) {
                    $res['EventItems'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['EventItems'])) {
            if (!empty($map['EventItems'])) {
                $model->eventItems = [];
                $n1 = 0;
                foreach ($map['EventItems'] as $item1) {
                    $model->eventItems[$n1] = self::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
