<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RiskManagement\V20260424\Models\QueryAccountSafetyIncidentResponseBody\data\list_;

use AlibabaCloud\Dara\Model;

class dateExtras extends Model
{
    /**
     * @var string
     */
    public $alertEndTime;

    /**
     * @var string
     */
    public $alertStartTime;

    /**
     * @var string
     */
    public $lastCheckTime;
    protected $_name = [
        'alertEndTime' => 'AlertEndTime',
        'alertStartTime' => 'AlertStartTime',
        'lastCheckTime' => 'LastCheckTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertEndTime) {
            $res['AlertEndTime'] = $this->alertEndTime;
        }

        if (null !== $this->alertStartTime) {
            $res['AlertStartTime'] = $this->alertStartTime;
        }

        if (null !== $this->lastCheckTime) {
            $res['LastCheckTime'] = $this->lastCheckTime;
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
        if (isset($map['AlertEndTime'])) {
            $model->alertEndTime = $map['AlertEndTime'];
        }

        if (isset($map['AlertStartTime'])) {
            $model->alertStartTime = $map['AlertStartTime'];
        }

        if (isset($map['LastCheckTime'])) {
            $model->lastCheckTime = $map['LastCheckTime'];
        }

        return $model;
    }
}
