<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\newsElementResult\newsElementArticleList;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\newsElementResult\newsElementArticleList\newsElementList\event;
use AlibabaCloud\Tea\Model;

class newsElementList extends Model
{
    /**
     * @example task-started
     *
     * @var event
     */
    public $event;

    /**
     * @example xx
     *
     * @var string
     */
    public $location;

    /**
     * @example xx
     *
     * @var string
     */
    public $people;

    /**
     * @example 时间
     *
     * @var string
     */
    public $time;
    protected $_name = [
        'event' => 'Event',
        'location' => 'Location',
        'people' => 'People',
        'time' => 'Time',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->event) {
            $res['Event'] = null !== $this->event ? $this->event->toMap() : null;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->people) {
            $res['People'] = $this->people;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return newsElementList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Event'])) {
            $model->event = event::fromMap($map['Event']);
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['People'])) {
            $model->people = $map['People'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}
