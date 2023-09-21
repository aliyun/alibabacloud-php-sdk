<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSimilarSecurityEventsResponseBody;

use AlibabaCloud\Tea\Model;

class securityEventsResponse extends Model
{
    /**
     * @description The name of the alert event.
     *
     * @example Trojan
     *
     * @var string
     */
    public $eventName;

    /**
     * @description The type of the alert event. Valid values:
     *
     *   Suspicious Process
     *   Webshell
     *   Unusual Logon
     *   Malicious Software
     *   Sensitive File Tampering
     *   Unusual Network Connection
     *   Other
     *   Suspicious Account
     *   Cloud threat detection
     *   Precision defense
     *   Application Whitelist
     *   Persistence
     *   Web Application Threat Detection
     *   Malicious scripts
     *   Malicious Network Activity
     *   K8s Abnormal Behavior
     *   Website backdoor (local engine)
     *   Exploit
     *   Image Scan
     *   Trusted exception
     *
     * For more information about alert types, see [Overview](~~68388~~).
     * @example Malicious Software
     *
     * @var string
     */
    public $eventType;

    /**
     * @description The timestamp generated when the alert event was last detected. Unit: milliseconds.
     *
     * @example 1648544361480
     *
     * @var int
     */
    public $lastTime;

    /**
     * @description The timestamp generated when the alert event was first detected. Unit: milliseconds.
     *
     * @example 1648457961000
     *
     * @var int
     */
    public $occurrenceTime;

    /**
     * @description The ID of the alert event.
     *
     * @example 158661
     *
     * @var int
     */
    public $securityEventId;

    /**
     * @description The UUID of the server that was affected by the alert event.
     *
     * @example qweeqq-13232-daweq-w****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'eventName'       => 'EventName',
        'eventType'       => 'EventType',
        'lastTime'        => 'LastTime',
        'occurrenceTime'  => 'OccurrenceTime',
        'securityEventId' => 'SecurityEventId',
        'uuid'            => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventName) {
            $res['EventName'] = $this->eventName;
        }
        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }
        if (null !== $this->lastTime) {
            $res['LastTime'] = $this->lastTime;
        }
        if (null !== $this->occurrenceTime) {
            $res['OccurrenceTime'] = $this->occurrenceTime;
        }
        if (null !== $this->securityEventId) {
            $res['SecurityEventId'] = $this->securityEventId;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return securityEventsResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventName'])) {
            $model->eventName = $map['EventName'];
        }
        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }
        if (isset($map['LastTime'])) {
            $model->lastTime = $map['LastTime'];
        }
        if (isset($map['OccurrenceTime'])) {
            $model->occurrenceTime = $map['OccurrenceTime'];
        }
        if (isset($map['SecurityEventId'])) {
            $model->securityEventId = $map['SecurityEventId'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
