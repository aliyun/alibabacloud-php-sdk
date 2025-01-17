<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListVirusScanMachineEventResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListVirusScanMachineEventResponseBody\data\details;

class data extends Model
{
    /**
     * @var details[]
     */
    public $details;
    /**
     * @var int
     */
    public $eventId;
    /**
     * @var string
     */
    public $eventName;
    /**
     * @var string
     */
    public $instanceName;
    /**
     * @var string
     */
    public $internetIp;
    /**
     * @var string
     */
    public $intranetIp;
    /**
     * @var int
     */
    public $lastTimeStamp;
    /**
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
        if (\is_array($this->details)) {
            Model::validateArray($this->details);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->details) {
            if (\is_array($this->details)) {
                $res['Details'] = [];
                $n1             = 0;
                foreach ($this->details as $item1) {
                    $res['Details'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Details'])) {
            if (!empty($map['Details'])) {
                $model->details = [];
                $n1             = 0;
                foreach ($map['Details'] as $item1) {
                    $model->details[$n1++] = details::fromMap($item1);
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
