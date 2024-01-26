<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Status\V20200117\Models\ListEventInProgressResponseBody;

use AlibabaCloud\SDK\Status\V20200117\Models\ListEventInProgressResponseBody\data\eventUpdates;
use AlibabaCloud\SDK\Status\V20200117\Models\ListEventInProgressResponseBody\data\impacts;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var eventUpdates[]
     */
    public $eventUpdates;

    /**
     * @example 101
     *
     * @var int
     */
    public $id;

    /**
     * @var impacts[]
     */
    public $impacts;

    /**
     * @example 1680660940017
     *
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'eventUpdates' => 'EventUpdates',
        'id'           => 'Id',
        'impacts'      => 'Impacts',
        'startTime'    => 'StartTime',
        'title'        => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventUpdates) {
            $res['EventUpdates'] = [];
            if (null !== $this->eventUpdates && \is_array($this->eventUpdates)) {
                $n = 0;
                foreach ($this->eventUpdates as $item) {
                    $res['EventUpdates'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->impacts) {
            $res['Impacts'] = [];
            if (null !== $this->impacts && \is_array($this->impacts)) {
                $n = 0;
                foreach ($this->impacts as $item) {
                    $res['Impacts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventUpdates'])) {
            if (!empty($map['EventUpdates'])) {
                $model->eventUpdates = [];
                $n                   = 0;
                foreach ($map['EventUpdates'] as $item) {
                    $model->eventUpdates[$n++] = null !== $item ? eventUpdates::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Impacts'])) {
            if (!empty($map['Impacts'])) {
                $model->impacts = [];
                $n              = 0;
                foreach ($map['Impacts'] as $item) {
                    $model->impacts[$n++] = null !== $item ? impacts::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
