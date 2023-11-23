<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\runOptions;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\sink;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\source;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\transforms;
use AlibabaCloud\Tea\Model;

class UpdateEventStreamingRequest extends Model
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
     * @example myeventstreaming
     *
     * @var string
     */
    public $eventStreamingName;

    /**
     * @description The rule that is used to filter events. If you leave this parameter empty, all events are matched.
     *
     * @var string
     */
    public $filterPattern;

    /**
     * @description The parameters that are configured for the runtime environment.
     *
     * @var runOptions
     */
    public $runOptions;

    /**
     * @description The event target. You must and can specify only one event target.
     *
     * @var sink
     */
    public $sink;

    /**
     * @description The event source, which is also known as the event source. You must and can specify only one event source.
     *
     * @var source
     */
    public $source;

    /**
     * @var transforms[]
     */
    public $transforms;
    protected $_name = [
        'description'        => 'Description',
        'eventStreamingName' => 'EventStreamingName',
        'filterPattern'      => 'FilterPattern',
        'runOptions'         => 'RunOptions',
        'sink'               => 'Sink',
        'source'             => 'Source',
        'transforms'         => 'Transforms',
    ];

    public function validate()
    {
    }

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
        if (null !== $this->runOptions) {
            $res['RunOptions'] = null !== $this->runOptions ? $this->runOptions->toMap() : null;
        }
        if (null !== $this->sink) {
            $res['Sink'] = null !== $this->sink ? $this->sink->toMap() : null;
        }
        if (null !== $this->source) {
            $res['Source'] = null !== $this->source ? $this->source->toMap() : null;
        }
        if (null !== $this->transforms) {
            $res['Transforms'] = [];
            if (null !== $this->transforms && \is_array($this->transforms)) {
                $n = 0;
                foreach ($this->transforms as $item) {
                    $res['Transforms'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateEventStreamingRequest
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
            $model->runOptions = runOptions::fromMap($map['RunOptions']);
        }
        if (isset($map['Sink'])) {
            $model->sink = sink::fromMap($map['Sink']);
        }
        if (isset($map['Source'])) {
            $model->source = source::fromMap($map['Source']);
        }
        if (isset($map['Transforms'])) {
            if (!empty($map['Transforms'])) {
                $model->transforms = [];
                $n                 = 0;
                foreach ($map['Transforms'] as $item) {
                    $model->transforms[$n++] = null !== $item ? transforms::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
