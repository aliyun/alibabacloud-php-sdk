<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\newsElementResult\newsElementArticleList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\newsElementResult\newsElementArticleList\newsElementList\event;

class newsElementList extends Model
{
    /**
     * @var event
     */
    public $event;

    /**
     * @var string
     */
    public $location;

    /**
     * @var string
     */
    public $people;

    /**
     * @var string
     */
    public $time;
    protected $_name = [
        'event' => 'Event',
        'location' => 'Location',
        'people' => 'People',
        'time' => 'Time',
    ];

    public function validate()
    {
        if (null !== $this->event) {
            $this->event->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->event) {
            $res['Event'] = null !== $this->event ? $this->event->toArray($noStream) : $this->event;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
