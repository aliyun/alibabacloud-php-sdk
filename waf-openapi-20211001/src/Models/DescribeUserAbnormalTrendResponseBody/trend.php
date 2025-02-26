<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeUserAbnormalTrendResponseBody;

use AlibabaCloud\Dara\Model;

class trend extends Model
{
    /**
     * @var int
     */
    public $abnormalHigh;
    /**
     * @var int
     */
    public $abnormalLow;
    /**
     * @var int
     */
    public $abnormalMedium;
    /**
     * @var int
     */
    public $timeStamp;
    /**
     * @var int
     */
    public $timestamp;
    protected $_name = [
        'abnormalHigh'   => 'AbnormalHigh',
        'abnormalLow'    => 'AbnormalLow',
        'abnormalMedium' => 'AbnormalMedium',
        'timeStamp'      => 'TimeStamp',
        'timestamp'      => 'Timestamp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->abnormalHigh) {
            $res['AbnormalHigh'] = $this->abnormalHigh;
        }

        if (null !== $this->abnormalLow) {
            $res['AbnormalLow'] = $this->abnormalLow;
        }

        if (null !== $this->abnormalMedium) {
            $res['AbnormalMedium'] = $this->abnormalMedium;
        }

        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
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
        if (isset($map['AbnormalHigh'])) {
            $model->abnormalHigh = $map['AbnormalHigh'];
        }

        if (isset($map['AbnormalLow'])) {
            $model->abnormalLow = $map['AbnormalLow'];
        }

        if (isset($map['AbnormalMedium'])) {
            $model->abnormalMedium = $map['AbnormalMedium'];
        }

        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        return $model;
    }
}
