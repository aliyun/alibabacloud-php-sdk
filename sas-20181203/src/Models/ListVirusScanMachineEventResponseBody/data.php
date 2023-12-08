<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListVirusScanMachineEventResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListVirusScanMachineEventResponseBody\data\details;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The details of the exception.
     *
     * @var details[]
     */
    public $details;

    /**
     * @description The ID of the alert event.
     *
     * @example 911273
     *
     * @var int
     */
    public $eventId;

    /**
     * @description The name of the alert event. The value indicates a subtype.
     *
     * @example Unusual Logon
     *
     * @var string
     */
    public $eventName;

    /**
     * @description The name of the instance.
     *
     * @example i-wz92q7m5hsbgfhdss***
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The public IP address.
     *
     * @example 172.16.XX.XX
     *
     * @var string
     */
    public $internetIp;

    /**
     * @description The private IP address.
     *
     * @example 10.42.XX.XX
     *
     * @var string
     */
    public $intranetIp;

    /**
     * @description The timestamp when the alert event was last generated. Unit: milliseconds.
     *
     * @example 1682046733628
     *
     * @var int
     */
    public $lastTimeStamp;

    /**
     * @description The risk level of the alert event. Valid values:
     *
     *   **serious**
     *   **suspicious**
     *   **remind**
     *
     * @example serious
     *
     * @var string
     */
    public $level;
    protected $_name = [
        'details'       => 'Details',
        'eventId'       => 'EventId',
        'eventName'     => 'EventName',
        'instanceName'  => 'InstanceName',
        'internetIp'    => 'InternetIp',
        'intranetIp'    => 'IntranetIp',
        'lastTimeStamp' => 'LastTimeStamp',
        'level'         => 'Level',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->details) {
            $res['Details'] = [];
            if (null !== $this->details && \is_array($this->details)) {
                $n = 0;
                foreach ($this->details as $item) {
                    $res['Details'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }
        if (null !== $this->eventName) {
            $res['EventName'] = $this->eventName;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }
        if (null !== $this->intranetIp) {
            $res['IntranetIp'] = $this->intranetIp;
        }
        if (null !== $this->lastTimeStamp) {
            $res['LastTimeStamp'] = $this->lastTimeStamp;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Details'])) {
            if (!empty($map['Details'])) {
                $model->details = [];
                $n              = 0;
                foreach ($map['Details'] as $item) {
                    $model->details[$n++] = null !== $item ? details::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }
        if (isset($map['EventName'])) {
            $model->eventName = $map['EventName'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }
        if (isset($map['IntranetIp'])) {
            $model->intranetIp = $map['IntranetIp'];
        }
        if (isset($map['LastTimeStamp'])) {
            $model->lastTimeStamp = $map['LastTimeStamp'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }

        return $model;
    }
}
