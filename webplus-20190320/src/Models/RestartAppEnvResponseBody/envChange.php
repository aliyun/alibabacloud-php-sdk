<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebPlus\V20190320\Models\RestartAppEnvResponseBody;

use AlibabaCloud\Tea\Model;

class envChange extends Model
{
    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $changeId;

    /**
     * @var string
     */
    public $envId;
    protected $_name = [
        'startTime' => 'StartTime',
        'changeId'  => 'ChangeId',
        'envId'     => 'EnvId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->changeId) {
            $res['ChangeId'] = $this->changeId;
        }
        if (null !== $this->envId) {
            $res['EnvId'] = $this->envId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return envChange
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['ChangeId'])) {
            $model->changeId = $map['ChangeId'];
        }
        if (isset($map['EnvId'])) {
            $model->envId = $map['EnvId'];
        }

        return $model;
    }
}
