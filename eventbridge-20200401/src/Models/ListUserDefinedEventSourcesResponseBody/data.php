<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListUserDefinedEventSourcesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListUserDefinedEventSourcesResponseBody\data\eventSourceList;

class data extends Model
{
    /**
     * @var eventSourceList[]
     */
    public $eventSourceList;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'eventSourceList' => 'EventSourceList',
        'nextToken' => 'NextToken',
        'total' => 'Total',
    ];

    public function validate()
    {
        if (\is_array($this->eventSourceList)) {
            Model::validateArray($this->eventSourceList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eventSourceList) {
            if (\is_array($this->eventSourceList)) {
                $res['EventSourceList'] = [];
                $n1 = 0;
                foreach ($this->eventSourceList as $item1) {
                    $res['EventSourceList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['EventSourceList'])) {
            if (!empty($map['EventSourceList'])) {
                $model->eventSourceList = [];
                $n1 = 0;
                foreach ($map['EventSourceList'] as $item1) {
                    $model->eventSourceList[$n1++] = eventSourceList::fromMap($item1);
                }
            }
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
