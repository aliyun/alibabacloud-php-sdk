<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\detailedStatus;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\runOptions;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\sink;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\source;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\transforms;

class data extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var detailedStatus
     */
    public $detailedStatus;

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
     * @var string
     */
    public $status;

    /**
     * @var transforms[]
     */
    public $transforms;
    protected $_name = [
        'description' => 'Description',
        'detailedStatus' => 'DetailedStatus',
        'eventStreamingName' => 'EventStreamingName',
        'filterPattern' => 'FilterPattern',
        'runOptions' => 'RunOptions',
        'sink' => 'Sink',
        'source' => 'Source',
        'status' => 'Status',
        'transforms' => 'Transforms',
    ];

    public function validate()
    {
        if (null !== $this->detailedStatus) {
            $this->detailedStatus->validate();
        }
        if (null !== $this->runOptions) {
            $this->runOptions->validate();
        }
        if (null !== $this->sink) {
            $this->sink->validate();
        }
        if (null !== $this->source) {
            $this->source->validate();
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

        if (null !== $this->detailedStatus) {
            $res['DetailedStatus'] = null !== $this->detailedStatus ? $this->detailedStatus->toArray($noStream) : $this->detailedStatus;
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

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->transforms) {
            if (\is_array($this->transforms)) {
                $res['Transforms'] = [];
                $n1 = 0;
                foreach ($this->transforms as $item1) {
                    $res['Transforms'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DetailedStatus'])) {
            $model->detailedStatus = detailedStatus::fromMap($map['DetailedStatus']);
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
                $n1 = 0;
                foreach ($map['Transforms'] as $item1) {
                    $model->transforms[$n1] = transforms::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
