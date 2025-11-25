<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20210202\Models;

use AlibabaCloud\Dara\Model;

class GetAlgorithmDefsRequest extends Model
{
    /**
     * @var string
     */
    public $latestTimestamp;

    /**
     * @var int
     */
    public $rangeEnd;

    /**
     * @var int
     */
    public $rangeStart;

    /**
     * @var string
     */
    public $timestamp;
    protected $_name = [
        'latestTimestamp' => 'LatestTimestamp',
        'rangeEnd' => 'RangeEnd',
        'rangeStart' => 'RangeStart',
        'timestamp' => 'Timestamp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->latestTimestamp) {
            $res['LatestTimestamp'] = $this->latestTimestamp;
        }

        if (null !== $this->rangeEnd) {
            $res['RangeEnd'] = $this->rangeEnd;
        }

        if (null !== $this->rangeStart) {
            $res['RangeStart'] = $this->rangeStart;
        }

        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
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
        if (isset($map['LatestTimestamp'])) {
            $model->latestTimestamp = $map['LatestTimestamp'];
        }

        if (isset($map['RangeEnd'])) {
            $model->rangeEnd = $map['RangeEnd'];
        }

        if (isset($map['RangeStart'])) {
            $model->rangeStart = $map['RangeStart'];
        }

        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        return $model;
    }
}
