<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSystemEventMetaListResponseBody\data;

use AlibabaCloud\Tea\Model;

class resource extends Model
{
    /**
     * @description The type of the system event. Valid values:
     *
     *   StatusNotification
     *   Exception
     *   Maintenance
     *
     * @example Exception
     *
     * @var string
     */
    public $eventType;

    /**
     * @description The level of the alert. Valid values:
     *
     *   CRITICAL
     *   WARN
     *   INFO
     *
     * @example INFO
     *
     * @var string
     */
    public $level;

    /**
     * @description The name of the system event.
     *
     * @example SelectFailureRate
     *
     * @var string
     */
    public $name;

    /**
     * @description The description of the system event, in Chinese.
     *
     * @var string
     */
    public $nameDesc;

    /**
     * @var string
     */
    public $nameDesc_en;

    /**
     * @description The abbreviation of the service name.
     *
     * @example ADS
     *
     * @var string
     */
    public $product;

    /**
     * @description The status of the system event.
     *
     * @example failed
     *
     * @var string
     */
    public $status;

    /**
     * @description The description of the event status.
     *
     * @example Operation Failed
     *
     * @var string
     */
    public $statusDesc;
    protected $_name = [
        'eventType'   => 'EventType',
        'level'       => 'Level',
        'name'        => 'Name',
        'nameDesc'    => 'NameDesc',
        'nameDesc_en' => 'NameDesc.En',
        'product'     => 'Product',
        'status'      => 'Status',
        'statusDesc'  => 'StatusDesc',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->nameDesc) {
            $res['NameDesc'] = $this->nameDesc;
        }
        if (null !== $this->nameDesc_en) {
            $res['NameDesc.En'] = $this->nameDesc_en;
        }
        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->statusDesc) {
            $res['StatusDesc'] = $this->statusDesc;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NameDesc'])) {
            $model->nameDesc = $map['NameDesc'];
        }
        if (isset($map['NameDesc.En'])) {
            $model->nameDesc_en = $map['NameDesc.En'];
        }
        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StatusDesc'])) {
            $model->statusDesc = $map['StatusDesc'];
        }

        return $model;
    }
}
