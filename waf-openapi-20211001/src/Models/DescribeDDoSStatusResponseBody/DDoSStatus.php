<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDDoSStatusResponseBody;

use AlibabaCloud\Tea\Model;

class DDoSStatus extends Model
{
    /**
     * @description The type of events that are triggered by DDoS attacks. Valid values:
     *
     *   defense: traffic scrubbing events.
     *   blackhole: blackhole filtering events.
     *
     * @example blackhole
     *
     * @var string
     */
    public $eventType;

    /**
     * @description Indicates whether DDoS attacks occur on specific domain names. Valid value:
     *
     *   **doing**: DDoS attacks occur on specific domain names.
     *
     * @example doing
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'eventType' => 'EventType',
        'status'    => 'Status',
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DDoSStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
