<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListAliyunOfficialEventSourcesResponseBody\data;

use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListAliyunOfficialEventSourcesResponseBody\data\eventSourceList\eventTypes;
use AlibabaCloud\Tea\Model;

class eventSourceList extends Model
{
    /**
     * @description The Alibaba Cloud Resource Name (ARN) of the event bus.
     *
     * @example acs:eventbridge:cn-hangzhou:SYSTEM:eventsource/acs.aliyuncvc
     *
     * @var string
     */
    public $arn;

    /**
     * @description The time when the event source was created. Unit: milliseconds.
     *
     * @example 1607071602000
     *
     * @var float
     */
    public $ctime;

    /**
     * @description The description of the event source.
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the event source to which the event type belongs.
     *
     * @example acs.aliyuncvc
     *
     * @var string
     */
    public $eventBusName;

    /**
     * @description The event types.
     *
     * @var eventTypes[]
     */
    public $eventTypes;

    /**
     * @description The full name of the event source.
     *
     * @example E-MapReduce
     *
     * @var string
     */
    public $fullName;

    /**
     * @description The name of the event source.
     *
     * @example acs.aliyuncvc
     *
     * @var string
     */
    public $name;

    /**
     * @description The status of the event source. Valid value: Activated.
     *
     * @example Activated
     *
     * @var string
     */
    public $status;

    /**
     * @description The type of the event source.
     *
     * @example 1
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'arn'          => 'Arn',
        'ctime'        => 'Ctime',
        'description'  => 'Description',
        'eventBusName' => 'EventBusName',
        'eventTypes'   => 'EventTypes',
        'fullName'     => 'FullName',
        'name'         => 'Name',
        'status'       => 'Status',
        'type'         => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->arn) {
            $res['Arn'] = $this->arn;
        }
        if (null !== $this->ctime) {
            $res['Ctime'] = $this->ctime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->eventBusName) {
            $res['EventBusName'] = $this->eventBusName;
        }
        if (null !== $this->eventTypes) {
            $res['EventTypes'] = [];
            if (null !== $this->eventTypes && \is_array($this->eventTypes)) {
                $n = 0;
                foreach ($this->eventTypes as $item) {
                    $res['EventTypes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->fullName) {
            $res['FullName'] = $this->fullName;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eventSourceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Arn'])) {
            $model->arn = $map['Arn'];
        }
        if (isset($map['Ctime'])) {
            $model->ctime = $map['Ctime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EventBusName'])) {
            $model->eventBusName = $map['EventBusName'];
        }
        if (isset($map['EventTypes'])) {
            if (!empty($map['EventTypes'])) {
                $model->eventTypes = [];
                $n                 = 0;
                foreach ($map['EventTypes'] as $item) {
                    $model->eventTypes[$n++] = null !== $item ? eventTypes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['FullName'])) {
            $model->fullName = $map['FullName'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
