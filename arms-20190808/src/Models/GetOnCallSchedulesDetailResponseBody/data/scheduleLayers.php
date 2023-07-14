<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetOnCallSchedulesDetailResponseBody\data;

use AlibabaCloud\SDK\ARMS\V20190808\Models\GetOnCallSchedulesDetailResponseBody\data\scheduleLayers\restrictions;
use AlibabaCloud\Tea\Model;

class scheduleLayers extends Model
{
    /**
     * @description The ID list of users on duty.
     *
     * @var int[]
     */
    public $contactIds;

    /**
     * @description The limit on the time of the shift.
     *
     * @var restrictions[]
     */
    public $restrictions;

    /**
     * @description The type of the shift. Valid values:
     *
     *   DAY
     *   WEEK
     *   CUSTOM
     *
     * @example DAY
     *
     * @var string
     */
    public $rotationType;

    /**
     * @description The shift cycle. Unit: hours.
     *
     * @example 8
     *
     * @var int
     */
    public $shiftLength;

    /**
     * @description The date on which the shift change took effect.
     *
     * @example 2022-10-01
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'contactIds'   => 'ContactIds',
        'restrictions' => 'Restrictions',
        'rotationType' => 'RotationType',
        'shiftLength'  => 'ShiftLength',
        'startTime'    => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactIds) {
            $res['ContactIds'] = $this->contactIds;
        }
        if (null !== $this->restrictions) {
            $res['Restrictions'] = [];
            if (null !== $this->restrictions && \is_array($this->restrictions)) {
                $n = 0;
                foreach ($this->restrictions as $item) {
                    $res['Restrictions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->rotationType) {
            $res['RotationType'] = $this->rotationType;
        }
        if (null !== $this->shiftLength) {
            $res['ShiftLength'] = $this->shiftLength;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scheduleLayers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContactIds'])) {
            if (!empty($map['ContactIds'])) {
                $model->contactIds = $map['ContactIds'];
            }
        }
        if (isset($map['Restrictions'])) {
            if (!empty($map['Restrictions'])) {
                $model->restrictions = [];
                $n                   = 0;
                foreach ($map['Restrictions'] as $item) {
                    $model->restrictions[$n++] = null !== $item ? restrictions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RotationType'])) {
            $model->rotationType = $map['RotationType'];
        }
        if (isset($map['ShiftLength'])) {
            $model->shiftLength = $map['ShiftLength'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
