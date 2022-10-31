<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class ModifyShowListRequest extends Model
{
    /**
     * @var string
     */
    public $casterId;

    /**
     * @var string
     */
    public $highPriorityShowId;

    /**
     * @var string
     */
    public $highPriorityShowStartTime;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var int
     */
    public $repeatTimes;

    /**
     * @var string
     */
    public $showId;

    /**
     * @var int
     */
    public $spot;
    protected $_name = [
        'casterId'                  => 'CasterId',
        'highPriorityShowId'        => 'HighPriorityShowId',
        'highPriorityShowStartTime' => 'HighPriorityShowStartTime',
        'ownerId'                   => 'OwnerId',
        'repeatTimes'               => 'RepeatTimes',
        'showId'                    => 'ShowId',
        'spot'                      => 'Spot',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->casterId) {
            $res['CasterId'] = $this->casterId;
        }
        if (null !== $this->highPriorityShowId) {
            $res['HighPriorityShowId'] = $this->highPriorityShowId;
        }
        if (null !== $this->highPriorityShowStartTime) {
            $res['HighPriorityShowStartTime'] = $this->highPriorityShowStartTime;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->repeatTimes) {
            $res['RepeatTimes'] = $this->repeatTimes;
        }
        if (null !== $this->showId) {
            $res['ShowId'] = $this->showId;
        }
        if (null !== $this->spot) {
            $res['Spot'] = $this->spot;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyShowListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CasterId'])) {
            $model->casterId = $map['CasterId'];
        }
        if (isset($map['HighPriorityShowId'])) {
            $model->highPriorityShowId = $map['HighPriorityShowId'];
        }
        if (isset($map['HighPriorityShowStartTime'])) {
            $model->highPriorityShowStartTime = $map['HighPriorityShowStartTime'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RepeatTimes'])) {
            $model->repeatTimes = $map['RepeatTimes'];
        }
        if (isset($map['ShowId'])) {
            $model->showId = $map['ShowId'];
        }
        if (isset($map['Spot'])) {
            $model->spot = $map['Spot'];
        }

        return $model;
    }
}
