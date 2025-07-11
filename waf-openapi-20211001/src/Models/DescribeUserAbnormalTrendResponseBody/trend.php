<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeUserAbnormalTrendResponseBody;

use AlibabaCloud\Tea\Model;

class trend extends Model
{
    /**
     * @description The number of high risks.
     *
     * @example 12
     *
     * @var int
     */
    public $abnormalHigh;

    /**
     * @description The number of low risks.
     *
     * @example 23
     *
     * @var int
     */
    public $abnormalLow;

    /**
     * @description The number of medium risks.
     *
     * @example 14
     *
     * @var int
     */
    public $abnormalMedium;

    /**
     * @description The time at which the API was called. The value is a UNIX timestamp displayed in UTC. Unit: seconds.
     *
     * >Notice: The parameter has been deprecated, it is recommended to use the Timestamp parameter.
     *
     * @example 1722268800
     *
     * @var int
     */
    public $timeStamp;

    /**
     * @description The time at which the API was called. The value is a UNIX timestamp displayed in UTC. Unit: seconds.
     *
     * @example 1722268800
     *
     * @var int
     */
    public $timestamp;
    protected $_name = [
        'abnormalHigh' => 'AbnormalHigh',
        'abnormalLow' => 'AbnormalLow',
        'abnormalMedium' => 'AbnormalMedium',
        'timeStamp' => 'TimeStamp',
        'timestamp' => 'Timestamp',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return trend
     */
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
