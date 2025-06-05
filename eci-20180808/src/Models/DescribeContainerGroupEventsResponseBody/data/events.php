<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupEventsResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupEventsResponseBody\data\events\involvedObject;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupEventsResponseBody\data\events\metadata;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupEventsResponseBody\data\events\source;

class events extends Model
{
    /**
     * @var int
     */
    public $count;

    /**
     * @var string
     */
    public $firstTimestamp;

    /**
     * @var string
     */
    public $lastTimestamp;

    /**
     * @var string
     */
    public $message;

    /**
     * @var metadata
     */
    public $metadata;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var string
     */
    public $reportingComponent;

    /**
     * @var string
     */
    public $reportingInstance;

    /**
     * @var source
     */
    public $source;

    /**
     * @var string
     */
    public $type;

    /**
     * @var involvedObject
     */
    public $involvedObject;
    protected $_name = [
        'count' => 'Count',
        'firstTimestamp' => 'FirstTimestamp',
        'lastTimestamp' => 'LastTimestamp',
        'message' => 'Message',
        'metadata' => 'Metadata',
        'reason' => 'Reason',
        'reportingComponent' => 'ReportingComponent',
        'reportingInstance' => 'ReportingInstance',
        'source' => 'Source',
        'type' => 'Type',
        'involvedObject' => 'involvedObject',
    ];

    public function validate()
    {
        if (null !== $this->metadata) {
            $this->metadata->validate();
        }
        if (null !== $this->source) {
            $this->source->validate();
        }
        if (null !== $this->involvedObject) {
            $this->involvedObject->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['Metadata'] = null !== $this->metadata ? $this->metadata->toArray($noStream) : $this->metadata;
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
            $res['Source'] = null !== $this->source ? $this->source->toArray($noStream) : $this->source;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->involvedObject) {
            $res['involvedObject'] = null !== $this->involvedObject ? $this->involvedObject->toArray($noStream) : $this->involvedObject;
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
