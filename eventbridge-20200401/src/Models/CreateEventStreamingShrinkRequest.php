<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingShrinkRequest\tags;
use AlibabaCloud\Tea\Model;

class CreateEventStreamingShrinkRequest extends Model
{
    /**
     * @description The description of the event stream.
     *
     * @example rocketmq2mns
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the event stream.
     *
     * This parameter is required.
     *
     * @example myeventstreaming
     *
     * @var string
     */
    public $eventStreamingName;

    /**
     * @description The rule that is used to filter events. If you leave this parameter empty, all events are matched.
     *
     * This parameter is required.
     *
     * @var string
     */
    public $filterPattern;

    /**
     * @description The parameters that are configured for the runtime environment.
     *
     * @var string
     */
    public $runOptionsShrink;

    /**
     * @description The event target. You must and can specify only one event target.
     *
     * This parameter is required.
     *
     * @var string
     */
    public $sinkShrink;

    /**
     * @description The event provider, which is also known as the event source. You must and can specify only one event source.
     *
     * This parameter is required.
     *
     * @var string
     */
    public $sourceShrink;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var string
     */
    public $transformsShrink;
    protected $_name = [
        'description' => 'Description',
        'eventStreamingName' => 'EventStreamingName',
        'filterPattern' => 'FilterPattern',
        'runOptionsShrink' => 'RunOptions',
        'sinkShrink' => 'Sink',
        'sourceShrink' => 'Source',
        'tags' => 'Tags',
        'transformsShrink' => 'Transforms',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->eventStreamingName) {
            $res['EventStreamingName'] = $this->eventStreamingName;
        }
        if (null !== $this->filterPattern) {
            $res['FilterPattern'] = $this->filterPattern;
        }
        if (null !== $this->runOptionsShrink) {
            $res['RunOptions'] = $this->runOptionsShrink;
        }
        if (null !== $this->sinkShrink) {
            $res['Sink'] = $this->sinkShrink;
        }
        if (null !== $this->sourceShrink) {
            $res['Source'] = $this->sourceShrink;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->transformsShrink) {
            $res['Transforms'] = $this->transformsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateEventStreamingShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EventStreamingName'])) {
            $model->eventStreamingName = $map['EventStreamingName'];
        }
        if (isset($map['FilterPattern'])) {
            $model->filterPattern = $map['FilterPattern'];
        }
        if (isset($map['RunOptions'])) {
            $model->runOptionsShrink = $map['RunOptions'];
        }
        if (isset($map['Sink'])) {
            $model->sinkShrink = $map['Sink'];
        }
        if (isset($map['Source'])) {
            $model->sourceShrink = $map['Source'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Transforms'])) {
            $model->transformsShrink = $map['Transforms'];
        }

        return $model;
    }
}
