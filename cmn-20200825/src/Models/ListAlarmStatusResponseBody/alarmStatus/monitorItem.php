<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models\ListAlarmStatusResponseBody\alarmStatus;

use AlibabaCloud\Tea\Model;

class monitorItem extends Model
{
    /**
     * @example SNMP
     *
     * @var string
     */
    public $collectionType;

    /**
     * @example ping monitor
     *
     * @var string
     */
    public $monitorItemDescription;

    /**
     * @example Ping_Monitor
     *
     * @var string
     */
    public $monitorItemName;
    protected $_name = [
        'collectionType'         => 'CollectionType',
        'monitorItemDescription' => 'MonitorItemDescription',
        'monitorItemName'        => 'MonitorItemName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->collectionType) {
            $res['CollectionType'] = $this->collectionType;
        }
        if (null !== $this->monitorItemDescription) {
            $res['MonitorItemDescription'] = $this->monitorItemDescription;
        }
        if (null !== $this->monitorItemName) {
            $res['MonitorItemName'] = $this->monitorItemName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return monitorItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CollectionType'])) {
            $model->collectionType = $map['CollectionType'];
        }
        if (isset($map['MonitorItemDescription'])) {
            $model->monitorItemDescription = $map['MonitorItemDescription'];
        }
        if (isset($map['MonitorItemName'])) {
            $model->monitorItemName = $map['MonitorItemName'];
        }

        return $model;
    }
}
