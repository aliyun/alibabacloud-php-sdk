<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateScheduleMonitorResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $monitoredItemId;
    protected $_name = [
        'monitoredItemId' => 'MonitoredItemId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->monitoredItemId) {
            $res['MonitoredItemId'] = $this->monitoredItemId;
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
        if (isset($map['MonitoredItemId'])) {
            $model->monitoredItemId = $map['MonitoredItemId'];
        }

        return $model;
    }
}
