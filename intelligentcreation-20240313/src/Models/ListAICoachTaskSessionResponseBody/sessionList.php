<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\ListAICoachTaskSessionResponseBody;

use AlibabaCloud\Dara\Model;

class sessionList extends Model
{
    /**
     * @var string
     */
    public $sessionCreateTime;

    /**
     * @var int
     */
    public $sessionDuration;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var int
     */
    public $sessionStatus;
    protected $_name = [
        'sessionCreateTime' => 'sessionCreateTime',
        'sessionDuration' => 'sessionDuration',
        'sessionId' => 'sessionId',
        'sessionStatus' => 'sessionStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sessionCreateTime) {
            $res['sessionCreateTime'] = $this->sessionCreateTime;
        }

        if (null !== $this->sessionDuration) {
            $res['sessionDuration'] = $this->sessionDuration;
        }

        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
        }

        if (null !== $this->sessionStatus) {
            $res['sessionStatus'] = $this->sessionStatus;
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
        if (isset($map['sessionCreateTime'])) {
            $model->sessionCreateTime = $map['sessionCreateTime'];
        }

        if (isset($map['sessionDuration'])) {
            $model->sessionDuration = $map['sessionDuration'];
        }

        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }

        if (isset($map['sessionStatus'])) {
            $model->sessionStatus = $map['sessionStatus'];
        }

        return $model;
    }
}
