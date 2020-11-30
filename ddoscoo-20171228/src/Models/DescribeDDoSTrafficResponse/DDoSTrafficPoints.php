<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeDDoSTrafficResponse;

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
    public $defenseMaxInBps;

    /**
     * @var int
     */
    public $sourceMaxInBps;
    protected $_name = [
        'time'            => 'Time',
        'defenseMaxInBps' => 'DefenseMaxInBps',
        'sourceMaxInBps'  => 'SourceMaxInBps',
    ];

    public function validate()
    {
        Model::validateRequired('time', $this->time, true);
        Model::validateRequired('defenseMaxInBps', $this->defenseMaxInBps, true);
        Model::validateRequired('sourceMaxInBps', $this->sourceMaxInBps, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->defenseMaxInBps) {
            $res['DefenseMaxInBps'] = $this->defenseMaxInBps;
        }
        if (null !== $this->sourceMaxInBps) {
            $res['SourceMaxInBps'] = $this->sourceMaxInBps;
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
        if (isset($map['DefenseMaxInBps'])) {
            $model->defenseMaxInBps = $map['DefenseMaxInBps'];
        }
        if (isset($map['SourceMaxInBps'])) {
            $model->sourceMaxInBps = $map['SourceMaxInBps'];
        }

        return $model;
    }
}
