<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Dara\Model;

class GetQueryOptimizeDataTrendRequest extends Model
{
    /**
     * @var string
     */
    public $end;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var string
     */
    public $instanceIds;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $start;

    /**
     * @var string
     */
    public $tagNames;
    protected $_name = [
        'end' => 'End',
        'engine' => 'Engine',
        'instanceIds' => 'InstanceIds',
        'region' => 'Region',
        'start' => 'Start',
        'tagNames' => 'TagNames',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->end) {
            $res['End'] = $this->end;
        }

        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }

        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }

        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        if (null !== $this->start) {
            $res['Start'] = $this->start;
        }

        if (null !== $this->tagNames) {
            $res['TagNames'] = $this->tagNames;
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
        if (isset($map['End'])) {
            $model->end = $map['End'];
        }

        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }

        if (isset($map['InstanceIds'])) {
            $model->instanceIds = $map['InstanceIds'];
        }

        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        if (isset($map['Start'])) {
            $model->start = $map['Start'];
        }

        if (isset($map['TagNames'])) {
            $model->tagNames = $map['TagNames'];
        }

        return $model;
    }
}
