<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20230630\Models\QueryFreeStorageResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $consumed;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $endTimeUTC;

    /**
     * @var int
     */
    public $expired;

    /**
     * @var int
     */
    public $lifecycle;

    /**
     * @var int
     */
    public $months;

    /**
     * @var int
     */
    public $remainQuota;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $startTimeUTC;

    /**
     * @var int
     */
    public $type;
    protected $_name = [
        'consumed'     => 'Consumed',
        'endTime'      => 'EndTime',
        'endTimeUTC'   => 'EndTimeUTC',
        'expired'      => 'Expired',
        'lifecycle'    => 'Lifecycle',
        'months'       => 'Months',
        'remainQuota'  => 'RemainQuota',
        'startTime'    => 'StartTime',
        'startTimeUTC' => 'StartTimeUTC',
        'type'         => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->consumed) {
            $res['Consumed'] = $this->consumed;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->endTimeUTC) {
            $res['EndTimeUTC'] = $this->endTimeUTC;
        }
        if (null !== $this->expired) {
            $res['Expired'] = $this->expired;
        }
        if (null !== $this->lifecycle) {
            $res['Lifecycle'] = $this->lifecycle;
        }
        if (null !== $this->months) {
            $res['Months'] = $this->months;
        }
        if (null !== $this->remainQuota) {
            $res['RemainQuota'] = $this->remainQuota;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->startTimeUTC) {
            $res['StartTimeUTC'] = $this->startTimeUTC;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Consumed'])) {
            $model->consumed = $map['Consumed'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['EndTimeUTC'])) {
            $model->endTimeUTC = $map['EndTimeUTC'];
        }
        if (isset($map['Expired'])) {
            $model->expired = $map['Expired'];
        }
        if (isset($map['Lifecycle'])) {
            $model->lifecycle = $map['Lifecycle'];
        }
        if (isset($map['Months'])) {
            $model->months = $map['Months'];
        }
        if (isset($map['RemainQuota'])) {
            $model->remainQuota = $map['RemainQuota'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['StartTimeUTC'])) {
            $model->startTimeUTC = $map['StartTimeUTC'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
