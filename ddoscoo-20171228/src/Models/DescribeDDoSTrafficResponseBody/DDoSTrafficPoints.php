<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeDDoSTrafficResponseBody;

use AlibabaCloud\Tea\Model;

class DDoSTrafficPoints extends Model
{
    /**
     * @example 129867
     *
     * @var int
     */
    public $defenseMaxInBps;

    /**
     * @example 129867
     *
     * @var int
     */
    public $sourceMaxInBps;

    /**
     * @example 234082304
     *
     * @var int
     */
    public $time;
    protected $_name = [
        'defenseMaxInBps' => 'DefenseMaxInBps',
        'sourceMaxInBps'  => 'SourceMaxInBps',
        'time'            => 'Time',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->defenseMaxInBps) {
            $res['DefenseMaxInBps'] = $this->defenseMaxInBps;
        }
        if (null !== $this->sourceMaxInBps) {
            $res['SourceMaxInBps'] = $this->sourceMaxInBps;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
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
        if (isset($map['DefenseMaxInBps'])) {
            $model->defenseMaxInBps = $map['DefenseMaxInBps'];
        }
        if (isset($map['SourceMaxInBps'])) {
            $model->sourceMaxInBps = $map['SourceMaxInBps'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}
