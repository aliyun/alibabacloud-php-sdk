<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models;

use AlibabaCloud\Dara\Model;

class GetDedicatedIpWarmUpDetailRequest extends Model
{
    /**
     * @var string
     */
    public $dedicatedIp;

    /**
     * @var int
     */
    public $endDayMark;

    /**
     * @var string
     */
    public $esp;

    /**
     * @var int
     */
    public $startDayMark;
    protected $_name = [
        'dedicatedIp' => 'DedicatedIp',
        'endDayMark' => 'EndDayMark',
        'esp' => 'Esp',
        'startDayMark' => 'StartDayMark',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dedicatedIp) {
            $res['DedicatedIp'] = $this->dedicatedIp;
        }

        if (null !== $this->endDayMark) {
            $res['EndDayMark'] = $this->endDayMark;
        }

        if (null !== $this->esp) {
            $res['Esp'] = $this->esp;
        }

        if (null !== $this->startDayMark) {
            $res['StartDayMark'] = $this->startDayMark;
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
        if (isset($map['DedicatedIp'])) {
            $model->dedicatedIp = $map['DedicatedIp'];
        }

        if (isset($map['EndDayMark'])) {
            $model->endDayMark = $map['EndDayMark'];
        }

        if (isset($map['Esp'])) {
            $model->esp = $map['Esp'];
        }

        if (isset($map['StartDayMark'])) {
            $model->startDayMark = $map['StartDayMark'];
        }

        return $model;
    }
}
