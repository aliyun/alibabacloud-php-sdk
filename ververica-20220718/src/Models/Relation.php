<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

class Relation extends Model
{
    /**
     * @var string
     */
    public $destination;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $source;
    protected $_name = [
        'destination' => 'destination',
        'jobId'       => 'jobId',
        'source'      => 'source',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->destination) {
            $res['destination'] = $this->destination;
        }
        if (null !== $this->jobId) {
            $res['jobId'] = $this->jobId;
        }
        if (null !== $this->source) {
            $res['source'] = $this->source;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Relation
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['destination'])) {
            $model->destination = $map['destination'];
        }
        if (isset($map['jobId'])) {
            $model->jobId = $map['jobId'];
        }
        if (isset($map['source'])) {
            $model->source = $map['source'];
        }

        return $model;
    }
}
