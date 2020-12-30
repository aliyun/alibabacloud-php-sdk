<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeDDoSTrafficResponseBody;

use AlibabaCloud\Tea\Model;

class DDoSTrafficPoints extends Model
{
    /**
     * @var int
     */
    public $time;

    /**
     * @var int
     */
    public $sourceMaxInBps;

    /**
     * @var int
     */
    public $defenseMaxInBps;
    protected $_name = [
        'time'            => 'Time',
        'sourceMaxInBps'  => 'SourceMaxInBps',
        'defenseMaxInBps' => 'DefenseMaxInBps',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->sourceMaxInBps) {
            $res['SourceMaxInBps'] = $this->sourceMaxInBps;
        }
        if (null !== $this->defenseMaxInBps) {
            $res['DefenseMaxInBps'] = $this->defenseMaxInBps;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DDoSTrafficPoints
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['SourceMaxInBps'])) {
            $model->sourceMaxInBps = $map['SourceMaxInBps'];
        }
        if (isset($map['DefenseMaxInBps'])) {
            $model->defenseMaxInBps = $map['DefenseMaxInBps'];
        }

        return $model;
    }
}
