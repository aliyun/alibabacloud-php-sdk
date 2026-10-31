<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\RemoveScheduleMonitorRequest;

use AlibabaCloud\Dara\Model;

class removeCommand extends Model
{
    /**
     * @var int
     */
    public $monitoredItemId;

    /**
     * @var string
     */
    public $monitoredItemType;
    protected $_name = [
        'monitoredItemId' => 'MonitoredItemId',
        'monitoredItemType' => 'MonitoredItemType',
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

        if (null !== $this->monitoredItemType) {
            $res['MonitoredItemType'] = $this->monitoredItemType;
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

        if (isset($map['MonitoredItemType'])) {
            $model->monitoredItemType = $map['MonitoredItemType'];
        }

        return $model;
    }
}
