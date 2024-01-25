<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiops\V20200806\Models;

use AlibabaCloud\Tea\Model;

class ListCausePlanRequest extends Model
{
    /**
     * @var string
     */
    public $eventId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $rootCauseId;
    protected $_name = [
        'eventId'     => 'EventId',
        'instanceId'  => 'InstanceId',
        'rootCauseId' => 'RootCauseId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->rootCauseId) {
            $res['RootCauseId'] = $this->rootCauseId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCausePlanRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RootCauseId'])) {
            $model->rootCauseId = $map['RootCauseId'];
        }

        return $model;
    }
}
