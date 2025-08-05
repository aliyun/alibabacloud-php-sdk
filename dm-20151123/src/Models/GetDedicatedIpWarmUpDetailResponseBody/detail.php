<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models\GetDedicatedIpWarmUpDetailResponseBody;

use AlibabaCloud\Dara\Model;

class detail extends Model
{
    /**
     * @var int
     */
    public $dayMark;

    /**
     * @var int
     */
    public $deliverCounts;

    /**
     * @var string
     */
    public $esp;

    /**
     * @var int
     */
    public $sendCounts;
    protected $_name = [
        'dayMark' => 'DayMark',
        'deliverCounts' => 'DeliverCounts',
        'esp' => 'Esp',
        'sendCounts' => 'SendCounts',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dayMark) {
            $res['DayMark'] = $this->dayMark;
        }

        if (null !== $this->deliverCounts) {
            $res['DeliverCounts'] = $this->deliverCounts;
        }

        if (null !== $this->esp) {
            $res['Esp'] = $this->esp;
        }

        if (null !== $this->sendCounts) {
            $res['SendCounts'] = $this->sendCounts;
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
        if (isset($map['DayMark'])) {
            $model->dayMark = $map['DayMark'];
        }

        if (isset($map['DeliverCounts'])) {
            $model->deliverCounts = $map['DeliverCounts'];
        }

        if (isset($map['Esp'])) {
            $model->esp = $map['Esp'];
        }

        if (isset($map['SendCounts'])) {
            $model->sendCounts = $map['SendCounts'];
        }

        return $model;
    }
}
