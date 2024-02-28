<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data;

use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\runOptions;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\sink;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\source;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\transforms;
use AlibabaCloud\Tea\Model;

class eventStreamings extends Model
{
    /**
     * @description The description of the event stream.
     *
     * @example demo
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the event stream.
     *
     * @example name
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
     * @description The parameters that are returned for the runtime environment.
     *
     * @var runOptions
     */
    public $runOptions;

    /**
     * @description The event target.
     *
     * @var sink
     */
    public $sink;

    /**
     * @description The event provider, which is also known as the event source.
     *
     * @var source
     */
    public $source;

    /**
     * @description The status of the event stream that is returned.
     *
     * @example RUNNING
     *
     * @var string
     */
    public $status;

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
        'status'             => 'Status',
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
     * @return eventStreamings
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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
