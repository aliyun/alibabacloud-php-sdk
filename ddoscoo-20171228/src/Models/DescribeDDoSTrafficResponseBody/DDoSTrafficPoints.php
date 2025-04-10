<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeDDoSTrafficResponseBody;

use AlibabaCloud\Dara\Model;

class DDoSTrafficPoints extends Model
{
    /**
     * @var int
     */
    public $defenseMaxInBps;

    /**
     * @var int
     */
    public $sourceMaxInBps;

    /**
     * @var int
     */
    public $time;
    protected $_name = [
        'defenseMaxInBps' => 'DefenseMaxInBps',
        'sourceMaxInBps' => 'SourceMaxInBps',
        'time' => 'Time',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
