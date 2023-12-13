<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupEventsResponseBody\data;

use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupEventsResponseBody\data\events\involvedObject;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupEventsResponseBody\data\events\metadata;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupEventsResponseBody\data\events\source;
use AlibabaCloud\Tea\Model;

class events extends Model
{
    /**
     * @description The number of events.
     *
     * @example 10
     *
     * @var int
     */
    public $count;

    /**
     * @description The first occurrence time of the event.
     *
     * @example 2021-10-04T09:08:04Z
     *
     * @var string
     */
    public $firstTimestamp;

    /**
     * @description The most recent occurrence time of the event.
     *
     * @example 2021-10-04T09:08:04Z
     *
     * @var string
     */
    public $lastTimestamp;

    /**
     * @description The message about the event.
     *
     * @example Started container
     *
     * @var string
     */
    public $message;

    /**
     * @description The metadata of the event.
     *
     * @var metadata
     */
    public $metadata;

    /**
     * @description The cause of the event.
     *
     * @example Started
     *
     * @var string
     */
    public $reason;

    /**
     * @description The component from which the event is reported.
     *
     * @example test
     *
     * @var string
     */
    public $reportingComponent;

    /**
     * @description The instance from which the event is reported.
     *
     * @example test
     *
     * @var string
     */
    public $reportingInstance;

    /**
     * @description The source.
     *
     * @var source
     */
    public $source;

    /**
     * @description The event type. Valid values:
     *
     *   Normal
     *   Warning
     *
     * @example Normal
     *
     * @var string
     */
    public $type;

    /**
     * @description The resource object that the event is about.
     *
     * @var involvedObject
     */
    public $involvedObject;
    protected $_name = [
        'count'              => 'Count',
        'firstTimestamp'     => 'FirstTimestamp',
        'lastTimestamp'      => 'LastTimestamp',
        'message'            => 'Message',
        'metadata'           => 'Metadata',
        'reason'             => 'Reason',
        'reportingComponent' => 'ReportingComponent',
        'reportingInstance'  => 'ReportingInstance',
        'source'             => 'Source',
        'type'               => 'Type',
        'involvedObject'     => 'involvedObject',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->firstTimestamp) {
            $res['FirstTimestamp'] = $this->firstTimestamp;
        }
        if (null !== $this->lastTimestamp) {
            $res['LastTimestamp'] = $this->lastTimestamp;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->metadata) {
            $res['Metadata'] = null !== $this->metadata ? $this->metadata->toMap() : null;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->reportingComponent) {
            $res['ReportingComponent'] = $this->reportingComponent;
        }
        if (null !== $this->reportingInstance) {
            $res['ReportingInstance'] = $this->reportingInstance;
        }
        if (null !== $this->source) {
            $res['Source'] = null !== $this->source ? $this->source->toMap() : null;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->involvedObject) {
            $res['involvedObject'] = null !== $this->involvedObject ? $this->involvedObject->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return events
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['FirstTimestamp'])) {
            $model->firstTimestamp = $map['FirstTimestamp'];
        }
        if (isset($map['LastTimestamp'])) {
            $model->lastTimestamp = $map['LastTimestamp'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Metadata'])) {
            $model->metadata = metadata::fromMap($map['Metadata']);
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['ReportingComponent'])) {
            $model->reportingComponent = $map['ReportingComponent'];
        }
        if (isset($map['ReportingInstance'])) {
            $model->reportingInstance = $map['ReportingInstance'];
        }
        if (isset($map['Source'])) {
            $model->source = source::fromMap($map['Source']);
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['involvedObject'])) {
            $model->involvedObject = involvedObject::fromMap($map['involvedObject']);
        }

        return $model;
    }
}
