<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Dara\Model;

class UpdateEventStreamingShrinkRequest extends Model
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
     * @var string
     */
    public $runOptionsShrink;
    /**
     * @var string
     */
    public $sinkShrink;
    /**
     * @var string
     */
    public $sourceShrink;
    /**
     * @var string
     */
    public $transformsShrink;
    protected $_name = [
        'description'        => 'Description',
        'eventStreamingName' => 'EventStreamingName',
        'filterPattern'      => 'FilterPattern',
        'runOptionsShrink'   => 'RunOptions',
        'sinkShrink'         => 'Sink',
        'sourceShrink'       => 'Source',
        'transformsShrink'   => 'Transforms',
    ];

    public function validate()
    {
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

        if (null !== $this->runOptionsShrink) {
            $res['RunOptions'] = $this->runOptionsShrink;
        }

        if (null !== $this->sinkShrink) {
            $res['Sink'] = $this->sinkShrink;
        }

        if (null !== $this->sourceShrink) {
            $res['Source'] = $this->sourceShrink;
        }

        if (null !== $this->transformsShrink) {
            $res['Transforms'] = $this->transformsShrink;
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
            $model->runOptionsShrink = $map['RunOptions'];
        }

        if (isset($map['Sink'])) {
            $model->sinkShrink = $map['Sink'];
        }

        if (isset($map['Source'])) {
            $model->sourceShrink = $map['Source'];
        }

        if (isset($map['Transforms'])) {
            $model->transformsShrink = $map['Transforms'];
        }

        return $model;
    }
}
