<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Accountcrm\V20160606\Models\GetAgOneKeyDeleteTaskResponseBody;

use AlibabaCloud\Dara\Model;

class taskDto extends Model
{
    /**
     * @var string
     */
    public $deleteStatus;

    /**
     * @var bool
     */
    public $existQuietPeriod;

    /**
     * @var string
     */
    public $quietPeriodEndTime;
    protected $_name = [
        'deleteStatus' => 'DeleteStatus',
        'existQuietPeriod' => 'ExistQuietPeriod',
        'quietPeriodEndTime' => 'QuietPeriodEndTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deleteStatus) {
            $res['DeleteStatus'] = $this->deleteStatus;
        }

        if (null !== $this->existQuietPeriod) {
            $res['ExistQuietPeriod'] = $this->existQuietPeriod;
        }

        if (null !== $this->quietPeriodEndTime) {
            $res['QuietPeriodEndTime'] = $this->quietPeriodEndTime;
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
        if (isset($map['DeleteStatus'])) {
            $model->deleteStatus = $map['DeleteStatus'];
        }

        if (isset($map['ExistQuietPeriod'])) {
            $model->existQuietPeriod = $map['ExistQuietPeriod'];
        }

        if (isset($map['QuietPeriodEndTime'])) {
            $model->quietPeriodEndTime = $map['QuietPeriodEndTime'];
        }

        return $model;
    }
}
