<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeDiagnosticReportsResponseBody\reports\report\recentEvents;

use AlibabaCloud\Tea\Model;

class recentEvent extends Model
{
    /**
     * @var string
     */
    public $eventID;

    /**
     * @var string
     */
    public $eventName;

    /**
     * @var string
     */
    public $publishTime;
    protected $_name = [
        'eventID'     => 'EventID',
        'eventName'   => 'EventName',
        'publishTime' => 'PublishTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventID) {
            $res['EventID'] = $this->eventID;
        }
        if (null !== $this->eventName) {
            $res['EventName'] = $this->eventName;
        }
        if (null !== $this->publishTime) {
            $res['PublishTime'] = $this->publishTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return recentEvent
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventID'])) {
            $model->eventID = $map['EventID'];
        }
        if (isset($map['EventName'])) {
            $model->eventName = $map['EventName'];
        }
        if (isset($map['PublishTime'])) {
            $model->publishTime = $map['PublishTime'];
        }

        return $model;
    }
}
