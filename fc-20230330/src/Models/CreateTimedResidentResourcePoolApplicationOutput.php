<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class CreateTimedResidentResourcePoolApplicationOutput extends Model
{
    /**
     * @var string
     */
    public $applicationStatus;

    /**
     * @var string
     */
    public $timedPoolId;
    protected $_name = [
        'applicationStatus' => 'applicationStatus',
        'timedPoolId' => 'timedPoolId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationStatus) {
            $res['applicationStatus'] = $this->applicationStatus;
        }

        if (null !== $this->timedPoolId) {
            $res['timedPoolId'] = $this->timedPoolId;
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
        if (isset($map['applicationStatus'])) {
            $model->applicationStatus = $map['applicationStatus'];
        }

        if (isset($map['timedPoolId'])) {
            $model->timedPoolId = $map['timedPoolId'];
        }

        return $model;
    }
}
