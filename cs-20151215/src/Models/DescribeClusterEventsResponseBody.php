<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterEventsResponseBody\events;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterEventsResponseBody\pageInfo;

class DescribeClusterEventsResponseBody extends Model
{
    /**
     * @var events[]
     */
    public $events;

    /**
     * @var pageInfo
     */
    public $pageInfo;
    protected $_name = [
        'events' => 'events',
        'pageInfo' => 'page_info',
    ];

    public function validate()
    {
        if (\is_array($this->events)) {
            Model::validateArray($this->events);
        }
        if (null !== $this->pageInfo) {
            $this->pageInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->events) {
            if (\is_array($this->events)) {
                $res['events'] = [];
                $n1 = 0;
                foreach ($this->events as $item1) {
                    $res['events'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pageInfo) {
            $res['page_info'] = null !== $this->pageInfo ? $this->pageInfo->toArray($noStream) : $this->pageInfo;
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
        if (isset($map['events'])) {
            if (!empty($map['events'])) {
                $model->events = [];
                $n1 = 0;
                foreach ($map['events'] as $item1) {
                    $model->events[$n1] = events::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['page_info'])) {
            $model->pageInfo = pageInfo::fromMap($map['page_info']);
        }

        return $model;
    }
}
