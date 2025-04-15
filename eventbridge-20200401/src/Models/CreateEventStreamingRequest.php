<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\runOptions;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\sink;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\source;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\tags;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\transforms;

class CreateEventStreamingRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $eventStreamingName;

    /**
     * @var string
     */
    public $filterPattern;

    /**
     * @var runOptions
     */
    public $runOptions;

    /**
     * @var sink
     */
    public $sink;

    /**
     * @var source
     */
    public $source;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var transforms[]
     */
    public $transforms;
    protected $_name = [
        'description' => 'Description',
        'eventStreamingName' => 'EventStreamingName',
        'filterPattern' => 'FilterPattern',
        'runOptions' => 'RunOptions',
        'sink' => 'Sink',
        'source' => 'Source',
        'tags' => 'Tags',
        'transforms' => 'Transforms',
    ];

    public function validate()
    {
        if (null !== $this->runOptions) {
            $this->runOptions->validate();
        }
        if (null !== $this->sink) {
            $this->sink->validate();
        }
        if (null !== $this->source) {
            $this->source->validate();
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        if (\is_array($this->transforms)) {
            Model::validateArray($this->transforms);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['RunOptions'] = null !== $this->runOptions ? $this->runOptions->toArray($noStream) : $this->runOptions;
        }

        if (null !== $this->sink) {
            $res['Sink'] = null !== $this->sink ? $this->sink->toArray($noStream) : $this->sink;
        }

        if (null !== $this->source) {
            $res['Source'] = null !== $this->source ? $this->source->toArray($noStream) : $this->source;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->transforms) {
            if (\is_array($this->transforms)) {
                $res['Transforms'] = [];
                $n1 = 0;
                foreach ($this->transforms as $item1) {
                    $res['Transforms'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
                }
            }
        }

        if (isset($map['Transforms'])) {
            if (!empty($map['Transforms'])) {
                $model->transforms = [];
                $n1 = 0;
                foreach ($map['Transforms'] as $item1) {
                    $model->transforms[$n1++] = transforms::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
