<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListCallEventDetailByContactIdResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListCallEventDetailByContactIdResponseBody\data\events;

class data extends Model
{
    /**
     * @var string
     */
    public $callType;

    /**
     * @var string
     */
    public $callee;

    /**
     * @var string
     */
    public $caller;

    /**
     * @var events
     */
    public $events;

    /**
     * @var string
     */
    public $privacyNumber;

    /**
     * @var string
     */
    public $releaseAgent;

    /**
     * @var string
     */
    public $releaseReason;

    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'callType' => 'CallType',
        'callee' => 'Callee',
        'caller' => 'Caller',
        'events' => 'Events',
        'privacyNumber' => 'PrivacyNumber',
        'releaseAgent' => 'ReleaseAgent',
        'releaseReason' => 'ReleaseReason',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        if (null !== $this->events) {
            $this->events->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callType) {
            $res['CallType'] = $this->callType;
        }

        if (null !== $this->callee) {
            $res['Callee'] = $this->callee;
        }

        if (null !== $this->caller) {
            $res['Caller'] = $this->caller;
        }

        if (null !== $this->events) {
            $res['Events'] = null !== $this->events ? $this->events->toArray($noStream) : $this->events;
        }

        if (null !== $this->privacyNumber) {
            $res['PrivacyNumber'] = $this->privacyNumber;
        }

        if (null !== $this->releaseAgent) {
            $res['ReleaseAgent'] = $this->releaseAgent;
        }

        if (null !== $this->releaseReason) {
            $res['ReleaseReason'] = $this->releaseReason;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['CallType'])) {
            $model->callType = $map['CallType'];
        }

        if (isset($map['Callee'])) {
            $model->callee = $map['Callee'];
        }

        if (isset($map['Caller'])) {
            $model->caller = $map['Caller'];
        }

        if (isset($map['Events'])) {
            $model->events = events::fromMap($map['Events']);
        }

        if (isset($map['PrivacyNumber'])) {
            $model->privacyNumber = $map['PrivacyNumber'];
        }

        if (isset($map['ReleaseAgent'])) {
            $model->releaseAgent = $map['ReleaseAgent'];
        }

        if (isset($map['ReleaseReason'])) {
            $model->releaseReason = $map['ReleaseReason'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
